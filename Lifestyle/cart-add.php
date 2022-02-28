<?php
require("common.php");
$user_id = $_SESSION['user_id'];
$item_id = $_GET['id'];
$_SESSION['item_id'] = $item_id; 
if(isset($_SESSION['email'])){
 $query = "INSERT INTO `user_items`(`user_id`, `item_id`, `status`) VALUES('$user_id', '$item_id', 'Added to cart')";
 $query_result = mysqli_query($_con,$query)
                 or die(mysqli_error($_con));
 
 header("location:products.php");
}
 
 ?> 