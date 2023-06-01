<?php
global $connection;
include 'connection.php';
session_start();

$user_name =  $_SESSION['full_name'];
$user_id = $_SESSION['user_id'];

$user_profile_query = "SELECT * FROM users WHERE user_id = '$user_id'";
$user_profile_query_result = mysqli_query($connection,$user_profile_query);
$data = mysqli_fetch_assoc($user_profile_query_result);






?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
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
                <h3>Profile</h3>

                <div class="box">
                    <form action="update_profile.php" method="POST">
<!--                        <input type="hidden" value="--><?php //echo $data['user_id']; ?><!--" name="user_id_for_update">-->
                        <div class="mb-3">
                            <label  class="form-label">Full Name</label>
                            <input type="text" class="form-control" value="<?php echo $data['full_name'] ?>" name="full_name">

                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Email</label>
                            <input type="email" class="form-control" value="<?php echo $data['email'] ?>" name="email">
                        </div>
<!--                        <div class="mb-3">-->
<!--                            <label  class="form-label">Phone</label>-->
<!--                            <input type="number" class="form-control"  value="--><?php //echo $data['full_name'] ?><!--">-->
<!--                        </div>-->

                        <div class="mb-3">
                            <label  class="form-label">Register Date</label>
                            <input type="text" class="form-control" aria-label="readonly input example" readonly  value="<?php echo $data['join_date'] ?>">
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