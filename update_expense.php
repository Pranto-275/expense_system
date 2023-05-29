<?php
global $connection;
include 'connection.php';
session_start();

$user_name =  $_SESSION['full_name'];
$user_id = $_SESSION['user_id'];

$get_id = $_GET['id'];


$search_update_item = "SELECT * FROM expense WHERE id = '$get_id'";
$search_update_item_result = mysqli_query($connection,$search_update_item);

$data = mysqli_fetch_assoc($search_update_item_result);




if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['update'])){
        $today_date = $_POST['utoday_date'];
        $item = $_POST['uitem'];
        $cost = $_POST['ucost'];
        $get_id = $_POST['get_id'];

        echo  $today_date.$item.$cost;

        if (empty($today_date) || empty($item) || empty($cost)){
            echo "Field Should Not Be Empty!";
        }else{

                $update_expense_query = "UPDATE expense SET expense_date = '$today_date', item = '$item', cost = '$cost' WHERE id= '$get_id'";
                $update_expense_query_result = mysqli_query($connection,$update_expense_query);
            if ($update_expense_query_result == 'ture'){
              header("Location:manage_expense.php");
            }else{
                echo "failed";
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
    <title>Update Expense</title>
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
                    <form action="update_expense.php" method="POST">
                        <div class="mb-3">
                            <label  class="form-label">Date Of Expense</label>
                            <input type="date" class="form-control" name="utoday_date" value="<?php echo $data['expense_date']?>">
                            <input type="hidden" name="get_id" value="<?php echo $data['id'];?>" >
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Item</label>
                            <input type="text" class="form-control" name="uitem" value="<?php echo $data['item']?>">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Cost Of Item</label>
                            <input type="number" class="form-control" name="ucost" value="<?php echo $data['cost']?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
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