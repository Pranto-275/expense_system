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
    <title>Expense Report</title>
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
                <h3>Expense Report</h3>
                <h6 class="text-center my-3">Datewise Expense Report From 2023-02-15 To 2023-02-15 </h6>

                <div class="box">
                    <table class="table table-bordered border-dark text-center">
                        <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Expense Date</th>
                            <th scope="col">Expense Cost</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>

                        </tr>


                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>

                        </tr>
                        <tr>
                            <td colspan="2"><b>Grand Total</b></td>
                            <td>1225</td>
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