<?php
require_once 'db_connection.php';

header('Content-Type: application/json');

$discountCode = filter_input(INPUT_POST, 'discount_code', FILTER_SANITIZE_STRING);
$currentDate = date('Y-m-d');

if (empty($discountCode)) {
    echo json_encode([
        'valid' => false,
        'message' => 'Please enter a discount code'
    ]);
    exit;
}

try {
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
        echo json_encode([
            'valid' => true,
            'message' => 'Discount applied successfully',
            'discount' => [
                'code' => $discount['code'],
                'discount_type' => $discount['discount_type'],
                'discount_value' => $discount['discount_value']
            ]
        ]);
    } else {
        echo json_encode([
            'valid' => false,
            'message' => 'Invalid or expired discount code'
        ]);
    }
} catch (PDOException $e) {
    error_log("Discount check error: " . $e->getMessage());
    echo json_encode([
        'valid' => false,
        'message' => 'Error checking discount code'
    ]);
}
?>