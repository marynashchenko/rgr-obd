<?php
	require_once '../conf/connect.php';
$id = $_POST['id'];
$customer_id = $_POST['customer_id'];
$order_date = $_POST['order_date'];
$deadline = $_POST['deadline'];
$price = $_POST['price'];
$typeOfWork = $_POST['typeOfWork'];
$address = $_POST['address'];
$materials_id = $_POST['materials_id'];

mysqli_query($con, query:"UPDATE `orders` SET `customer_id` = '$customer_id', `order_date` = '$order_date', `deadline` = '$deadline', `price` = '$price', `typeOfWork` = '$typeOfWork', `address` = '$address', `materials_id` = '$materials_id' WHERE `orders`.`id` = '$id' ");

header("Location: /lab4/orders.php");