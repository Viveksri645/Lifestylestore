<?php 
 require("common.php");
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
    <title>Login</title>
</head>
<body>
   <?php
    include("header.php");
   ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="card panel" >
                    <div class="card-header text-white bg-primary">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="card-body cardbody">
                        <small class="text-warning">Login to make a purchase</small>
                        <form method="POST" action="login_submit.php">
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="email" name="email" placeholder="name@email.com"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="please enter correct email">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="password" name="password" placeholder="password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password doesnot matches the pattern">
                            </div>

                            <div class="button">
                                <button type="submit" name="submit" value="Login"  class="btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>Don't have a account ? <a href="signup.html">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
     include("footer.php");
    ?>
</body>
</html>