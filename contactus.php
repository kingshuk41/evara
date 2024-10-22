<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .contact-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 40px;
        }
        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
            display: block;
        }
        input, textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        textarea {
            height: 150px;
        }
        .half-width {
            width: 48%;
        }
        .full-width {
            width: 100%;
        }
        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #38a169;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #2f855a;
        }
        .contact-details {
            margin-top: 50px;
            text-align: center;
        }
        .contact-details p {
            margin: 5px 0;
            font-size: 16px;
            color: #555;
        }
        .contact-details a {
            color: #38a169;
            text-decoration: none;
        }
       
        /* Responsive */
        @media only screen and (max-width: 768px) {
            .half-width {
                width: 100%;
            }
            .contact-container {
                padding: 15px;
            }
            .submit-btn {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
<div>
        <header>
            <div>
          <div class="top-bar">
              <span>(+880) 1764163504</span>
              
              <a href="#" class="coupon-link">Style Delivered, Happiness Guaranteed!</a>
              
          </div>
    
          <nav class="main-navbar">
              <div class="logo">
                  <a href="./index.php"><img src="./img/logo.svg" alt="Evara Logo" /></a>
              </div>
              
             
              
              
        
            
            <div>
            <a href="./login.php" class="login-icon"><i class="fa fa-user"></i></a>
            </div>
    
            <div>
            <a href="logout.php">
            <i class="fa-solid fa-right-from-bracket"></i>
      
            </a>
            </div>
            </div>
        </nav>
</div>
    <div class="contact-container">
        <h1>Contact Us</h1>

        <?php
        // Database connection settings
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contact_form_db";  // Your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // If form is submitted, handle the data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $first_name = $conn->real_escape_string($_POST['first-name']);
            $last_name = $conn->real_escape_string($_POST['last-name']);
            $email = $conn->real_escape_string($_POST['email']);
            $phone = $conn->real_escape_string($_POST['phone']);
            $message = $conn->real_escape_string($_POST['message']);

            // Insert data into the database
            $sql = "INSERT INTO contacts (first_name, last_name, email, phone, message)
                    VALUES ('$first_name', '$last_name', '$email', '$phone', '$message')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Thank you! Your message has been received.</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Close the connection
        $conn->close();
        ?>

        <form id="contact-form" action="" method="POST">
            <div class="half-width">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="Your first name" required>
            </div>

            <div class="half-width">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Your last name" required>
            </div>

            <div class="half-width">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email address" required>
            </div>

            <div class="half-width">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Your phone number">
            </div>

            <div class="full-width">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your message or inquiry" required></textarea>
            </div>

            <div class="full-width">
                <button type="submit" class="submit-btn">Send Message</button>
            </div>
        </form>

        <div class="contact-details">
            <p>Email: <a href="mailto:support@yourwebsite.com">evara@info.com</a></p>
            <p>Phone: <a href="tel:+123456789">+880 1764163504</a></p>
            <p>Address: Bridge Mour, Mymensingh, Bangladesh</p>
        </div>
    </div>
</body>
</html>
