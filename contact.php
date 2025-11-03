<?php
// DATABASE CONNECTION
$servername = "localhost";
$username = "root"; // WAMP/XAMPP default
$password = ""; // default empty
$dbname = "contact_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message_sent = false;

// FORM SUBMISSION
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert into DB
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        $message_sent = true;
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Gym Gear and Accessories</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="footer.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #d9ecf9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        /* NAVBAR */
        .navbar {
            display: flex;
            align-items: center;
            background-color: #222;
            padding: 10px 20px;
            color: white;
        }
        .navbar .logo img {
            height: 50px;
        }
        .navbar .menu {
            display: flex;
            margin-left: 20px;
        }
        .navbar .menu a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
        }
        .navbar .menu a:hover {
            background-color: #555;
        }
        .dropdown {
            position: relative;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        }
        .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* CONTACT FORM */
        .container {
            background: #e3f2fd;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            flex-grow: 1;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        .success {
            background-color: #d4edda;
            padding: 10px;
            border-radius: 5px;
            color: #155724;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>


    <!-- CONTACT FORM -->
    <div class="container">
        <h2>Contact Us</h2>

        <?php if ($message_sent): ?>
            <div class="success">Message sent successfully!</div>
        <?php endif; ?>

        <form method="post" action="">
            <label>Name:</label>
            <input type="text" name="name" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Message:</label>
            <textarea name="message" rows="5" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <h3>Gym Gear and Accessories</h3>
                <p>GymFlex Gear, FitPro Accessories, Strength Essentials..</p>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="abt.html">About Us</a></li>
                    <li><a href="Homeequipment.html">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <p>Phone: (91) 8010706591</p>
                <p>Email: <a href="mailto:info@Gymgearproducts.com">info@Gymgearproducts.com</a></p>
            </div>
            <div class="social-menu">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#" class="icon facebook">Facebook</a>
                    <a href="#" class="icon instagram">Instagram</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Gym Gear and Accessories. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
