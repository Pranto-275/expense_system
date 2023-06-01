<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light sidebar_bgcolor">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline text-dark">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                class="rounded-circle">
                            <span style="padding: 10px;font-weight: bold;"><?php echo $user_name;?></span> <br> <span style="font-size: 15px;"> <span

                                    style="color: #26de81;"><i class="fa-solid fa-circle fa-xs"></i></span>
                                Online</span></span>

                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link align-middle px-0">
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
                                    <a href="add_expense.php" class="nav-link px-0"> <span class="d-none d-sm-inline  text-dark">&nbsp
                                            &nbsp &nbsp <i class="fa-solid fa-cash-register fa-lg"></i> Add
                                            Expenes</span> </a>
                                </li>
                                <li>
                                    <a href="manage_expense.php" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">&nbsp
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
                                    <a href="day_wise_expense_search.php" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">&nbsp
                                            &nbsp &nbsp <i class="fa-sharp fa-solid fa-sun fa-xl"></i> DayWise
                                            Expenses</span></a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="profile.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i
                                        class="fa-solid fa-user fa-xl"></i> Profile</span></a>
                        </li>
<!--                        <li>-->
<!--                            <a href="change_password.php" class="nav-link px-0 align-middle">-->
<!--                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i-->
<!--                                        class="fa-solid fa-lock fa-xl"></i> Change Password</span></a>-->
<!--                        </li>-->
                        <li>
                            <a href="logout.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-dark"><i
                                        class="fa-solid fa-right-from-bracket fa-xl"></i> Logout</span></a>
                        </li>
                    </ul>

                </div>
            </div>