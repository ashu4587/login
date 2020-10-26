<?php
  include '../connection/connection.php';
  if(isset($_POST['login'])){
    header("Location:http://localhost/login-main/login/listing.php");
  }
  include '../login/header.php';
  include '../login/form-login.php';
  include '../login/footer.php';
?>