<?php
require_once '../conf/connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$amount = $_POST['amount'];

mysqli_query($con, query:"UPDATE `materials` SET `name` = '$name', `amount` = '$amount' WHERE `materials`.`id` = '$id' ");

header("Location: /lab4/materials.php");