<?php
global $connection;
include 'connection.php';
$sum = 0;
session_start();

$user_name =  $_SESSION['full_name'];
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['search'])){
        $from_date = $_POST['from_date'];
        $to_date = $_POST['to_date'];
        if (empty($from_date) || empty($to_date)){
            $message = "Field Should Be filled!";
        }else{
            $daywise_search = "SELECT * FROM expense WHERE date(expense_date) BETWEEN '$from_date' AND '$to_date'";
            $daywise_search_reuslt = mysqli_query($connection,$daywise_search);

        }
    }
}



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
                <h6 class="text-center my-3" style="color: red">Datewise Expense Report From <?php echo $from_date;?> To <?php echo $to_date;?> </h6>

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


                        <?php
                        $i =0;

                            while ($row = mysqli_fetch_assoc($daywise_search_reuslt)){ ?>


                                <tr>
                                    <td><?php echo ++$i;?></td>
                                    <td><?php echo $row['expense_date'] ?></td>
                                    <td><?php echo $row['cost'] ?></td>
                                    <?php   $sum = $sum + $row['cost'];?>
                                </tr>

                            <?php    }

                        ?>
                        <tr>
                            <td colspan="2"><b>Grand Total</b></td>
                            <td><?php echo  $sum; ?></td>
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