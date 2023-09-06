<?php
require_once '../conf/connect.php';
$id;
$name = $_POST['name'];
$amount = $_POST['amount'];

mysqli_query($con,"INSERT INTO `materials` (`id`, `name`, `amount`) VALUES (NULL, '$name', '$amount') ");

header("Location: /lab4/materials.php");