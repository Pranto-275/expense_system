<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'expense_system';

$connection = mysqli_connect($hostname,$username,$password,$dbname);

if (!$connection){
    die("Connection error".mysqli_connect_error());
}