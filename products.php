<?php
 require("common.php");
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
    <script type="text/javascript" name="javascript" src="js/bootstrap.min.js"></script>
    <title>Products</title>
</head>

<body>
    <?php
     include("header.php");
    
     include("check-if-added.php");
    ?>
    <div class="container" id="jumbo">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Stores</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
            </p>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 col-sm-6 ">
                <figure class="figure">
                    <img src="2.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Sony DSLR</h3>
                            <p>Price Rs.40000.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(1)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                   
                </figure>
            </div>
            <div class="col-md-3 col-sm-6  box">
                <figure class="figure">
                    <img src="3.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Sony DSLR</h3>
                            <p>Price Rs.50000.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(2)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6  box">
                <figure class="figure">
                    <img src="4.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Olympus DSLR</h3>
                            <p>Price Rs.80000.00</p>
                        </center>
                        
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(3)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="5.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Canon EOS</h3>
                            <p>Price Rs.36000.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(4)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="6.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Luis Phill</h3>
                            <p>Price Rs.1000.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(5)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="8.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>H&W</h3>
                            <p>Price Rs.800.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(6)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="13.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>John Zok</h3>
                            <p>Price Rs.1500.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(7)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="14.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Jhalsani</h3>
                            <p>Price Rs.1300.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(8)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="9.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Titan Model #301</h3>
                            <p>Price Rs.13000.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(9)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="10.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Titan Model #201</h3>
                            <p>Price Rs.3000.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(10)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="11.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>HMT Milan</h3>
                            <p>Price Rs.8000.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(11)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <figure class="figure">
                    <img src="12.jpg" class="figure-img img-thumbnail img-fluid rounded" alt="image">
                    <figcaption class="figure-caption">
                        <center>
                            <h3>Faber Luba</h3>
                            <p>Price Rs.18000.00</p>
                        </center>
                    </figcaption>
                    <?php 
                    if (!isset($_SESSION['email'])) 
                    { 
                        ?>
                        <div class="container">
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        </div> 
                        <?php 
                    } 
                    else 
                    { if (check_if_added_to_cart(12)) { 
                        echo '<div class="container"><a href="#" class="btn btn-block btn-success disabled">Added to cart</a></div>'; 
                        } 
                      else 
                        { ?> 
                        <div class="container">
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        </div>
                         
                        <?php } 
                    } ?>
                </figure>
            </div>
        </div>
    </div>
    <?php
     include("footer.php");
     ?>
</body>

</html>