<?php
 require("common.php");
 if(!isset($_SESSION['email'])){
     header("location:index.php");
 }
 ?>
 <?php
 $id = $_SESSION['user_id'];
 
  if(isset($_POST['change'])){
       $query = "SELECT password FROM users where id = $id";
       $query_run = mysqli_query($_con,$query)or
                    die(mysqli_error($_con));
       $row = mysqli_fetch_array($query_run);
       if($row['password']==md5($_POST['opassword'])){
            if(strlen($row['password'])==strlen(md5($_POST['opassword']))){
                
               if($_POST['npassword']==$_POST['repassword']){
                
                     $query1 = "UPDATE `e-commerce`.`users` SET password= '".md5($_POST['npassword'])."' ";
                     $query1_run = mysqli_query($_con,$query1);
                     unset($_SESSION['email']);
                     header("location:login.php");
               }else{
                   echo '
                    <script>alert("retype password doesnot matches with newpassword")</script>';
                    header("location:settings.php");
               }
            }
             else{
                echo '
                <script>alert("length of password doesnot matches with old password")</script>';
                header("location:settings.php");
            }
       }else{
        echo '
        <script>alert("old password doesnot matches with password")</script>';
        header("location:settings.php");
       }
  }
  ?>