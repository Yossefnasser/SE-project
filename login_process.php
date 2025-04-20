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
    $stmt = $conn->prepare("SELECT id, full_name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $fullName, $hashedPassword);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            //  STEP 3: Set session variables
            $_SESSION["user_id"] = $id;
            $_SESSION["user_name"] = $fullName;

            // Optional: Set login timestamp or other info
            $_SESSION["login_time"] = time();

            //  Redirect to homepage or dashboard
            header("Location: index.php");
            exit;
        } else {
            die("Invalid credentials.");
        }
    } else {
        die("User not found.");
    }
}
?>
