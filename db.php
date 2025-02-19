<?php
$servername = "localhost";
$username = "root";  // Default MySQL user
$password = "";  // Leave empty if there's no password, or set it if required
$dbname = "hrm_db";
// $port = 3307;  // Use the correct MySQL port (3306 or 3307)

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
