<?php
session_start();
include("connect.php");

// Check if user is logged in
if (isset($_SESSION['email'])) {
    // Redirect directly to index.php (your main website)
    header("Location: index.php");
    exit();
} else {
    // If user is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
?>
