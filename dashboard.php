<?php
global $connection;
include 'connection.php';
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

                <div class="content" style="padding: 30px;">
                    <!-- content start -->
                    <h3>Dashboard</h3>
                        <div class="row text-center">
                            <div class="col-3 p-2">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Today's Expense</h5>
                                        <h1 style="color:blue">5</h1>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3 p-2">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Yesterday's Expense</h5>
                                        <h1 style="color:Red">5</h1>
                                    </div>
                                  </div>
                            </div>


                            <div class="col-3 p-2">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Last 7 Days's Expense</h5>
                                        <h1 style="color:green">5</h1>
                                    </div>
                                  </div>
                            </div>


                            <div class="col-3 p-2">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Last 30 Day's Expense</h5>
                                        <h1 style="color:black">5</h1>
                                    </div>
                                  </div>
                            </div>


                            <div class="col-3 p-2">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Current's Expense</h5>
                                        <h1 style="color:#ffa502">5</h1>
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