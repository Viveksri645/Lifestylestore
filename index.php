<?php 
  require("common.php");
  if(isset($_SESSION['email']))
  {
    header('location:products.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jq.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <title>Home</title>
</head>
<body>
   <?php
    include("header.php");
   ?>
    <div class="view" id="bannerimage">
        <div class="container">
          <div class="banner_content">
          <h3>Sale | Flat 40% OFF</h3>
          <a  class="btn btn-danger btn-lg"href="products.php">Shop Now</a>
          </div>
        </div>
    </div>
    
    <?php
     include("footer.php");
    ?>
   
</body>
</html>