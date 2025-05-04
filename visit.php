<?php
$page_title = "Plan Your Visit - The Heritage Museum";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section - Visit Focused -->
<section class="hero-section position-relative" style="height: 60vh; min-height: 500px;">
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <img class="object-fit-cover w-100 h-100" src="assets/img/museum-entrance.jpg" alt="Museum Entrance">
    </div>
    <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
    <div class="container position-relative h-100 d-flex align-items-center">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bold mb-3">Plan Your Visit</h1>
            <p class="lead mb-4">Everything you need to know before your museum experience</p>
            <div class="d-flex justify-content-center gap-3">
                <a class="btn btn-primary px-4 py-2" href="#hours">
                    <i class="bi bi-clock me-2"></i>Hours & Admission
                </a>
                <a class="btn btn-outline-light px-4 py-2" href="#directions">
                    <i class="bi bi-geo-alt me-2"></i>Directions
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Visit Information -->
<section class="py-5 bg-white" id="hours">
    <div class="container">
        <div class="row g-4">
            <!-- Hours Column -->
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-clock-fill text-primary fs-3 me-3"></i>
                            <h2 class="h4 mb-0">Hours</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Monday</span>
                                <span class="text-muted">Closed</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Tuesday - Thursday</span>
                                <span class="text-muted">10:00 AM - 5:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Friday</span>
                                <span class="text-muted">10:00 AM - 8:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Saturday</span>
                                <span class="text-muted">9:00 AM - 9:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>Sunday</span>
                                <span class="text-muted">9:00 AM - 7:00 PM</span>
                            </li>
                        </ul>
                        <div class="alert alert-info mt-4 small">
                            <i class="bi bi-info-circle me-2"></i> Last admission is 30 minutes before closing.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Admission Column -->
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-ticket-perforated text-primary fs-3 me-3"></i>
                            <h2 class="h4 mb-0">Admission</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Adults</span>
                                <span class="text-muted">$18.00</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Seniors (65+)</span>
                                <span class="text-muted">$15.00</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Students (with ID)</span>
                                <span class="text-muted">$12.00</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>Children (under 12)</span>
                                <span class="text-muted">Free</span>
                            </li>
                        </ul>
                        <div class="mt-4">
                            <a href="#" class="btn btn-primary w-100">
                                <i class="bi bi-calendar-check me-2"></i>Buy Tickets
                            </a>
                        </div>
                        <div class="alert alert-success mt-4 small">
                            <i class="bi bi-arrow-repeat me-2"></i> Free admission every first Friday of the month.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Amenities Column -->
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-heart-fill text-primary fs-3 me-3"></i>
                            <h2 class="h4 mb-0">Amenities</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start py-2 border-bottom">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Wheelchair accessible</span>
                            </li>
                            <li class="d-flex align-items-start py-2 border-bottom">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Free Wi-Fi throughout</span>
                            </li>
                            <li class="d-flex align-items-start py-2 border-bottom">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Coat check available</span>
                            </li>
                            <li class="d-flex align-items-start py-2 border-bottom">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Museum café</span>
                            </li>
                            <li class="d-flex align-items-start py-2">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Gift shop</span>
                            </li>
                        </ul>
                        <div class="alert alert-warning mt-4 small">
                            <i class="bi bi-camera me-2"></i> Non-flash photography permitted in most galleries.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Getting Here Section -->
<section class="py-5 bg-light" id="directions">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Getting Here</h2>
                
                <div class="mb-4">
                    <h3 class="h5 mb-3 d-flex align-items-center">
                        <i class="bi bi-geo-alt-fill text-primary me-2"></i> Address
                    </h3>
                    <p class="mb-3">123 Museum Avenue<br>Cultural District, Citytown, ST 10001</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-map me-1"></i> Open in Maps
                    </a>
                </div>
                
                <div class="mb-4">
                    <h3 class="h5 mb-3 d-flex align-items-center">
                        <i class="bi bi-subway text-primary me-2"></i> Public Transportation
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Subway:</strong> Take Line 1, 2, or 3 to Museum Station</li>
                        <li class="mb-2"><strong>Bus:</strong> Routes 5, 19, and 42 stop nearby</li>
                        <li><strong>Train:</strong> Regional Rail to Citytown Station (10 min walk)</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="h5 mb-3 d-flex align-items-center">
                        <i class="bi bi-car-front-fill text-primary me-2"></i> Parking
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Museum Garage:</strong> $15 for up to 4 hours (enter on 5th Ave)</li>
                        <li><strong>Street Parking:</strong> Limited metered spots available</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.21520999933!2d-73.9882544!3d40.7484405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ0JzU0LjQiTiA3M8KwNTknMTcuNyJX!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" allowfullscreen></iframe>
                </div>
                
                <div class="mt-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-info-circle-fill text-primary fs-4 me-3"></i>
                                <div>
                                    <h3 class="h6 mb-1">Accessibility</h3>
                                    <p class="small mb-0">Our museum is fully wheelchair accessible with elevators to all floors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visitor Guidelines -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Visitor Guidelines</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">To ensure a safe and enjoyable experience for