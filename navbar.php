<?php
global $connection;
include 'connection.php';


if (!$_SESSION['full_name']){
    header('Location:login.php');
}

?>

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