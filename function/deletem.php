<?php
require_once '../conf/connect.php';


$id = $_GET['id'];

mysqli_query ($con, query: "DELETE FROM `materials` WHERE `materials`.`id` = $id");

header("Location: /lab4/materials.php");