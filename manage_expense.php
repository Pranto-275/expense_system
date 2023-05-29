<?php
global $connection;
include 'connection.php';
session_start();

$user_name = $_SESSION['full_name'];
$user_id = $_SESSION['user_id'];


$show_expense_query = "SELECT * FROM expense WHERE user_id = '$user_id'";
$show_expense_query_result = mysqli_query($connection, $show_expense_query);



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

    <?php include 'navbar.php'; ?>

</div>

<div class="container-fluid">
    <div class="row flex-nowrap">

        <?php include 'sidebar.php'; ?>

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
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($show_expense_query_result)) { ?>
                            <tr>
                                <td><?php echo ++$i;?></td>
                                <td><?php echo $row['item'];?></td>
                                <td><?php  echo $row['cost'];?></td>
                                <td><?php  echo $row['expense_date'];?></td>
                                <td>
                                    <div class="d-inline">
                                        <span>
                                            <a href="update_expense.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                                        </span>
                                        <span>
                                            <a href="delete_item.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

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