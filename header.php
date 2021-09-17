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
    <title>Lifestyle Stores</title>
</head>

<body>
    <div class="navbar navbar-expand-md navbar-dark bg-dark ">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Lifestyle stores</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsiblenavbar">
            <ul class="navbar-nav ml-auto">
            <?php
                    if (isset($_SESSION['email'])) { ?> <li ><a href="cart.php" class="nav-link"><span><img src="cart4.svg" alt="cart image" height="32" width="32"></span> Cart </a></li>
                        <li class="nav-item"><a href="settings.php" class="nav-link"><span><img src="gear.svg" alt="settings image" height="32" width="32"></span> Settings</a></li>
                        <li class="nav-item"><a href="logout_script.php" class="nav-link"><span><img src="box-arrow-left.svg" alt="logout image" height="32" width="32"></span> Logout</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a href="signup.php" class="nav-link"><img src="person-fill.svg" alt="person image" width="32" height="32"> Sign Up</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link"><img src="box-arrow-in-right.svg" alt="image" width="32" height="32"> Login</a></li>
                    <?php }
            ?>
            </ul>
        </div>
    </div>
    </div>
</body>

</html>