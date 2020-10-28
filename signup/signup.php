<?php

  include '../connection/connection.php';
  $errorhandling= $errorhandling2= "";
  $message = "";
  $validation = "";
  $emailerror = "";
  if(isset($_POST['submit'])){

    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $message  = "";
    $userName = "";
    $test     = "";


    $flag = false;

    if( empty($firstname)){
      $validation = "This field is required";
      $flag = true;
    }

    if( empty($lastname)){
      $validation = "This field is required";
      $flag = true;
    }    

    if( empty($username)){
      $validation = "This field is required";
      $flag = true;
    }
    
    if( empty($email)){
      $validation = "This field is required";
      $flag = true;
    } 

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerror= "Invalid email format";
    }else{

      if( empty($password)){
        $validation = "This field is required";
        $flag = true;
      }  
      if( $flag == false ){
        $userValidation = mysqli_query($mysql,"SELECT * FROM `".TABLE."` WHERE `username`='$username'");
        $userExists     = mysqli_fetch_all($userValidation, MYSQLI_ASSOC);
        $countRow       = count( $userExists );

        if( $countRow > 0 ){
          $message = "username already taken, try with another one";
          $flag    = true;
        }

        if( $flag == false ){
          $sql= "INSERT INTO 
          `".TABLE."`(`firstname`, `lastname`, `username`, `email`, `password`)  
          VALUES 
          ('".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$password."')";
          $query= mysqli_query($mysql, $sql);
          //var_dump($query); 
          if($query==false){
            $message = "There is an error to insert data";
          }else{
            header("Location: http://localhost/login-main/login/login/login.php");
          }
        }
      }
    }
  }
  include '../login/header.php';
  include './form.php';
?>