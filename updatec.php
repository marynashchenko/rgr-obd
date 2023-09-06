<?php 
	require_once 'conf/connect.php';
	$id = $_GET['id'];
	$customer = mysqli_query($con, query:"SELECT * FROM `customer` WHERE `id` =  '$id'");
	$customer = mysqli_fetch_assoc($customer);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>   
	<meta charset="utf-8">
	<title>Замовники</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		p{	
			display: inline-block
		}
	</style>
</head> 
<body>
	<h3>Змінити інформацію про замовника</h3>
	<form action="function/updatec.php" method="post">
		<input type="hidden" name="id" value="<?= $customer['id']?>">
		<p>Ім'я</p>
		<input type="text" name="name" value="<?= $customer['name']?>">
		<p>Email</p>
		<input type="text" name="email" value="<?= $customer['email']?>">
		<p>Номер телефону</p>
		<input type="number" name="phone" value="<?= $customer['phone']?>">
		<br></br>
		<button type="submit">Змінити</button>
	</form>
</body>