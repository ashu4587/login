<?php
  include './connection/connection.php';
  $sql= "SELECT * FROM `".TABLE."`ORDER BY `sr_no` DESC LIMIT 20";
  $fetchall = mysqli_query($mysql, $sql);
  $listing = mysqli_fetch_all($fetchall, MYSQLI_ASSOC);
  // echo"<pre>";
  //   print_r($listing);
  // echo"<pre>";
?>
<form method="post">
  <style>
    table, th, td { margin: 10px auto;
    width: 700px;
    text-align: center;
    border: 1px solid black;
    background-color:#24ca40;
    }
  </style>
  <table>
    <thead>
      <tr>
        <th> Sr No. </th>
        <th> Name </th>
        <th> Username </th>
        <th> Email </th>
        <th> Action </th>
      </tr>
    </thead>
    <tbody>
      <?php
        $count= 0;
      foreach($fetchall as $key => $value) { 
        // var_dump($value);
        // die();
        $count+= 1;

      ?>
      <tr>
        <td><?php echo $count ;?> </td>
        <td><?php echo $value['firstname']; ?> 
        <?php echo $value['lastname']; ?></td>
        <td><?php echo $value['username']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td><a href= "edit.php?id= <?php echo $value ['username']; ?>">Edit </a>
        <a href="edit.php?id=<?php echo $value['username']; ?>&task=delete">Delete</a>
      </tr> 
      <?php 
      } 
      //} 
      ?>  
    </tbody>
  </table>
</form>