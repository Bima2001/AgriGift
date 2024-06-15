<?php
 session_start();
 include('includes/header.php');
 include('includes/navbar.php'); 
 
 ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="n-0 font-weight-bold text-primary">Admin profile <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">Edit admin profile</button> 
    </h6>
    </div>

    <div class="card-body">

    <div class="form-group">
        <label for="">Username</label>
        <input type="text" placeholder="Enter username" name="username"class="form-control">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" placeholder="Enter email" name="email"class="form-control">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" placeholder="Enter password" name="password"class="form-control">
      </div>
      

    

        </div>
    </div>
</div>




<?php

 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>