<div class="col-sm-4" style="margin: 30px 100px; text-align: center;">
  <h1> SIGN UP HERE </h1>
 
</div>
<div class="col-sm-4" style="margin: 40px 150px;">
  <form action="" method="post">
    <div class="sunil-message">
        <?php echo $message = isset($message) ? $message : ''; ?>
    </div>
    <div class="form-group">
      <label for="name">Firstname</label>
      <input type= "text" class= "form-control" name="firstname"  placeholder= "Enter your first name here" value=""><br>
      <?php
        if( !empty($validation) ){
          echo $validation;
        } 
      ?>
    </div></br>
    <div class="form-group">
      <label for="name">Lastname</label>
      <input type= "text" class= "form-control" name="lastname"  placeholder= "Enter your last name here" value=""><br>
      <?php echo $errorhandling; ?>
    </div></br>
    <div class="form-group">
      <label for="username">Username</label>
      <input type= "text" class= "form-control" name="username"  placeholder= "Enter your username here" value="">
      <span>      <?php
        if( !empty($validation) ){
          echo $validation;
        } 
      ?></span>
    </div></br></br>
    <div class="form-group">
      <label for="email">Email</label>
      <input type= "text" class= "form-control" name="email"  placeholder= "Enter your email here" value="">
      <?php echo $errorhandling; ?>
    </div></br></br>
    <div class="form-group">
      <label for="password">Password</label>
      <input type= "password" class= "form-control" name="password"  placeholder= "Enter your password here" value="">
      <?php echo $errorhandling; ?>
    </div></br></br>
    <div class="col-sm-2" style="margin: 0 auto;">
      <button type= "submit" class= "btn btn-primary" name="submit"   value="submit">SUBMIT</button>
    </div>
    
  </form>
</div>