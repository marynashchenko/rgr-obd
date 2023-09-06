<?php
require_once '../conf/connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($con, query:"UPDATE `customer` SET `name` = '$name', `email` = '$email', `phone` = '$phone' WHERE `customer`.`id` = '$id' ");

header("Location: /lab4/customer.php");