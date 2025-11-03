<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Gear And Accessories</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: relative;
        }

        .logo h1 {
            margin: 0;
            font-size: 24px;
        }

        .logo h3 {
            margin: 0;
            font-size: 16px;
            color: grey;
        }

        .additional-buttons a button {
            background-color: #444;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #777;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        /* Approve button styling (Green) */
        .approve-btn {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Reject button styling (Red) */
        .reject-btn {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Hover effects for both buttons */
        .approve-btn:hover {
            background-color: darkgreen;
        }

        .reject-btn:hover {
            background-color: darkred;
        }
    </style>
    <script>
        function confirmAction(form) {
            var action = form.action.value; // Get the action (approve/reject)

            if (action === "approve") {
                alert("Order has been approved!");
                return false; // Prevent form submission for "Approve" action
            } else if (action === "reject") {
                return confirm("Are you sure you want to reject and delete this order?");
            }
        }
    </script>
</head>
<body>



<h2 align="center">Order Info</h2>
<table width="90%">

             <tr>
              <th> <a href="orderinfo.php"> <font color="white"> <h4> ORDER INFO </h4></font> </a></th></th>
              <th> <a href="logininfo.php"> <font color="white"><h4> LOGIN INFO </h4> </font></a></th>
              <th> <a href=""> <font color="white"><h4> </h4> </font></a></th>
              <th> <a href="index.html"> <font color="white"> <h4>&nbsp&nbsp LOGOUT &nbsp&nbsp</h4> </a> </font></th>

             </tr>
            </table>
<?php

$con = new mysqli("localhost", "root", "", "furniture");


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


if (isset($_POST['action']) && $_POST['action'] == 'reject') {
    $orderId = $_POST['order_id']; 

    $deleteQuery = "DELETE FROM order01 WHERE id = ?";
    $stmt = $con->prepare($deleteQuery);

  
    if ($stmt === false) {
        die("Error preparing statement: " . $con->error);
    }

    $stmt->bind_param("i", $orderId); 

    if ($stmt->execute()) {
        echo "<script>alert('Order has been rejected and deleted.');</script>";
    } else {
        echo "<script>alert('Error: Could not delete order.');</script>";
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}


$result = $con->query("SELECT * FROM order01");

if ($result->num_rows > 0) {
    echo("<table border=1>");
    echo("<tr> <th>ID</th> <th>Name</th> <th>Phone NO</th> <th>Pin</th> <th>Address</th> <th>Product</th> <th>Price</th> <th>Action</th> </tr>");

    while ($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>{$row['id']}</td>");
        echo("<td>{$row['name']}</td>");
        echo("<td>{$row['phone']}</td>");
        echo("<td>{$row['pin']}</td>");
        echo("<td>{$row['address']}</td>");
        echo("<td>{$row['product']}</td>");
        echo("<td>{$row['price']}</td>");
        echo("<td>");
        echo('<form action="" method="post" onsubmit="return confirmAction(this);">');
        echo('<input type="hidden" name="order_id" value="'.$row['id'].'">'); // Now using 'id' instead of 'name'
        echo('<button type="submit" name="action" value="reject" class="reject-btn">Reject</button>');
        echo('</form>');
        echo("</td>");
        echo("</tr>");
    }
    echo("</table>");
} else {
    echo "<p>No orders found.</p>";
}


$con->close();
?>

<link rel="stylesheet" href="footer.css">
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <h3>Gym Suppliment store</h3>
            <p>Gym Suppliments,
                 Home Accessories,
                 Strength Essentials..</p>
        </div>
        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="abt.html">About Us</a></li>
                <li><a href="Homeequipment.html">Products</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
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
        <p>© 2025 Gym Suppliment Store. All rights reserved.</p>
    </div>
</footer>


</body>
</html>