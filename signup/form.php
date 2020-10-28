<div class="col-sm-10" style="margin: 30px 100px; text-align: center;">
  <h1> SIGN UP HERE </h1>
</div>

<div class="col-sm-10" style="margin: 40px 150px;">
  <form action="" method="post">
    <div class="message-1" style= "background-color: crimson; text-align:center; width:400px; margin:auto;">
      <?php echo $message = isset($message) ? $message : ''; ?>
    </div>
    <div class="form-group">
      <label for="name">Firstname</label>
      <input type= "text" class= "form-control" name="firstname"  placeholder= "Enter your first name here" value="<?php echo empty($_POST['firstname']) ? '' :($_POST['firstname']) ?>"><br>
      <span>
        <?php
          if( !empty($validation)){
            echo $validation;
          } 
        ?>
      </span> 
    </div></br>
    <div class="form-group">
      <label for="name">Lastname</label>
      <input type= "text" class= "form-control" name="lastname"  placeholder= "Enter your last name here" value="<?php echo empty($_POST['lastname']) ? '' :($_POST['lastname']) ?>"><br>
      <span>
        <?php
          if( !empty($validation)){
            echo $validation;
          } 
        ?>
      </span>
    </div></br>
      <div class="form-group">
      <label for="username">Username</label>
      <input type= "text" class= "form-control" name="username"  placeholder= "Enter your username here" value="<?php echo empty($_POST['username']) ? '' :($_POST['username']) ?>">
      <span>
        <?php
          if( !empty($validation)){
            echo $validation;
          } 
        ?>
      </span>
    </div></br></br>
    <div class="form-group">
      <label for="email">Email</label>
      <input type= "text" class= "form-control" name="email"  placeholder= "Enter your email here" value="<?php echo empty($_POST['email']) ? '' :($_POST['email']) ?>">
      <?php //echo $emailerror; ?>

      <span>      
      <?php
        echo $emailerror;
        if( !empty($validation)){
          echo $validation;
        } 
      ?>
      </span>
    </div></br></br>
      <div class="form-group">
      <label for="password">Password</label>
      <input type= "password" class= "form-control" name="password"  placeholder= "Enter your password here" value="">
      <span>
        <?php
          if( !empty($validation)){
            echo $validation;
          } 
        ?>
      </span>
    </div></br></br>
    <div class="col-sm-2" style="margin: 0 auto;">
      <button type= "submit" class= "btn btn-primary" name="submit"   value="submit">SUBMIT</button>
    </div>

  </form>
</div>