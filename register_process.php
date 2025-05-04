<?php
require_once 'includes/db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = trim($_POST["full_name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($fullName) || empty($email) || empty($password)) {
        die("Please fill in all fields.");
    }

    // Check if user already exists
    $checkStmt = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        die("A user with this email already exists.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullName, $email, $hashedPassword);

    if ($stmt->execute()) {
        $userId = $stmt->insert_id;

        // Log registration
        $action = "Registration";
        $description = "User $fullName registered.";
        $log_stmt = $conn->prepare("INSERT INTO logs (user_id, action_type, action_description) VALUES (?, ?, ?)");
        $log_stmt->bind_param("iss", $userId, $action, $description);
        $log_stmt->execute();

        header("Location: login.php?registered=1");
        exit;
    } else {
        die("Error: " . $stmt->error);
    }
}
?>
