<?php
$page_title = "Exhibitions & Events - The Heritage Museum";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Page Header with Spacing -->
<section class="py-5 mt-5"> <!-- Added mt-5 for navbar spacing -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-4 fw-bold mb-4">Exhibitions & Events</h1>
                <p class="lead text-muted mb-5">Discover our current collections and upcoming programs</p>
                
                <!-- Improved Filter Controls -->
                <div class="row g-3 justify-content-center mb-5">
                    <div class="col-md-4 col-lg-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle w-100 py-3" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-calendar3 me-2"></i> When
                            </button>
                            <div class="dropdown-menu p-3 w-100">
                                <input type="date" class="form-control border-0 shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle w-100 py-3" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-people-fill me-2"></i> Audience
                            </button>
                            <ul class="dropdown-menu w-100">
                                <li><a class="dropdown-item" href="#">All Visitors</a></li>
                                <li><a class="dropdown-item" href="#">Adults</a></li>
                                <li><a class="dropdown-item" href="#">Members</a></li>
                                <li><a class="dropdown-item" href="#">Families</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle w-100 py-3" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-collection me-2"></i> Type
                            </button>
                            <ul class="dropdown-menu w-100">
                                <li><a class="dropdown-item" href="#">All Types</a></li>
                                <li><a class="dropdown-item" href="#">Exhibitions</a></li>
                                <li><a class="dropdown-item" href="#">Gallery Talks</a></li>
                                <li><a class="dropdown-item" href="#">Workshops</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Exhibitions Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="fw-bold mb-3">Current Exhibitions</h2>
                <div class="border-bottom border-2 border-primary" style="width: 80px;"></div>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Exhibition 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/img/exhibition1.jpg" class="card-img-top" alt="Ramses II Exhibition" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 m-2 rounded-pill small">Featured</span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary">Exhibition</span>
                            <small class="text-muted">Until Sep 2025</small>
                        </div>
                        <h3 class="h4 mb-3">Ramses and the Gold of the Pharaohs</h3>
                        <p class="card-text mb-4">Featuring 180+ ancient Egyptian artifacts from our special collection.</p>
                        <a href="#" class="btn btn-outline-primary stretched-link">View Details</a>
                    </div>
                </div>
            </div>
            
            <!-- Exhibition 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="assets/img/exhibition2.jpg" class="card-img-top" alt="Rosetta Stone Exhibition" style="height: 220px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary">Exhibition</span>
                            <small class="text-muted">Permanent</small>
                        </div>
                        <h3 class="h4 mb-3">Deciphering the Rosetta Stone</h3>
                        <p class="card-text mb-4">Celebrating 200 years of Egyptology with rare artifacts and manuscripts.</p>
                        <a href="#" class="btn btn-outline-primary stretched-link">View Details</a>
                    </div>
                </div>
            </div>
            
            <!-- Exhibition 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="assets/img/exhibition3.jpg" class="card-img-top" alt="Sphinx Avenue Exhibition" style="height: 220px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary">Exhibition</span>
                            <small class="text-muted">Special Display</small>
                        </div>
                        <h3 class="h4 mb-3">Avenue of Sphinxes Reopening</h3>
                        <p class="card-text mb-4">Documenting the restoration of Luxor's famous processional way.</p>
                        <a href="#" class="btn btn-outline-primary stretched-link">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary px-5 py-3">View All Exhibitions</a>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="fw-bold mb-3">Upcoming Events</h2>
                <div class="border-bottom border-2 border-primary" style="width: 80px;"></div>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Event 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="assets/img/event1.jpg" class="card-img-top" alt="Farmer Day Event" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute bottom-0 start-0 bg-dark text-white px-3 py-1 m-2 rounded small">Limited Capacity</span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="badge bg-success bg-opacity-10 text-success">Workshop</span>
                            <div class="text-end">
                                <div class="fw-bold">April 15, 2025</div>
                                <small class="text-muted">2:00 PM - 4:00 PM</small>
                            </div>
                        </div>
                        <h3 class="h4 mb-3">National Farmer Day Celebration</h3>
                        <p class="card-text mb-4">Interactive displays of ancient agricultural tools and techniques.</p>
                        <a href="#" class="btn btn-primary w-100">Reserve Spot</a>
                    </div>
                </div>
            </div>
            
            <!-- Event 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="assets/img/event2.jpg" class="card-img-top" alt="Music Day Event" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute bottom-0 start-0 bg-dark text-white px-3 py-1 m-2 rounded small">Family Friendly</span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="badge bg-info bg-opacity-10 text-info">Performance</span>
                            <div class="text-end">
                                <div class="fw-bold">June 21, 2025</div>
                                <small class="text-muted">6:00 PM - 8:00 PM</small>
                            </div>
                        </div>
                        <h3 class="h4 mb-3">World Music Day Concert</h3>
                        <p class="card-text mb-4">Ancient instruments brought to life by master musicians.</p>
                        <a href="#" class="btn btn-primary w-100">Get Tickets</a>
                    </div>
                </div>
            </div>
            
            <!-- Event 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="assets/img/tour1.jpg" class="card-img-top" alt="Guided Tour" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="badge bg-warning bg-opacity-10 text-warning">Tour</span>
                            <div class="text-end">
                                <div class="fw-bold">Every Saturday</div>
                                <small class="text-muted">11:00 AM - 12:30 PM</small>
                            </div>
                        </div>
                        <h3 class="h4 mb-3">Curator's Tour: Egyptian Collection</h3>
                        <p class="card-text mb-4">Special guided tour with our head curator through the Egyptian wing.</p>
                        <a href="#" class="btn btn-primary w-100">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="#" class="btn btn-outline-primary px-5 py-3">View All Events</a>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>