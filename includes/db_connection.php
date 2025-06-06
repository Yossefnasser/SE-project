<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'museum_admin');
define('DB_PASS', 'secure_password');
define('DB_NAME', 'heritage_museum');

// Create connection
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>