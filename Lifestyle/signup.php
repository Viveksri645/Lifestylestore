<?php
 require("common.php");
 if(isset($_SESSION['email'])){
     header("location: products.php");
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jq.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Signup</title>
</head>

<body>
    <?php
     include ("header.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3" id="signupform">
                <h3>SIGNUP</h3>
                <form method="POST"action="signup_script.php"> 
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="name"
                                pattern="[a-z]{1,15}" title="contains only lowercase alphabets">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-lg"
                            placeholder="name@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            title="Email must be in the form:characters@characters.domain">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg"
                            placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact" class="form-control form-control-lg" placeholder="contact"
                         maxlength="12">
                    </div>
                    <div class="form-group">
                        <input type="city" name="city" class="form-control form-control-lg" placeholder="City"
                        pattern="[a-z]{1,15}" title="contains only alphabets">
                    </div>
                    <div class="form-group">
                        <input type="address" name="address" class="form-control form-control-lg" placeholder="Address">
                    </div>
                    <button class="btn btn-primary btn-group-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php
     include("footer.php");
    ?>
</body>

</html>