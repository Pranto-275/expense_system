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


        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar_background">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Daily Expense Tracker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <span class="navbar-text">
                    </span>
                </div>
            </div>
        </nav>

    </div>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light sidebar_bgcolor">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline text-dark">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                class="rounded-circle">
                            <span style="padding: 10px;font-weight: bold;">Adam Wahid</span> <br> <span style="font-size: 15px;"> <span
                                    style="color: #26de81;"><i class="fa-solid fa-circle fa-xs"></i></span>
                                Online</span></span>

                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i
                                        class="fa-solid fa-gauge fa-xl"></i> DashBoard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i
                                        class="fa-solid fa-money-bill-wave fa-xl"></i> Expenses</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline  text-dark">&nbsp
                                            &nbsp &nbsp <i class="fa-solid fa-cash-register fa-lg"></i> Add
                                            Expenes</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">&nbsp
                                            &nbsp &nbsp <i class="fa-solid fa-list-check fa-xl"></i> Manage
                                            Expenses</span> </a>
                                </li>
                            </ul>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i
                                        class="fa-regular fa-calendar-days fa-xl"></i> Expense Report</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">&nbsp
                                            &nbsp &nbsp <i class="fa-sharp fa-solid fa-sun fa-xl"></i> DayWise
                                            Expenses</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">&nbsp
                                            &nbsp &nbsp <i class="fa-sharp fa-solid fa-sun fa-xl"></i> Monthly
                                            Expenses</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i
                                        class="fa-solid fa-user fa-xl"></i> Profile</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i
                                        class="fa-solid fa-lock fa-xl"></i> Change Password</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i
                                        class="fa-solid fa-right-from-bracket fa-xl"></i> Logout</span></a>
                        </li>
                    </ul>

                </div>
            </div>
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