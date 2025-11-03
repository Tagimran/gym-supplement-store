
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
                    <a href="#">Weight Plates</a>
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
  <h1>Registeration</h1>
  Name:<input type="text" name="t1" ><br>
  pno:<input type="text" name="t2"><br>
  username:<input type="text" name="t3" ><br>
  password:<input type="password" name="t4" ><br>
  <input type="submit">
  <p align="center">Allready Registered? <a href="login.php">login here</a></p>
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
                <li><a href="#">About Us</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
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
                <a href="#" class="icon pinterest">Pinterest</a>
                <a href="#" class="icon twitter">Twitter</a>
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
  die("Error in database connection...");
 }
 $n=$_POST["t1"];
 $pno=$_POST["t2"];
 $un=$_POST["t3"];
 $p=$_POST["t4"];
 mysql_select_db("furniture");
 $k=mysql_query("insert into login values('$n',$pno,'$un','$p')");
 if($k==true)
 {
    header("location:login.php");
 } 

 mysql_close($con);
 ?>