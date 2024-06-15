<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "adminpanel");

if (isset($_POST['registerbtn'])) 
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];



    if ($password === $cpassword) {
        $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            //echo "saved";
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
        } else {
            $_SESSION['status'] = "Admin Profile Not Added";
            header('Location: register.php');
        }
    } else {
        $_SESSION['status'] = "Password and confirm password does not match";
        header('Location: register.php');
    }
}


if (isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM register WHERE id='$id'"
    $query_run = mysqli_query($connection, $query);
    
} 



?>
