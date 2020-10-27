<?php
  include './connection/connection.php';
  // $firstname = $_POST['firstname'];
  // $lastname  = $_POST['lastname'];
  // $email     = $_POST['email'];
  if(isset($_POST['update'])){
  $update    = "UPDATE `".TABLE."` SET `firstname`='".$_POST['firstname']."' , `lastname`='".$_POST['lastname']."' ,`email`='".$_POST['email']."' WHERE `username`=".$_GET['username'];  
  $updatecheck= mysqli_query($mysql, $update);
  if($updatecheck == false){
    echo "There is an error in updating data";
  }else{
    echo "Data updated succesfully";
  }
}
?>
<div class="col-sm-4" style="margin: 30px 100px; text-align: center;">
  <h1> EDIT </h1>
</div>
<div class="col-sm-10" style="margin: 40px 150px;">
  <form action="" method="post">

    <div class="form-group">
      <label for="name">Firstname</label>
      <input type= "text" class= "form-control" name="firstname"  placeholder= "Enter your first name here" value=""><br>
      <?php //echo $errorhandling; ?>
    </div></br>
    <div class="form-group">
      <label for="name">Lastame</label>
      <input type= "text" class= "form-control" name="lastname"  placeholder= "Enter your last name here" value=""><br>
      <?php //echo $errorhandling2; ?>
    </div></br>
   
      <label for="email">Email</label>
      <input type= "text" class= "form-control" name="email"  placeholder= "Enter your email here" value="">
    </div></br></br>
    <div class="col-sm-2" style="margin: 0 auto;">
      <button type= "submit" class= "btn btn-primary" name="update"   value="submit">UPDATE</button>
    </div>
    
  </form>
</div>