<?php
require_once '../conf/connect.php';

$id = $_GET['id'];

mysqli_query ($con, query: "DELETE FROM `customer` WHERE `customer`.`id` = $id");

header("Location: /lab4/customer.php");