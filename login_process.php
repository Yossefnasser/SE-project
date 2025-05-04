<?php
session_start();
require_once 'includes/db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        die("Please enter both email and password.");
    }

    // Check if user exists
    $stmt = $conn->prepare("SELECT user_id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $fullName, $hashedPassword);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            // Set session
            $_SESSION["user_id"] = $id;
            $_SESSION["user_name"] = $fullName;
            $_SESSION["login_time"] = time();

            // Log login
            $action = "Login";
            $description = "User $fullName logged in.";
            $log_stmt = $conn->prepare("INSERT INTO logs (user_id, action_type, action_description) VALUES (?, ?, ?)");
            $log_stmt->bind_param("iss", $id, $action, $description);
            $log_stmt->execute();

            header("Location: index.php");
            exit;
        } else {
            die("Invalid password.");
        }
    } else {
        die("User not found.");
    }
}
?>
