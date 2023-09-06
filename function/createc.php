<?php
require_once '../conf/connect.php';
$id;
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($con,"INSERT INTO `customer` (`id`, `name`, `email`, `phone`) VALUES (NULL, '$name', '$email', '$phone') ");

header("Location: /lab4/customer.php");