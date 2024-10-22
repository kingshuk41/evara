<?php
// Include database connection
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    
    // Start session to retrieve cart data
    session_start();
    $cart = json_decode($_SESSION['cart'], true);  // Assuming the cart is saved in session as JSON

    // Insert customer and order details into the orders table
    $orderQuery = "INSERT INTO orders (customer_name, address, city, state, zip, total) 
                   VALUES ('$name', '$address', '$city', '$state', '$zip', '$total')";

    if ($conn->query($orderQuery) === TRUE) {
        // Get the inserted order ID
        $orderID = $conn->insert_id;

        // Insert each product into order_items table
        foreach ($cart as $item) {
            $productName = mysqli_real_escape_string($conn, $item['name']);
            $productPrice = mysqli_real_escape_string($conn, str_replace('$', '', $item['price']));
            $productQuantity = mysqli_real_escape_string($conn, $item['quantity']);

            $itemQuery = "INSERT INTO order_items (order_id, product_name, price, quantity) 
                          VALUES ('$orderID', '$productName', '$productPrice', '$productQuantity')";

            if (!$conn->query($itemQuery)) {
                echo "Error inserting order item: " . $conn->error;
                exit;
            }
        }

        // Clear the cart after order is placed
        unset($_SESSION['cart']);
        
        // Redirect to thank you page
        header("Location: thankyou.html");
        exit();

    } else {
        echo "Error: " . $conn->error;
    }
}
?>
