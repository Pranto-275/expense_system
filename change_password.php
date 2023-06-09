<?php
global $connection;
include 'connection.php';
session_start();

$user_name =  $_SESSION['full_name'];
$user_id = $_SESSION['user_id'];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div>

    <?php include 'navbar.php';?>

</div>

<div class="container-fluid">
    <div class="row flex-nowrap">

        <?php include 'sidebar.php';?>

        <div class="col py-3">

            <div class="content" style="padding: 35px;">
                <!-- content start -->
                <h3>Change Password</h3>

                <div class="box">
                    <form>
                        <div class="mb-3">
                            <label  class="form-label">Current Password</label>
                            <input type="password" class="form-control" >

                        </div>
                        <div class="mb-3">
                            <label  class="form-label">New Password</label>
                            <input type="password" class="form-control" >

                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" >

                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>


                <!-- content end -->
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>