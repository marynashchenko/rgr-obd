<?php
require_once '../conf/connect.php';


$id = $_GET['id'];

mysqli_query ($con, query: "DELETE FROM `orders` WHERE `orders`.`id` = $id");

header("Location: /lab4/orders.php");