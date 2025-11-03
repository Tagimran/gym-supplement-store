<html>
    <head>
    <style>
 body {
            font-family: Arial, sans-serif;
            background-color: lightsteelblue;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        }

        form {
            width: 100%;
            max-width: 600px; 
            padding: 20px;
            border-radius: 5px;
            background-color: lavender; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: calc(100% - 20px); 
            padding: 8px; 
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: green;
            color: #fff;
            cursor: pointer;
        }

        
        input[type="text"],
        input[type="password"] {
            margin-bottom: 10px; 
        }



    </style>
    </head>
    <body>
    <form method="POST">
            &nbsp <font face="roboto"><h3><b>&nbsp CONTACT DETAILS</b></h3></font>
        <input type="text" name="t1" placeholder="Name" requierd><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp<br>
  <input type="text" name="t2" placeholder="Moblie No*" requierd><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp<br>
  <h3><font face="roboto"><b>&nbsp ADDRESS</b></h3></font>
  <input type="text" name="t3" placeholder="Pin Code*" requierd><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp<br>
  <input type="text" name="t4" placeholder="Address*" requierd><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp<br>
  
  <font face="arial">&nbsp <b>Product</b></font><br>
  <hr size="1%" width="60%" color="silver" align="left">
  <font> &nbsp Weighted Vest<br></font>
  <hr size="1%" width="60%" color="silver" align="left"><br>
 &nbsp <b>price summary</b><br>
  <hr size="1%" width="60%" color="silver" align="left">
 <font> &nbsp Total MRP(Incl. of taxes)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 5999</font><br>
 <hr size="1%" width="60%" color="silver" align="left">
 &nbsp Delivery fee&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color="">100</font>
 <hr size="1%" width="60%" color="silver" align="left">
 <font> &nbsp Total To Paid&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 6099</font><br>
 <hr size="1%" width="60%" color="silver" align="left">
  <font><br><br>&nbsp&nbsp&nbsp Cash On Delivery Only</font>
  &nbsp&nbsp&nbsp&nbsp&nbsp<br>
  <br>
    
  </font><button onclick="myFunction()"><input type="submit" button="Sbumit" value="Place Order"></button>
  <script>
function myFunction() {
  alert("Order Placed Sucessfull");
}
</script>

    </form>
   
<?php
 error_reporting(0);
 $con=mysql_connect("localhost","root","");
 if($con==false)
 {
  die("Error in database connection...");
 }
 $n=$_POST["t1"];
 $pno=$_POST["t2"];
 $pin=$_POST["t3"];
 $add=$_POST["t4"];
 $pro="Weighted Vest";
 $pri="6099";

 mysql_select_db("furniture");
 $k=mysql_query("insert into order01 values('$id','$n',$pno,$pin,'$add','$pro',$pri)");
 if($k==true)
 {
    header("location:index.html");
 } 

 mysql_close($con);
 ?>