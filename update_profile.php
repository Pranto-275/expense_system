<?php
global $connection;
include 'connection.php';
session_start();
$user_id = $_SESSION['user_id'];


$fullname = $_POST['full_name'];
$email = $_POST['email'];


$update_profile = "UPDATE users SET full_name = '$fullname',email = '$email' WHERE user_id = '$user_id'";
$update_profile_result = mysqli_query($connection,$update_profile);

if ($update_profile_result == 'ture'){
    header("Location:profile.php");
}else{
    echo "Failed";
}
