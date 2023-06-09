<?php
global $connection;
include 'connection.php';
session_start();

$user_name =  $_SESSION['full_name'];
$user_id = $_SESSION['user_id'];


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['add'])){
        $today_date = $_POST['today_date'];
        $item = $_POST['item'];
        $cost = $_POST['cost'];

        if (empty($today_date) || empty($item) || empty($cost)){
            echo "Field Should Not Be Empty!";
        }else{
            $add_expense_query = "INSERT INTO expense (user_id,expense_date,item,cost) VALUES ('$user_id','$today_date','$item','$cost')";
            $add_expense_query_result = mysqli_query($connection,$add_expense_query);
            if ($add_expense_query_result == 'ture'){
                header("Location:manage_expense.php");
            }
        }

    }
}




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Expense</title>
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
                <h3>Add Expenses</h3>

                <div class="box">
                    <form action="add_expense.php" method="POST">
                        <div class="mb-3">
                            <label  class="form-label">Date Of Expense</label>
                            <input type="date" class="form-control" name="today_date">

                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Item</label>
                            <input type="text" class="form-control" name="item">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Cost Of Item</label>
                            <input type="number" class="form-control" name="cost">
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">Add</button>
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