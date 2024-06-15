<?php
 session_start();
 include('includes/header.php');
 include('includes/navbar.php'); 
 
 ?>

 
<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add admin data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"> &times;</span>
            
        </button>
      </div>

      <form action="code.php" method="POST">

      <div class="modal-body">


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
      <div class="form-group">
        <label for="">Confirm password</label>
        <input type="Password" placeholder="Enter passworde" name="confirmpassword"class="form-control">
      </div>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.location='register.php'">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save changes</button>
      </div>

      </form>


    </div>
  </div>
</div>

<div class="container-fluid">

<!--DataTales Example-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="n-0 font-weight-bold text-primary">Admin profile <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">Add admin profile</button> 
    </h6>
    </div>

    <div class="card-body">

    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
        echo '<h2>'.$_SESSION['success'].'</h2>';
        unset($_SESSION['success']);
    }
    
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
        echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);
    }

    
    ?>

        <div class="table-responsive">

        <?php
        $connection = mysqli_connect("localhost","root","","adminpanel");

        $query = "SELECT * FROM register";
        $query_run = mysqli_query($connection, $query);

        ?>


        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

            <?php
        if(mysqli_num_rows($query_run) >0)
        {
          while($row = mysqli_fetch_assoc($query_run))
          {
            ?>

          

                <tr>
                <td><?php echo$row['id'];  ?></td> 
                <td><?php echo$row['username'];  ?></td> 
                <td><?php echo$row['email'];  ?></td> 
                <td><?php echo$row['password'];  ?></td> 
                 
                <td>  
                  <form action="register_edit.php"method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="edit_btn" class="btn btn-success"> Edit</button>
                  </form>
                </td> 
                <td>  
                  <button type="submit" class="btn btn-danger"> Delete</button>
                </td> 
               
                

                </tr>

                <?php
          }
        }
        else{
          echo "No record found";
        }

        ?>
                
            </tbody>
        </table>

        </div>
    </div>
</div>


<!--/.container fluid-->



<?php

 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>
