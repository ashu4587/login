<?php
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('DATA', 'data');
  define('TABLE', 'data');

  $mysql= mysqli_connect(HOST, USER, PASS, DATA);
  if (mysqli_connect_error()){
    echo "failed to connect to database".mysqli_connect_error();
  }
  //else{
  //   echo "you are sucessfully connected to database";
  // }

?>