<?php 
	require_once 'conf/connect.php';
	$id = $_GET['id'];
	$order = mysqli_query($con, query:"SELECT * FROM `orders` WHERE `id` =  '$id'");
	$order = mysqli_fetch_assoc($order);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>   
	<meta charset="utf-8">
	<title>Замовлення</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		p{	
			display: inline-block
		}
	</style>
</head> 
<body>
	<h3>Змінити інформацію про замовлення</h3>
	<form action="function/updateo.php" method="post">
		<input type="hidden" name="id" value="<?= $order['id']?>">
		<p>ID замовнка</p>
		<input type="number" name="customer_id" value="<?= $order['customer_id']?>">
		<p>Дата замовлення</p>
		<input type="date" name="order_date" value="<?= $order['order_date']?>">
		<p>Дедлайн</p>
		<input type="date" name="deadline" value="<?= $order['deadline']?>">
		<p>Ціна</p>
		<input type="number" name="price" value="<?= $order['price']?>">
		<p>Тип робіт</p>
		<input type="text" name="typeOfWork" value="<?= $order['typeOfWork']?>">
		<p>Адреса</p>
		<input type="text" name="address" value="<?= $order['address']?>">
		<p>ID матеріалу</p>
		<input type="number" name="materials_id" value="<?= $order['materials_id']?>">
		<br></br>
		<button type="submit">Змінити</button>
	</form>
</body>
</html>