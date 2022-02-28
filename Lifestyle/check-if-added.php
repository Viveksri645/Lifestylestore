<?php
 function check_if_added_to_cart($item_id){
    $_con = mysqli_connect("localhost","root","")
    or die(mysqli_error($_con));
    mysqli_select_db($_con,'e-commerce');
     $user_id = $_SESSION['user_id']; 
     $added_query = "SELECT count(*) as total FROM user_items WHERE item_id='".$item_id."' AND user_id ='".$user_id."' and status='Added to cart'";
     $added_query_result = mysqli_query($_con,$added_query)or
                             die(mysqli_error($_con));
     $rows = mysqli_fetch_array($added_query_result);
     if($rows['total']>=1){
         return 1;
     }
     else{
         return 0;
     }
 }
 
?>
