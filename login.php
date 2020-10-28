<?php
  include '../connection/connection.php';
  $errorhandling =$errorhandling2 = "";
  
  if(isset($_POST['login'])){
    $pword = $_POST['password'];
    $uname = $_POST['username'];
    if(empty($uname)){
      $errorhandling= "*Please enter your username";
    }else{
      if(empty($pword)){
        $errorhandling2= "*Please enter your password";
      }else{
        $userquery= mysqli_query($mysql, "SELECT `username`, `password` FROM `".TABLE."` WHERE `username` ='$uname' AND `password`='$pword'");
      //   echo"<pre>";
      //   print_r($userquery);
      // echo"</pre>";
      // die();
      $row = mysqli_fetch_assoc($userquery);
      
      if(!empty($row)){
        header("Location:http://localhost/login-main/login/listing.php");
       #TODO: go to listing page
        //exit;
      }else{
        echo"Sorry,invalid username or password , Please try again.";
      }

     
      }
    }
  }
  include '../login/header.php';
  include './login-form2.php';
  include '../login/footer.php';
?>