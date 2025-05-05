<?php
session_start();
require_once 'includes/db.php'; // This should include the MySQLi connection ($conn)

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);
    $userId = $_SESSION["user_id"] ?? null;

    if (empty($subject) || empty($message)) {
        die("Please fill in all fields.");
    }

    // Insert into feedback table
    $stmt = $conn->prepare("INSERT INTO feedback (user_id, subject, message, submitted_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("iss", $userId, $subject, $message);

    if ($stmt->execute()) {
        // Optional: log the feedback action
        if ($userId) {
            $action = "Feedback Submitted";
            $desc = "User submitted feedback: $subject";
            $log_stmt = $conn->prepare("INSERT INTO logs (user_id, action_type, action_description) VALUES (?, ?, ?)");
            $log_stmt->bind_param("iss", $userId, $action, $desc);
            $log_stmt->execute();
        }

        header("Location: feedback_thankyou.php");
        exit;
    } else {
        die("Error submitting feedback: " . $stmt->error);
    }
}
?>
