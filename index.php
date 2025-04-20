<?php
$page_title = "The Heritage Museum";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section - Refined -->
<section class="hero-section position-relative" style="height: 85vh; min-height: 610px;">
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <img class="object-fit-cover w-100 h-100" src="assets/img/museum.jpg" alt="Museum Exhibit">
    </div>
    <div class="bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
    <div class="container position-relative h-100 d-flex align-items-center">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bold mb-3">Welcome to The Heritage</h1>
            <p class="mb-4">Discover centuries of art and history</p>
            <div class="d-flex justify-content-center gap-3">
    <a class="btn btn-primary px-4 py-2" href="#exhibitions">
        <i class="bi bi-collection me-2"></i>View Exhibitions
    </a>
    <a class="btn btn-outline-light px-4 py-2" href="#visit">
        <i class="bi bi-calendar3 me-2"></i>Plan Your Visit
    </a>
    <a class="btn btn-warning px-4 py-2" href="memberships.php">
        <i class="bi bi-person-vip me-2"></i>Memberships
    </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Exhibition - Compact -->
<section class="py-5 bg-white" id="exhibitions">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow" src="assets/img/exhibition.jpg" alt="Featured Exhibition">
            </div>
            <div class="col-lg-6 border-start border-4 border-primary ps-4">
                <span class="text-uppercase text-muted fw-bold small">FEATURED EXHIBITION</span>
                <h2 class="display-5 fw-bold mt-2 mb-3">Echoes of the Past</h2>
                <p class="mb-3">Explore artifacts from ancient civilizations through modern interpretations.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-primary px-3" href="#">
                        Explore <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a class="btn btn-outline-dark px-3" href="#">
                        <i class="bi bi-clock-history me-1"></i>Timed Entry
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events - Better Card Proportions -->
<section class="py-5 bg-light" id="events">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-2">Upcoming Events</h2>
            <p class="text-muted">Discover unique experiences at our museum</p>
            <div class="mx-auto bg-primary" style="height:2px; width:80px;"></div>
        </div>
        <div class="row g-3">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="assets/img/event1.jpg" class="card-img-top" alt="Night at the Museum">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-1 small">Limited Seats</span>
                    </div>
                    <div class="card-body p-3 d-flex flex-column">
                        <div class="d-flex justify-content-between small mb-2">
                            <span class="text-primary fw-bold">April 20, 2025</span>
                            <span class="text-muted">7:00 PM</span>
                        </div>
                        <h3 class="h5 mb-2">Night at the Museum</h3>
                        <p class="card-text small mb-3">Explore the museum after dark with special performances.</p>
                        <a class="btn btn-sm btn-primary mt-auto" href="#">Get Tickets</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="assets/img/event2.jpg" class="card-img-top" alt="Ancient Sculpting">
                        <span class="badge bg-success position-absolute top-0 end-0 m-1 small">Family Friendly</span>
                    </div>
                    <div class="card-body p-3 d-flex flex-column">
                        <div class="d-flex justify-content-between small mb-2">
                            <span class="text-primary fw-bold">May 5, 2025</span>
                            <span class="text-muted">2:00 PM</span>
                        </div>
                        <h3 class="h5 mb-2">Ancient Sculpting Workshop</h3>
                        <p class="card-text small mb-3">Learn ancient sculpture techniques from master artisans.</p>
                        <a class="btn btn-sm btn-primary mt-auto" href="#">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="assets/img/event3.jpg" class="card-img-top" alt="Art Lecture">
                    <div class="card-body p-3 d-flex flex-column">
                        <div class="d-flex justify-content-between small mb-2">
                            <span class="text-primary fw-bold">May 12, 2025</span>
                            <span class="text-muted">5:00 PM</span>
                        </div>
                        <h3 class="h5 mb-2">Art Through the Ages</h3>
                        <p class="card-text small mb-3">Lecture on the evolution of visual art.</p>
                        <a class="btn btn-sm btn-primary mt-auto" href="#">Join Lecture</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a class="btn btn-outline-primary px-4" href="#">
                View All Events <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</section>

<!-- Learning Section - Fixed Three Cards -->
<section class="py-5 bg-white" id="learn">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-2">Learning Programs</h2>
            <p class="text-muted">Education for all ages and interests</p>
            <div class="mx-auto bg-primary" style="height:2px; width:80px;"></div>
        </div>
        <div class="row g-3">
            <!-- School Programs Card -->
            <div class="col-md-4">
                <div class="card h-100 border-start border-4 border-primary shadow-sm">
                    <div class="card-body p-3 text-center">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <i class="text-primary bi bi-mortarboard fs-3"></i>
                        </div>
                        <h3 class="h5 mb-2">For Schools</h3>
                        <p class="small mb-3">Curriculum-aligned tours and workshops for students K-12.</p>
                        <ul class="list-unstyled small text-start mb-3">
                            <li class="mb-1"><i class="text-primary bi bi-check-circle me-1"></i>Guided exhibitions</li>
                            <li class="mb-1"><i class="text-primary bi bi-check-circle me-1"></i>Hands-on activities</li>
                            <li><i class="text-primary bi bi-check-circle me-1"></i>Teacher resources</li>
                        </ul>
                        <a class="btn btn-sm btn-outline-primary" href="#">Explore Programs</a>
                    </div>
                </div>
            </div>

            <!-- Family Activities Card -->
            <div class="col-md-4">
                <div class="card h-100 border-start border-4 border-success shadow-sm">
                    <div class="card-body p-3 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <i class="text-success bi bi-people-fill fs-3"></i>
                        </div>
                        <h3 class="h5 mb-2">For Families</h3>
                        <p class="small mb-3">Weekend workshops and interactive gallery experiences.</p>
                        <ul class="list-unstyled small text-start mb-3">
                            <li class="mb-1"><i class="text-success bi bi-check-circle me-1"></i>Storytime tours</li>
                            <li class="mb-1"><i class="text-success bi bi-check-circle me-1"></i>Craft stations</li>
                            <li><i class="text-success bi bi-check-circle me-1"></i>Scavenger hunts</li>
                        </ul>
                        <a class="btn btn-sm btn-outline-success" href="#">View Activities</a>
                    </div>
                </div>
            </div>

            <!-- Digital Resources Card -->
            <div class="col-md-4">
                <div class="card h-100 border-start border-4 border-info shadow-sm">
                    <div class="card-body p-3 text-center">
                        <div class="bg-info bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block">
                            <i class="text-info bi bi-laptop fs-3"></i>
                        </div>
                        <h3 class="h5 mb-2">Digital Resources</h3>
                        <p class="small mb-3">Virtual tours and online learning materials.</p>
                        <ul class="list-unstyled small text-start mb-3">
                            <li class="mb-1"><i class="text-info bi bi-check-circle me-1"></i>3D artifact viewer</li>
                            <li class="mb-1"><i class="text-info bi bi-check-circle me-1"></i>Lesson plans</li>
                            <li><i class="text-info bi bi-check-circle me-1"></i>Video lectures</li>
                        </ul>
                        <a class="btn btn-sm btn-outline-info" href="#">Access Online</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Supplemental Boxes -->
        <div class="row mt-4 g-3">
            <div class="col-lg-6">
                <div class="bg-light p-4 rounded-3 h-100">
                    <div class="d-flex align-items-start">
                        <i class="text-primary bi bi-book fs-3 me-3"></i>
                        <div>
                            <h3 class="h5 mb-3">Educator Resources</h3>
                            <p class="small mb-3">Download free lesson plans aligned with school curricula.</p>
                            <a class="btn btn-sm btn-outline-primary" href="#">
                                <i class="bi bi-download me-1"></i>Download Materials
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary text-white p-4 rounded-3 h-100">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-calendar-check fs-3 me-3"></i>
                        <div>
                            <h3 class="h5 mb-3">Group Visits</h3>
                            <p class="small mb-3">Special rates for school groups and organizations.</p>
                            <a class="btn btn-sm btn-light" href="#">
                                <i class="bi bi-envelope me-1"></i>Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visit Section - Clean Layout -->
<section class="py-5 bg-light" id="visit">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <h2 class="fw-bold mb-3">Plan Your Visit</h2>
                <div class="mb-3">
                    <h3 class="h6 mb-2"><i class="text-primary bi bi-clock-history me-1"></i>Hours</h3>
                    <ul class="list-unstyled small">
                        <li class="mb-1"><strong>Monday-Friday:</strong> 10AM - 5PM</li>
                        <li><strong>Weekends:</strong> 9AM - 7PM</li>
                    </ul>
                </div>
                <div class="mb-3">
                    <h3 class="h6 mb-2"><i class="text-primary bi bi-geo-alt me-1"></i>Location</h3>
                    <p class="small">123 Museum Avenue<br>Cultural District, Citytown</p>
                    <a class="btn btn-sm btn-outline-primary" href="#">
                        <i class="bi bi-map me-1"></i>Get Directions
                    </a>
                </div>
                <div>
                    <h3 class="h6 mb-2"><i class="text-primary bi bi-ticket-perforated me-1"></i>Tickets</h3>
                    <a class="btn btn-sm btn-primary" href="#">
                        <i class="bi bi-calendar-check me-1"></i>Book Tickets
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="shadow ratio ratio-16x9 rounded">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.21520999933!2d-73.9882544!3d40.7484405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ0JzU0LjQiTiA3M8KwNTknMTcuNyJX!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter - Streamlined -->
<section class="text-white bg-primary py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="h4 mb-3">Stay Connected</h2>
                <p class="mb-4">Subscribe for exhibition previews and event updates.</p>
                <form class="row g-2 justify-content-center">
                    <div class="col-md-8">
                        <div class="input-group">
                            <input class="form-control" type="email" placeholder="Your email">
                            <button class="btn btn-dark" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>