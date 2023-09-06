<?php
require_once '../conf/connect.php';
$id;
$customer_id = $_POST['customer_id'];
$order_date = $_POST['order_date'];
$deadline = $_POST['deadline'];
$price = $_POST['price'];
$typeOfWork = $_POST['typeOfWork'];
$address = $_POST['address'];
$materials_id = $_POST['materials_id'];

mysqli_query($con,"INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `deadline`, `price`, `typeOfWork`, `address`, `materials_id`) VALUES (NULL, '$customer_id', '$order_date', '$deadline', '$price', '$typeOfWork', '$address', '$materials_id') ");

header("Location: /lab4/orders.php");