<?php 
	require_once 'conf/connect.php';
	$id = $_GET['id'];
	$materials = mysqli_query($con, query:"SELECT * FROM `materials` WHERE `id` =  '$id'");
	$materials = mysqli_fetch_assoc($materials);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>   
	<meta charset="utf-8">
	<title>Матеріали</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		p{	
			display: inline-block
		}
	</style>
</head> 
<body>
	<h3>Зміна інформації</h3>
	<form action="function/updatem.php" method="post">
		<input type="hidden" name="id" value="<?= $materials['id']?>">
		<p>Ім'я</p>
		<input type="text" name="name" value="<?= $materials['name']?>">
		<p>Кількість</p>
		<input type="number" name="amount" value="<?= $materials['amount']?>">
		<br></br>
		<button type="submit">Змінити</button>
	</form>
</body>