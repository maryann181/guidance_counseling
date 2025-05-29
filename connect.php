<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login2";
$port = 3307; // Specify the new port

$conn = new mysqli($host, $user, $pass, $db, $port); // Add the port parameter

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>