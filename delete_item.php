<?php
global $connection;
include 'connection.php';

$get_id = $_GET['id'];


$delte_item_query = "DELETE FROM expense WHERE id = '$get_id'";
$delte_item_query_result = mysqli_query($connection,$delte_item_query);

if ($delte_item_query_result == 'true'){
    header("Location:manage_expense.php");
}