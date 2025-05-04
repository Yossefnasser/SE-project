<?php
require_once 'db_connection.php';

// Initialize variables
$errors = [];
$orderData = [];
$orderItems = [];

// Validate and sanitize input
$orderData['first_name'] = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
$orderData['last_name'] = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
$orderData['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$orderData['phone'] = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$orderData['visit_date'] = filter_input(INPUT_POST, 'visit_date', FILTER_SANITIZE_STRING);

// Basic validation
if (empty($orderData['first_name'])) $errors[] = 'First name is required';
if (empty($orderData['last_name'])) $errors[] = 'Last name is required';
if (!$orderData['email']) $errors[] = 'Valid email is required';
if (empty($orderData['visit_date'])) $errors[] = 'Visit date is required';

// Validate tickets
$tickets = $_POST['tickets'] ?? [];
$hasTickets = false;

foreach ($tickets as $ticketTypeId => $quantity) {
    $quantity = (int)$quantity;
    if ($quantity > 0) {
        $hasTickets = true;
        
        // Validate ticket type exists
        $stmt = $db->prepare("SELECT * FROM ticket_types WHERE id = ? AND is_active = TRUE");
        $stmt->execute([$ticketTypeId]);
        $ticketType = $stmt->fetch();
        
        if (!$ticketType) {
            $errors[] = "Invalid ticket type selected";
            continue;
        }
        
        // Validate quantity
        if ($quantity > $ticketType['max_per_order']) {
            $errors[] = "Maximum quantity exceeded for {$ticketType['name']}";
            continue;
        }
        
        $orderItems[] = [
            'ticket_type_id' => $ticketTypeId,
            'quantity' => $quantity,
            'unit_price' => $ticketType['base_price'],
            'exhibition_id' => null
        ];
    }
}

// Validate exhibitions if selected
$exhibitions = $_POST['exhibitions'] ?? [];
$currentDate = date('Y-m-d');

foreach ($exhibitions as $exhibitionId => $selected) {
    if ($selected) {
        $stmt = $db->prepare("SELECT * FROM special_exhibitions WHERE id = ? AND start_date <= ? AND end_date >= ?");
        $stmt->execute([$exhibitionId, $currentDate, $currentDate]);
        $exhibition = $stmt->fetch();
        
        if ($exhibition) {
            // Add exhibition fee as a separate line item
            if ($exhibition['additional_fee'] > 0) {
                $orderItems[] = [
                    'ticket_type_id' => null,
                    'quantity' => 1,
                    'unit_price' => $exhibition['additional_fee'],
                    'exhibition_id' => $exhibitionId
                ];
            }
        }
    }
}

// Check if at least one ticket was selected
if (!$hasTickets) {
    $errors[] = "Please select at least one ticket";
}

// Process discount code if provided
$discountCode = trim($_POST['discount_code'] ?? '');
$discountId = null;
$discountAmount = 0;

if (!empty($discountCode)) {
    $stmt = $db->prepare("
        SELECT * FROM discounts 
        WHERE code = ? 
        AND start_date <= ? 
        AND end_date >= ? 
        AND (max_uses IS NULL OR current_uses < max_uses)
    ");
    $stmt->execute([$discountCode, $currentDate, $currentDate]);
    $discount = $stmt->fetch();
    
    if ($discount) {
        $discountId = $discount['id'];
    } else {
        $errors[] = "Invalid or expired discount code";
    }
}

// If no errors, process the order
if (empty($errors)) {
    try {
        $db->beginTransaction();
        
        // Calculate total amount
        $subtotal = 0;
        foreach ($orderItems as $item) {
            $subtotal += $item['quantity'] * $item['unit_price'];
        }
        
        // Apply discount
        $totalAmount = $subtotal;
        if ($discountId) {
            $stmt = $db->prepare("SELECT discount_type, discount_value FROM discounts WHERE id = ?");
            $stmt->execute([$discountId]);
            $discount = $stmt->fetch();
            
            if ($discount['discount_type'] === 'percentage') {
                $discountAmount = $subtotal * ($discount['discount_value'] / 100);
            } else {
                $discountAmount = $discount['discount_value'];
            }
            
            $totalAmount = max(0, $subtotal - $discountAmount);
            
            // Update discount uses
            $stmt = $db->prepare("UPDATE discounts SET current_uses = current_uses + 1 WHERE id = ?");
            $stmt->execute([$discountId]);
        }
        
        // Generate order number
        $orderNumber = 'T-' . strtoupper(substr(uniqid(), -8));
        
        // Create order record
        $stmt = $db->prepare("
            INSERT INTO orders (
                order_number,
                customer_name,
                customer_email,
                total_amount,
                discount_id,
                status
            ) VALUES (?, ?, ?, ?, ?, 'completed')
        ");
        
        $customerName = "{$orderData['first_name']} {$orderData['last_name']}";
        $stmt->execute([
            $orderNumber,
            $customerName,
            $orderData['email'],
            $totalAmount,
            $discountId
        ]);
        
        $orderId = $db->lastInsertId();
        
        // Create order items
        foreach ($orderItems as $item) {
            $stmt = $db->prepare("
                INSERT INTO order_items (
                    order_id,
                    ticket_type_id,
                    exhibition_id,
                    quantity,
                    unit_price
                ) VALUES (?, ?, ?, ?, ?)
            ");
            $stmt->execute([
                $orderId,
                $item['ticket_type_id'],
                $item['exhibition_id'],
                $item['quantity'],
                $item['unit_price']
            ]);
        }
        
        $db->commit();
        
        // Send confirmation email (in a real application)
        // sendConfirmationEmail($orderData, $orderNumber, $orderItems, $totalAmount);
        
        // Redirect to success page
        header("Location: tickets.php?success=1");
        exit;
        
    } catch (PDOException $e) {
        $db->rollBack();
        $errors[] = "Error processing your order. Please try again.";
        error_log("Order processing error: " . $e->getMessage());
    }
}

// If we got here, there were errors
$_SESSION['ticket_errors'] = $errors;
$_SESSION['form_data'] = $_POST;
header("Location: tickets.php");
exit;
?>