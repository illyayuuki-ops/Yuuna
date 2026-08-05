<?php
// Copy this file to db.php and fill in YOUR local credentials
$host = "localhost";
$port = "3306"; // or 3307, depending on your machine
$user = "yuuna";
$password = "your_password_here";
$dbname = "yuuna_portfolio";

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>