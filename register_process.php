<?php
require_once 'includes/db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = trim($_POST["full_name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($fullName) || empty($email) || empty($password)) {
        die("Please fill in all fields.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into DB
    $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullName, $email, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: login.php?registered=1");
        exit;
    } else {
        die("Error: " . $stmt->error);
    }
}
?>
