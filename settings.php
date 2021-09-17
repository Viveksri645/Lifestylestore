<?php
 require("common.php");
 if(!isset($_SESSION['email'])){
     header("location:index.php");
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <script type="text/javascript" src="jq.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Settings</title>
</head>
<body>
    <?php
    include("header.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3" id="signupform">
                <h3>Change Password</h3>
                <form action="settings_script.php" method="POST"> 
                    <div class="form-group">
                        <input type="password" name="opassword" class="form-control form-control-lg" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="npassword" class="form-control form-control-lg"
                            placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="repassword" class="form-control form-control-lg"
                            placeholder="Re-type New Password">
                    </div>
                    
                    <button class="btn btn-primary btn-group-lg" name="change">Change</button>
                </form>
            </div>
        </div>
    </div>
    <?php
     include("footer.php");
     ?>
</body>
</html>