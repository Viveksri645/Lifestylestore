
 <?php
  session_start();
  $_con = mysqli_connect("localhost","root","")
         or die(mysqli_error($_con));
  mysqli_select_db($_con,'e-commerce');
 ?>
