<?php
include 'connect.php';
session_start();

// Check if admin is logged in, otherwise redirect to login
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Fetch all registered users from the database
$fetchUsersQuery = "SELECT firstName, lastName, email FROM users";
$result = $conn->query($fetchUsersQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Registered Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #343a40;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .main-content .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .main-content .header h2 {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .header a {
    display: inline-block; /* Make it a block element for padding */
    padding: 10px 20px; /* Add padding for a larger clickable area */
    background-color: #007bff; /* Bootstrap primary color */
    color: white; /* Text color */
    border-radius: 5px; /* Rounded corners */
    text-decoration: none; /* Remove underline */
    transition: background-color 0.3s, color 0.3s; /* Smooth transitions */
}

.header a:hover {
    background-color: #0056b3; /* Darker shade for hover effect */
    color: #e0e0e0; /* Lighter text color on hover */
}

    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="shop.html"><i class="fas fa-store"></i> Shops</a>
    
    <a href="category.html"><i class="fas fa-list"></i> Categories</a>
    <a href="customer.php"><i class="fas fa-users"></i> Customers</a>
    
    
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="header">
        <h2>Registered Users</h2>
        <a href="index.php">Go To My Website</a>
    </div>

    <!-- Display the list of registered users -->
    <table>
        <tr>
            <th>Serial No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>

        <?php
        // Initialize serial number counter
        $serialNumber = 1;

        // Loop through each user and display them in the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $serialNumber++ . "</td>"; // Increment the serial number for each user
                echo "<td>" . $row['firstName'] . "</td>";
                echo "<td>" . $row['lastName'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No users found</td></tr>";
        }
        ?>

    </table>
</div>

</body>
</html>
