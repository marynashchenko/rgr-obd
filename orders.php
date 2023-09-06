<?php

require_once 'conf/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>   
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Замовлення</title>
	<style>
		th,td{
			padding: 10px;
		}
		th{
			background: greenyellow;
		}
		td{
			background: lightblue;
		}
		p{
			display: inline-block
		}
	</style>
</head> 
<body>
	<na><a href="index.php">Назад</a></na>
	<table>
		<tr>
			<th>ID</th>
			<th>ID замовнка</th>
			<th>Дата замовлення</th>
			<th>Дедлайн</th>
			<th>Ціна</th>
			<th>Тип робіт</th>
			<th>Адреса</th>
			<th>ID матеріалу</th>
		</tr>
		<pre>
			<?php
			$orders = mysqli_query($con, query:"SELECT * FROM `orders` ");
			$orders = mysqli_fetch_all($orders);
			foreach ($orders as $orders) {
				?>
				<tr>
					<td><?= $orders[0] ?></td>
					<td><?= $orders[1] ?></td>
					<td><?= $orders[2] ?></td>
					<td><?= $orders[3] ?></td>
					<td><?= $orders[4] ?></td>
					<td><?= $orders[5] ?></td>
					<td><?= $orders[6] ?></td>
					<td><?= $orders[7] ?></td>
					<td><a href="updateo.php?id=<?= $orders[0] ?>">Update</a></td>
					<td><a style="color: red;" href="function/deleteo.php?id=<?= $orders[0] ?>">Delete</a></td>
				</tr>
				
				<?php
			}

			?>
		</pre>
	</table>

	<h3>Додати замовлення</h3>
	<ul class="form">
	<form action="function/createo.php" method="post">
		<p>ID замовнка</p>
		<input type="number" name="customer_id">
		<p>Дата замовлення</p>
		<input type="date" name="order_date">
		<p>Дедлайн</p>
		<input type="date" name="deadline">
		<p>Ціна</p>
		<input type="number" name="price">
		<p>Тип робіт</p>
		<input type="text" name="typeOfWork">
		<p>Адреса</p>
		<input type="text" name="address">
		<p>ID матеріалу</p>
		<input type="number" name="materials_id">
		<br></br>
		<button type="submit">Додати</button>
	</form>
	</ul>
</body>
</html>