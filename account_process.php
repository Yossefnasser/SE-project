<?php
// Expecting session already started and $conn available
$user_id = $_SESSION['user_id'];

// Fetch user info
$stmt = $conn->prepare("SELECT username, email FROM users WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username, $email);
$stmt->fetch();
$stmt->close();

// Fetch membership info
$membership = null;
$mstmt = $conn->prepare("SELECT level, status, expires_at FROM memberships WHERE user_id = ?");
$mstmt->bind_param("i", $user_id);
$mstmt->execute();
$mstmt->bind_result($level, $status, $expires_at);
if ($mstmt->fetch()) {
    $membership = [
        "level" => $level,
        "status" => $status,
        "expires_at" => $expires_at
    ];
}
$mstmt->close();
