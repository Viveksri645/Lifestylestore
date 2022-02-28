<?php
 session_start();
 $_SESSION['email'] = "wsd432";
 if(isset($_SESSION)){
     echo("Welcome"." ".$_SESSION['email']);
 }
 session_destroy();
 if(isset($_SESSION)){
    echo("Welcome"." ".$_SESSION['email']);
}
?>