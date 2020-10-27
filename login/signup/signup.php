<?php

  include '../connection/connection.php';
  $errorhandling= $errorhandling2= "";
  $message = "";
  $validation = "";
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

    if( empty($firstname) ){
      $validation = "This field is required";
      $flag = true;
    }

    if( empty($username) ){
      $validation = "This field is required";
      $flag = true;
    }    
    
    if( $flag == false ){
    
      // try{

      //   $userValidation = mysqli_query($mysql,"SELECT * FROM `".TABLE."` WHERE `username`='$username'");
      //   $userExists     = mysqli_fetch_all($userValidation, MYSQLI_ASSOC);
      //   $countRow       = count( $userExists );

      //   if( $countRow > 0 ){
      //     throw new Exception("username already taken, try with another one");
      //   }


      //   # TODO :INSERT

      //   echo "inset";
      // }catch(Exception $e) {
      //   $message = $e->getMessage();
      //   //echo 'Message: ' .$e->getMessage();
      // }

      #$userValidation = mysqli_query($mysql,"SELECT COUNT(*) as count FROM `".TABLE."` WHERE `username`='$username'");
      $userValidation = mysqli_query($mysql,"SELECT * FROM `".TABLE."` WHERE `username`='$username'");
      $userExists     = mysqli_fetch_all($userValidation, MYSQLI_ASSOC);
      $countRow       = count( $userExists );

      if( $countRow > 0 ){
        $message = "username already taken, try with another one";
        $flag    = true;
      }

      if( $flag == false ){
        # TODO :INSERT
      }
      
    }


    // die();   


    // if(empty($_POST['firstname']) 
    //   || empty($_POST['lastname'])
    //   || empty($_POST['username'])
    //   || empty($_POST['email'])
    //   || empty($_POST['password'])
    // ){
    //   $test = true;
    // }else{
    //   // $username2 = "SELECT * FROM `".TABLE."` WHERE `username`='ashu'";
    //   $username2 = "SELECT * FROM `".TABLE."` WHERE `username`='$username'";
    //   $uquery    = mysqli_query($mysql, $username2);
    //   // var_dump($uquery);
    //   // die();
    //   if($uquery == true){
    //     $userName = "username already taken, try with another one";
    //   }else{
    //   $sql= "INSERT INTO 
    //         `".TABLE."`(`firstname`, `lastname`, `username`, `email`, `password`)  
    //         VALUES 
    //           ('".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$password."')";
    //   $query= mysqli_query($mysql, $sql);
    //   //var_dump($query); 
    //   if($query==false){
    //     $message = "There is an error to insert data";
    //   }else{
    //     header("Location: http://localhost/login-main/login/login/login.php");
    //   }
    //}

    // if($test == true){
    //   $errorhandling= "*This feild is required";
    // }
    
     
    //  var_dump ($username2);
    //  die();
    
    // if(empty($_POST['firstname'])){
    //   $errorhandling= "*This feild is required";
    // }else{
    //   if(empty($_POST['lastname'])){
    //     $errorhandling2= "*This feild is required";
    //   }else{
    //     // $username2 = "SELECT * FROM `".TABLE."` WHERE `username`='ashu'";
    //     $username2 = "SELECT * FROM `".TABLE."` WHERE `username`='$username'";
    //     $uquery    = mysqli_query($mysql, $username2);
    //       // var_dump($uquery);
    //       // die();
    //       if($uquery == true){
    //         $userName = "username already taken, try with another one";
    //       }else{
    //       $sql= "INSERT INTO 
    //             `".TABLE."`(`firstname`, `lastname`, `username`, `email`, `password`)  
    //             VALUES 
    //               ('".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$password."')";
    //       $query= mysqli_query($mysql, $sql);
    //       //var_dump($query); 
    //       if($query==false){
    //         $message = "There is an error to insert data";
    //       }else{
    //         header("Location: http://localhost/login-main/login/login/login.php");
    //       }
    //     }
    //   }
    //}
  }
  include '../login/header.php';
  include './form.php';
?>