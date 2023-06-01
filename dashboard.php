<?php
global $connection;
include 'connection.php';
$cost = 0;
$cost2 = 0;
$cost3 =0;
$cost4 =0;
$cost5 =0;
session_start();

$user_name = $_SESSION['full_name'];
$user_id = $_SESSION['user_id'];


$today_expense_sql = "SELECT cost 
  FROM expense
 WHERE user_id = '$user_id' AND DATE(expense_date) = DATE(NOW())
 ORDER BY expense_date ASC";
$today_expense_sql_reuslt = mysqli_query($connection, $today_expense_sql);
while ($row = mysqli_fetch_assoc($today_expense_sql_reuslt)) {
    $cost = $cost + $row['cost'];
}

$d=strtotime("yesterday");
$yesterday = date("Y-m-d", $d);

$yesterday_expense_sql = "SELECT cost
FROM expense
WHERE   user_id = '$user_id' AND DATE(expense_date) = '$yesterday'
ORDER BY expense_date ASC";
$yesterday_expense_sql_result = mysqli_query($connection, $yesterday_expense_sql);
while ($row = mysqli_fetch_assoc($yesterday_expense_sql_result)) {
    $cost2 = $cost2 + $row['cost'];
}



$d=strtotime("-7 Days");
$last_week = date("Y-m-d", $d);

$d=strtotime("today");
$today =  date("Y-m-d", $d);


$last_week_expense_sql = "SELECT cost
FROM expense
WHERE  user_id = '$user_id' AND  date(expense_date) BETWEEN '$last_week' AND '$today'
ORDER BY expense_date ASC";
$last_week_expense_sql_result = mysqli_query($connection, $last_week_expense_sql);
while ($row = mysqli_fetch_assoc($last_week_expense_sql_result)) {
    $cost3 = $cost3 + $row['cost'];

}


$d=strtotime("-1 Month");
$last_month =  date("Y-m-d", $d);


$last_month_expense_sql = "SELECT cost
FROM expense
WHERE  user_id = '$user_id' AND  date(expense_date) BETWEEN '$last_month' AND '$today'
ORDER BY expense_date ASC";
$last_month_expense_sql_result = mysqli_query($connection, $last_month_expense_sql);
while ($row = mysqli_fetch_assoc($last_month_expense_sql_result)) {
    $cost4 = $cost4 + $row['cost'];

}





$d=strtotime("-1 Year");
$last_year =  date("Y-m-d", $d);


$last_year_expense_sql = "SELECT cost
FROM expense
WHERE  user_id = '$user_id' AND  date(expense_date) BETWEEN '$last_year' AND '$today'
ORDER BY expense_date ASC";
$last_year_expense_sql_result = mysqli_query($connection, $last_year_expense_sql);
while ($row = mysqli_fetch_assoc($last_year_expense_sql_result)) {
    $cost5 = $cost5 + $row['cost'];

}




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div>

    <?php include 'navbar.php'; ?>

</div>

<div class="container-fluid">
    <div class="row flex-nowrap">

        <?php include 'sidebar.php'; ?>

        <div class="col py-3">

            <div class="content" style="padding: 30px;">
                <!-- content start -->
                <h3>Dashboard</h3>
                <div class="row text-center">
                    <div class="col-3 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Today's Expense</h5>
                                <h1 style="color:blue"><?php echo $cost; ?></h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Yesterday's Expense</h5>
                                <h1 style="color:Red"><?php echo $cost2; ?></h1>
                            </div>
                        </div>
                    </div>


                    <div class="col-3 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Last 7 Days's Expense</h5>
                                <h1 style="color:green"><?php echo $cost3; ?></h1>
                            </div>
                        </div>
                    </div>


                    <div class="col-3 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Last 30 Day's Expense</h5>
                                <h1 style="color:black"><?php echo $cost4; ?></h1>
                            </div>
                        </div>
                    </div>


                    <div class="col-3 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Current Year's Expense</h5>
                                <h1 style="color:#ffa502"><?php echo $cost5; ?></h1>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <!-- content end -->
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>