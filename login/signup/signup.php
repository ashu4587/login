<?php
  include '../connection/connection.php';
  $errorhandling= "";
  $errorhandling2= "";
  if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
     
    //  var_dump ($username2);
    //  die();
    if(empty($_POST['firstname'])){
      $errorhandling= "*This feild is required";
    }else{
      if(empty($_POST['lastname'])){
        $errorhandling2= "*This feild is required";
      }else{
        $username2= "SELECT `username` FROM `".TABLE."`";
    //     echo "<pre>";
    //   print_r($username2);
    //  echo"</pre>";
    //  die(); 
        if($username ===$username2){
          echo "username already taken, try with another one";
        }else{
          $sql= "INSERT INTO 
                `".TABLE."`(`firstname`, `lastname`, `username`, `email`, `password`)  
                VALUES 
                  ('".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$password."')";
          $query= mysqli_query($mysql, $sql);
          //var_dump($query); 
          if($query==false){
            echo "There is an error to insert data";
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