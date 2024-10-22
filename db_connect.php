<?php
$servername = "localhost";  // Change to your DB server
$username = "root";         // Change to your DB username
$password = "";             // Change to your DB password
$dbname = "orders";  // Change to your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
