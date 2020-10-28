<div class="col-sm-10" style=" text-align:center;" style="width:1500px; margin:30px 200px;">
  <form action="" method="post">
    <div class="col-sm-10" style=" text-align:center;" style="width:1500px; margin:30px 200px;">
      <img src="./img/img_avatar2.img" alt="Avatar" class="avatar">
    </div>

    <divclass="col-sm-10" style=" text-align:center;" style="width:1500px; margin:30px 200px";>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" value="">
      <?php echo "$errorhandling"; ?> </br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password">
      <?php echo "$errorhandling2"; ?> </br>
      <button type= "submit" class= "btn btn-primary" name="login"   value="submit">Login</button>
    </div>

  </form>
</div>
