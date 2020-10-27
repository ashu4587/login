<?php
  include '../connection/connection.php';
  $errorhandling =$errorhandling2 = "";
  
  if(isset($_POST['login'])){
    if(empty($_POST['username'])){
      $errorhandling= "*Please enter your username";
    }else{
      if(empty($_POST['password'])){
        $errorhandling2= "*Please enter your password";
      }else{
        header("Location:http://localhost/login-main/login/listing.php");
      }
    }
  }
  include '../login/header.php';
  include '../login/form-login.php';
  include '../login/footer.php';
?>