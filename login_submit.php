<?php
require("common.php");
?>
<?php
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($_con,$_POST['email']);
    $password= md5(mysqli_real_escape_string($_con,$_POST['password']));
    $select_query = "SELECT count(*) as total FROM users WHERE email= '".$email."' and password = '".$password."' ";
    $select_query_result = mysqli_query($_con,$select_query)
    or die(mysqli_error($_con));
    $select_query_rows = mysqli_fetch_array($select_query_result);
    $_select_query1 = "SELECT id FROM users WHERE email= '".$email."' and password = '".$password."' ";
    $select_query_result1 = mysqli_query($_con,$_select_query1)or die(mysqli_error($_con));
    $rows = mysqli_fetch_array($select_query_result1);
    if($select_query_rows['total']>0){

    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $rows['id'];
    header("location:products.php");
  }
    else{
      echo("username or password is incorrect.");
       }
}?>