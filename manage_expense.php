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
    <title>Manage Expense</title>
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
                <h3>Manage Expenses</h3>

                <div class="box">
                    <table class="table table-bordered border-dark">
                        <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Expense Item</th>
                            <th scope="col">Expense Cost</th>
                            <th scope="col">Expense Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <div class="d-inline">
                                        <span>
                                            <button class="btn btn-primary">Edit</button>
                                        </span>
                                    <span>
                                            <button class="btn btn-danger">Delete</button>
                                        </span>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <div class="d-inline">
                                        <span>
                                            <button class="btn btn-primary">Edit</button>
                                        </span>
                                    <span>
                                            <button class="btn btn-danger">Delete</button>
                                        </span>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>


                <!-- content end -->
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>