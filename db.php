<?php
$host = 'localhost';
$user = 'username';
$pass = 'password';
$db = 'db_name';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
