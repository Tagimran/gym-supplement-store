<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Gear and Accessories</title>
</head>
<link rel="stylesheet" href="styles.css">
<table>
    <tr>


<body>
    <nav class="navbar">
        <div class="logo">
            <img src="logo.jpg.png" alt="Health Tech Logo">
        </div>
        <div class="menu">
            <a href="index.html" class="sale">Home</a>
            <div class="dropdown">
                <a href="#">HOME GYM</a>
                <div class="dropdown-content">
                    <a href="Benches.html">Benches</a> 
                    <a href="Dumbbel.html">Dumbbells</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#">FREE WEIGHTS</a>
                <div class="dropdown-content">
                    <a href="Kettlebells.html">Kettlebells</a>
                    <a href="Barbells.html">Barbells</a>
                    <a href="Weightplates.html">Weight Plates</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="Homeequipment.html">HOME EQUIPMENT</a>
            </div>
            <a href="Machinerack.html">MACHINES & RACKS</a>
        </div>
        <div class="icons">
            <i class="profile-icon"></i>
            <i class="cart-icon"></i>
        </div>
        </tr>
        </table>




</body>

  <head>
  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:lavender;
        }
        form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"],
        input[type="Return Home"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="Return Home"] {
            background-color:green;
            color: #fff;
            cursor: pointer;
        }
        img.avatar{
         width:40%;
         border-radius:50%;
        }
        }
    </style>
</head>
    <body>
        <form method="POST" action="#">
        <center>
  
      </center>
         <h2 align="center">Login</h2>
         Username:
         <input type="text" placeholder="Enter Username" name="u" required><br>
         Password:
         <input type="password" placeholder="Enter Password" name="pa" required><br>
         <input type="submit" value="Login" name="t1"><br>
         <p align="center"> <a href="register.php">Register here</a></p>

        </form>
    </body>
</html>
<center>
<html>
  <body>
<table>
</table>
<link rel="stylesheet" href="footer.css">
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <h3>Gym Gear and Accessories</h3>
            <p>GymFlex Gear,
                 FitPro Accessories,
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
                <li><a href="contact.html">Contact</a></li>
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


<?php

error_reporting(0);
 $con=mysql_connect("localhost","root","");
   if($con==false)
   {
     die("connection failed");
   }
   $us=$_POST["u"];
   $pss=$_POST["pa"];
   mysql_select_db("furniture");
   if(isset($_POST['t1']))
   {
   $res=mysql_query("select * from login where username='$us' and password='$pss'");
   var_dump($res);
   if($row=mysql_fetch_array($res)) 
   {
       header("location: index.html");
   } 
   else
   {
    echo "<script>alert('Incorrect Username or Password')</script>";
   }
}

mysql_close($con);
   
 ?>