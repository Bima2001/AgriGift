<?php
 //session_start();
 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php'); 
 ?>

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="n-0 font-weight-bold text-primary">Admin profile <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">Edit admin profile</button> 
    </h6>
    </div>

    <div class="card-body">
<?php

$connection = mysqli_connect("localhost","root","","adminpanel");

if (isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM register WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
   
    foreach($query_run as $row)
    {
      ?>

    <form action="code.php" method="POST">

    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
    
      <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="edit_username" placeholder="Enter username"  value="<?php echo $row['username'] ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="edit_email" placeholder="Enter email"  value="<?php echo $row['email'] ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="edit_password" placeholder="Enter password"  value="<?php echo $row['password'] ?>" class="form-control">
        </div>
        <a href="register.php" class="btn btn-danger">CANCEL</a>
        <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>

      </form>
      <?php
    }
} 
?>
        </div>
    </div>
</div>

</div>
<!--/container fluid-->


<?php

 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>