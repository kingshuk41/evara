<?php
// Database connection (update credentials as per your XAMPP setup)
$servername = "localhost";
$username = "root";  // Replace with your XAMPP username
$password = "";  // Replace with your XAMPP password
$dbname = "evara_eccommerce";  // Updated database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the AJAX request to insert data into the database when "Accept" is clicked
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productName'])) {
    $productName = $_POST['productName'];
    $status = "Accepted";  // Set the status to "Accepted"

    // Insert query (without price and quantity)
    $sql = "INSERT INTO orders_item (product_name, status) VALUES ('$productName', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Product accepted and inserted into the database!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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

        /* Product Information Table */
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

        .table-action-buttons {
            display: flex;
            justify-content: space-evenly;
        }

        .table-action-buttons button {
            padding: 10px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }

        .accept {
            background-color: #17a2b8;
        }

        .delivered {
            background-color: #28a745;
        }

        .decline {
            background-color: #dc3545;
        }

        .delete {
            background-color: #ff0000;
        }

        .status {
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <a href="./admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="./shop.html"><i class="fas fa-store"></i> Shops</a>
    
    <a href="./category.html"><i class="fas fa-list"></i> Categories</a>
    
    <a href="customer.php"><i class="fas fa-users"></i> Customers</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <div class="header">
        <h2>Admin Dashboard</h2>
        <a href="index.php">Go To My Website</a>
    </div>

    <!-- Dynamic Product Purchase Information -->
    <h3>Purchased Products</h3>
    <table id="purchased-products-table">
        <tr>
            <th>Product Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <!-- The product rows will be added here dynamically -->
    </table>
</div>

<script>
    // Function to fetch purchased products from localStorage
    function loadPurchasedProducts() {
        const purchasedProducts = JSON.parse(localStorage.getItem('cart')) || [];
        const table = document.getElementById('purchased-products-table');

        if (purchasedProducts.length === 0) {
            // Show no products message if no products are in the cart
            const noProductRow = `
                <tr>
                    <td colspan="3" style="text-align:center;">No purchased products available.</td>
                </tr>
            `;
            table.innerHTML += noProductRow;
        } else {
            // Dynamically generate rows for each product
            purchasedProducts.forEach((product, index) => {
                const productRow = `
                    <tr id="product-${index}">
                        <td>${product.name}</td>
                        <td class="status">Pending</td>
                        <td class="table-action-buttons">
                            <button class="accept" onclick="acceptProduct(${index})">Accept</button>
                            <button class="delivered" onclick="updateStatus('product-${index}', 'Delivered')">Delivered</button>
                            <button class="decline" onclick="updateStatus('product-${index}', 'Declined')">Decline</button>
                            <button class="delete" onclick="deleteProduct('product-${index}', ${index})">Delete</button>
                        </td>
                    </tr>
                `;
                table.innerHTML += productRow;
            });
        }
    }

    // Function to accept the product and send the data to PHP
    function acceptProduct(index) {
        const productRow = document.getElementById(`product-${index}`);
        const productName = productRow.children[0].textContent;

        // Send data to PHP via AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'admin.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                alert(xhr.responseText);
                updateStatus(`product-${index}`, 'Accepted');
            }
        };
        xhr.send(`productName=${encodeURIComponent(productName)}`);
    }

    // Function to update the product status dynamically
    function updateStatus(productId, newStatus) {
        const productRow = document.getElementById(productId);
        const statusCell = productRow.querySelector('.status');
        statusCell.textContent = newStatus;

        if (newStatus === 'Accepted') {
            statusCell.style.color = 'blue';
        } else if (newStatus === 'Delivered') {
            statusCell.style.color = 'green';
        } else if (newStatus === 'Declined') {
            statusCell.style.color = 'red';
        }
    }

    // Function to delete the product from the table and localStorage
    function deleteProduct(productId, productIndex) {
        const productRow = document.getElementById(productId);
        productRow.remove(); // Removes the product row from the table

        // Remove product from localStorage
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.splice(productIndex, 1);  // Remove the product from the array
        localStorage.setItem('cart', JSON.stringify(cart));

        alert(`Product with ID: ${productId} has been deleted.`);
    }

    // Load purchased products when the page is loaded
    document.addEventListener('DOMContentLoaded', loadPurchasedProducts);
</script>

</body>
</html>
