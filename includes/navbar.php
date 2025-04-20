<nav class="navbar navbar-expand-lg fixed-top bg-dark shadow-sm navbar-dark">
    <div class="container">
        <a class="navbar-brand fs-6 fw-bold" href="index.php">
            <i class="bi bi-building-columns me-2"></i>The Heritage Museum
        </a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'exhibitions.php' ? 'active' : '' ?>" href="exhibitions.php">Exhibitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'visit.php' ? 'active' : '' ?>" href="visit.php">Visit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'events.php' ? 'active' : '' ?>" href="events.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'learn.php' ? 'active' : '' ?>" href="learn.php">Learn</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'membership.php' ? 'active' : '' ?>" href="membership.php">Membership</a>
                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-outline-light" role="button" href="#">
                        <i class="bi bi-ticket-perforated"></i> Tickets
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>