<?php
$host = "localhost";
$username = "root"; // or your DB username
$password = "";     // or your DB password
$database = "MuseumApp"; // replace with your DB name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
