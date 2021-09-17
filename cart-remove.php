<?php
 require("common.php");
 $item_id = $_GET['id'];
 $user_id = $_SESSION['user_id'];
 echo($item_id);
 echo($user_id);
 $delete_query = "DELETE from user_items where user_id = '".$user_id."' and item_id ='".$item_id."'";
 $delete_query_result = mysqli_query($_con,$delete_query);
 header("location:cart.php");
 ?>