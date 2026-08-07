<?php
// Production database credentials (InfinityFree)
$host = "sql112.infinityfree.com";
$user = "if0_42597870";
$password = "Illyasviel27";
$dbname = "if0_42597870_yuuna";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>