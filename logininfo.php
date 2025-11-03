



</html>
<center>                     
            <table width="90%">
             <tr>
              <th> <a href="orderinfo.php"> <font color="black"> <h4> ORDER INFO </h4></font> </a></th></th>
              <th> <a href="logininfo.php"> <font color="black"><h4> LOGIN INFO </h4> </font></a></th>
              <th> <a href=""> <font color="black"><h4></h4> </font></a></th>
              <th> <a href="index.html"> <font color="black"> <h4>&nbsp&nbsp LOGOUT &nbsp&nbsp</h4> </a> </font></th>

             </tr>
            </table>
            <hr size="1%" width="100%" color="black">
      
           </center>
           <h2 align="center">Login Info</h2>
</center>
        </form>
    </body>
</html>

<?php
       $con=mysql_connect("localhost","root","");              
     if($con==false) 
     {
         die("Error in connection...");
     }
     mysql_select_db("furniture");
     $res=mysql_query("select * from login");
  echo("<table border=1 width='90%' align='center'> ");
  echo("<tr> <th> Name <th> Phone NO<th> Username  <th> Password </tr>");
      while($row=mysql_fetch_array($res))
      {
         echo("<tr> <td> $row[0]");
         echo("<td> $row[1]");
         echo("<td> $row[2]");
         echo("<td> $row[3]");
         echo("</tr>");
      }      
     echo("</table>");
?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<center>
    <html>
      <body>
    <table>
    </table>
    
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
    </center>
    </table>
    </table>
    </body>
    </html>
    </center>