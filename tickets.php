<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$page_title = "Buy Tickets - The Heritage Museum";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
// require_once 'includes/db_connection.php';

// Fetch ticket types
// $ticketTypes = $db->query("SELECT * FROM ticket_types WHERE is_active = TRUE ORDER BY base_price")->fetchAll();

// // Fetch current special exhibitions
// $currentDate = date('Y-m-d');
// $exhibitions = $db->prepare("
//     SELECT * FROM special_exhibitions 
//     WHERE start_date <= ? AND end_date >= ?
//     ORDER BY start_date
// ");
// $exhibitions->execute([$currentDate, $currentDate]);
// $exhibitions = $exhibitions->fetchAll();

// // Process form submission
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     require_once 'includes/process_tickets.php';
// }
?>

<!-- Hero Section -->
<section class="hero-section position-relative" style="height: 50vh; min-height: 400px;">
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <img class="object-fit-cover w-100 h-100" src="assets/img/tickets-hero.jpg" alt="Museum Tickets">
    </div>
    <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
    <div class="container position-relative h-100 d-flex align-items-center">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bold mb-3">Museum Tickets</h1>
            <p class="lead mb-4">Secure your visit to The Heritage Museum</p>
        </div>
    </div>
</section>

<!-- Ticket Selection Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Select Your Tickets</h2>
                        
                        <?php if (isset($_GET['success'])) { ?>
                            <div class="alert alert-success">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Thank you for your purchase! Your tickets have been reserved. A confirmation has been sent to your email.
                            </div>
                        <?php } ?>
                        
                        <form id="ticketForm" method="POST">
                            <!-- Ticket Types -->
                            <div class="mb-5">
                                <h3 class="h5 mb-3 border-bottom pb-2">General Admission</h3>
                                <?php foreach ($ticketTypes as $ticket) : ?>
                                    <div class="card mb-3 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <h4 class="h6 mb-1"><?= htmlspecialchars($ticket['name']) ?></h4>
                                                    <?php if (!empty($ticket['description'])) : ?>
                                                        <p class="small text-muted mb-0"><?= htmlspecialchars($ticket['description']) ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-3 text-md-end">
                                                    <span class="fw-bold">$<?= number_format($ticket['base_price'], 2) ?></span>
                                                </div>
                                                <div class="col-md-3">
                                                    <select name="tickets[<?= $ticket['id'] ?>]" class="form-select form-select-sm">
                                                        <option value="0">0</option>
                                                        <?php for ($i = 1; $i <= $ticket['max_per_order']; $i++) : ?>
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <!-- Special Exhibitions -->
                            <?php if (!empty($exhibitions)) : ?>
                                <div class="mb-5">
                                    <h3 class="h5 mb-3 border-bottom pb-2">Special Exhibitions</h3>
                                    <?php foreach ($exhibitions as $exhibition) : ?>
                                        <div class="card mb-3 border-0 shadow-sm">
                                            <div class="row g-0">
                                                <?php if (!empty($exhibition['image_url'])) : ?>
                                                    <div class="col-md-4">
                                                        <img src="<?= htmlspecialchars($exhibition['image_url']) ?>" class="img-fluid rounded-start h-100 object-fit-cover" alt="<?= htmlspecialchars($exhibition['title']) ?>">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="<?= !empty($exhibition['image_url']) ? 'col-md-8' : 'col-md-12' ?>">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="<?= !empty($exhibition['image_url']) ? 'col-md-6' : 'col-md-8' ?>">
                                                                <h4 class="h6 mb-1"><?= htmlspecialchars($exhibition['title']) ?></h4>
                                                                <p class="small text-muted mb-2">
                                                                    <?= date('F j, Y', strtotime($exhibition['start_date'])) ?> - <?= date('F j, Y', strtotime($exhibition['end_date'])) ?>
                                                                </p>
                                                                <?php if (!empty($exhibition['description'])) : ?>
                                                                    <p class="small mb-0"><?= htmlspecialchars($exhibition['description']) ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="<?= !empty($exhibition['image_url']) ? 'col-md-3' : 'col-md-2' ?> text-md-end">
                                                                <?php if ($exhibition['additional_fee'] > 0) : ?>
                                                                    <span class="fw-bold">+$<?= number_format($exhibition['additional_fee'], 2) ?></span>
                                                                <?php else : ?>
                                                                    <span class="fw-bold text-success">FREE</span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="<?= !empty($exhibition['image_url']) ? 'col-md-3' : 'col-md-2' ?>">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" 
                                                                        id="exhibition_<?= $exhibition['id'] ?>" 
                                                                        name="exhibitions[<?= $exhibition['id'] ?>]"
                                                                        value="1">
                                                                    <label class="form-check-label small" for="exhibition_<?= $exhibition['id'] ?>">
                                                                        Add to visit
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Discount Code -->
                            <div class="mb-4">
                                <h3 class="h5 mb-3 border-bottom pb-2">Discount Code</h3>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="discount_code" placeholder="Enter discount code">
                                    <button class="btn btn-outline-secondary" type="button" id="applyDiscount">Apply</button>
                                </div>
                                <div id="discountMessage" class="small mt-2"></div>
                            </div>
                            
                            <!-- Summary -->
                            <div class="card border-0 bg-light mb-4">
                                <div class="card-body">
                                    <h3 class="h5 mb-3">Order Summary</h3>
                                    <div id="orderSummary">
                                        <p class="text-muted small">Select tickets to see pricing</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                        <span class="fw-bold">Total:</span>
                                        <span id="orderTotal" class="h5 mb-0">$0.00</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Visitor Information -->
                            <div class="mb-4">
                                <h3 class="h5 mb-3 border-bottom pb-2">Visitor Information</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label small">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="first_name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label small">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="last_name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label small">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label small">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="col-12">
                                        <label for="visitDate" class="form-label small">Visit Date</label>
                                        <input type="date" class="form-control" id="visitDate" name="visit_date" required>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Payment Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-credit-card me-2"></i> Proceed to Payment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Membership CTA -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Become a Member</h2>
        <p class="lead mb-4">Enjoy unlimited free admission and exclusive benefits</p>
        <a href="membership.php" class="btn btn-outline-primary px-4">
            <i class="bi bi-person-vip me-2"></i> Learn About Membership
        </a>
    </div>
</section>

<!-- FAQs -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Ticket FAQs</h2>
            <div class="mx-auto bg-primary" style="height:2px; width:80px;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="ticketFaqs">
                    <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
                        <h3 class="accordion-header" id="faqHeadingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne">
                                What is your refund policy?
                            </button>
                        </h3>
                        <div id="faqCollapseOne" class="accordion-collapse collapse" data-bs-parent="#ticketFaqs">
                            <div class="accordion-body">
                                Tickets are non-refundable but may be exchanged for a different date up to 24 hours before your scheduled visit, subject to availability. Please contact our visitor services for assistance with exchanges.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
                        <h3 class="accordion-header" id="faqHeadingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo">
                                Do I need to print my tickets?
                            </button>
                        </h3>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#ticketFaqs">
                            <div class="accordion-body">
                                No, printed tickets are not required. You can present your ticket confirmation on your mobile device or provide your name and confirmation number at the ticket counter.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3 rounded overflow-hidden">
                        <h3 class="accordion-header" id="faqHeadingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree">
                                Is timed entry required?
                            </button>
                        </h3>
                        <div id="faqCollapseThree" class="accordion-collapse collapse" data-bs-parent="#ticketFaqs">
                            <div class="accordion-body">
                                General admission tickets do not require timed entry. However, some special exhibitions may have timed entry tickets to manage capacity. If timed entry is required, it will be clearly indicated during the purchase process.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="contact.php" class="btn btn-outline-primary">
                        <i class="bi bi-question-circle me-2"></i> More Questions? Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Client-side calculations and form handling
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ticketForm');
    const ticketSelects = form.querySelectorAll('select[name^="tickets"]');
    const exhibitionCheckboxes = form.querySelectorAll('input[name^="exhibitions"]');
    const discountInput = form.querySelector('input[name="discount_code"]');
    const applyDiscountBtn = document.getElementById('applyDiscount');
    const discountMessage = document.getElementById('discountMessage');
    const orderSummary = document.getElementById('orderSummary');
    const orderTotal = document.getElementById('orderTotal');
    
    let currentDiscount = null;
    
    // Calculate and update order summary
    function updateOrderSummary() {
        let subtotal = 0;
        let items = [];
        
        // Calculate ticket costs
        ticketSelects.forEach(select => {
            const ticketId = select.name.match(/\[(\d+)\]/)[1];
            const quantity = parseInt(select.value);
            const ticketPrice = parseFloat(select.closest('.card').querySelector('.fw-bold').textContent.replace('$', ''));
            
            if (quantity > 0) {
                const itemTotal = quantity * ticketPrice;
                subtotal += itemTotal;
                items.push({
                    name: select.closest('.card').querySelector('h4').textContent,
                    quantity: quantity,
                    price: ticketPrice,
                    total: itemTotal
                });
            }
        });
        
        // Calculate exhibition costs
        exhibitionCheckboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const exhibitionId = checkbox.name.match(/\[(\d+)\]/)[1];
                const exhibitionCard = checkbox.closest('.card');
                let feeText = exhibitionCard.querySelector('.fw-bold').textContent;
                
                if (feeText.startsWith('+$')) {
                    const fee = parseFloat(feeText.replace('+$', ''));
                    subtotal += fee;
                    items.push({
                        name: exhibitionCard.querySelector('h4').textContent + ' (Special Exhibition)',
                        quantity: 1,
                        price: fee,
                        total: fee
                    });
                }
            }
        });
        
        // Apply discount if available
        let discountAmount = 0;
        let total = subtotal;
        
        if (currentDiscount) {
            if (currentDiscount.discount_type === 'percentage') {
                discountAmount = subtotal * (currentDiscount.discount_value / 100);
            } else {
                discountAmount = currentDiscount.discount_value;
            }
            
            total = Math.max(0, subtotal - discountAmount);
        }
        
        // Update summary display
        if (items.length === 0) {
            orderSummary.innerHTML = '<p class="text-muted small">Select tickets to see pricing</p>';
            orderTotal.textContent = '$0.00';
            return;
        }
        
        let summaryHTML = '';
        items.forEach(item => {
            summaryHTML += `
                <div class="d-flex justify-content-between mb-2">
                    <span>${item.quantity} × ${item.name}</span>
                    <span>$${item.total.toFixed(2)}</span>
                </div>
            `;
        });
        
        if (currentDiscount) {
            summaryHTML += `
                <div class="d-flex justify-content-between mb-2 border-top pt-2">
                    <span>Subtotal</span>
                    <span>$${subtotal.toFixed(2)}</span>
                </div>
                <div class="d-flex justify-content-between text-success">
                    <span>Discount (${currentDiscount.code})</span>
                    <span>-$${discountAmount.toFixed(2)}</span>
                </div>
            `;
        }
        
        orderSummary.innerHTML = summaryHTML;
        orderTotal.textContent = `$${total.toFixed(2)}`;
    }
    
    // Handle discount code application
    applyDiscountBtn.addEventListener('click', function() {
        const code = discountInput.value.trim();
        
        if (!code) {
            discountMessage.textContent = 'Please enter a discount code';
            discountMessage.className = 'small mt-2 text-danger';
            return;
        }
        
        // In a real application, this would be an AJAX call to verify the discount
        fetch('includes/check_discount.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `discount_code=${encodeURIComponent(code)}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.valid) {
                currentDiscount = data.discount;
                discountMessage.textContent = data.message;
                discountMessage.className = 'small mt-2 text-success';
                updateOrderSummary();
            } else {
                currentDiscount = null;
                discountMessage.textContent = data.message;
                discountMessage.className = 'small mt-2 text-danger';
                updateOrderSummary();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            discountMessage.textContent = 'Error applying discount. Please try again.';
            discountMessage.className = 'small mt-2 text-danger';
        });
    });
    
    // Update summary when ticket quantities change
    ticketSelects.forEach(select => {
        select.addEventListener('change', updateOrderSummary);
    });
    
    exhibitionCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateOrderSummary);
    });
    
    // Set minimum visit date to today
    const visitDateInput = document.getElementById('visitDate');
    const today = new Date().toISOString().split('T')[0];
    visitDateInput.min = today;
    
    // If coming from a calendar link with a date parameter
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('date')) {
        const dateParam = urlParams.get('date');
        if (dateParam >= today) {
            visitDateInput.value = dateParam;
        }
    }
});
</script>

<?php
require_once 'includes/footer.php';
?>