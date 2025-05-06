<?php
session_start();
require_once 'includes/db.php'; // uses $conn = new mysqli(...)

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once 'account_process.php'; // handles data fetching

$page_title = "Manage My Account";
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="mb-4">Welcome, <?= htmlspecialchars($username) ?>!</h3>

                    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>

                    <?php if ($membership): ?>
                        <div class="alert alert-info">
                            <h5 class="mb-1">Membership Details</h5>
                            <p class="mb-1"><strong>Level:</strong> <?= htmlspecialchars($membership['level']) ?></p>
                            <p class="mb-1"><strong>Status:</strong> <?= htmlspecialchars($membership['status']) ?></p>
                            <p class="mb-0"><strong>Expires:</strong> <?= htmlspecialchars($membership['expires_at']) ?></p>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-warning">
                            You do not have an active membership. <a href="memberships.php" class="alert-link">View membership options</a>.
                        </div>
                    <?php endif; ?>

                    <div class="mt-4">
                        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
