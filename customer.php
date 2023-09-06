<?php

require_once 'conf/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>   
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Замовники</title>
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
			<th>Ім'я</th>
			<th>Email</th>
			<th>Номер телефону</th>
		</tr>
		<pre>
			<?php
			$customer = mysqli_query($con, query:"SELECT * FROM `customer` ");
			$customer = mysqli_fetch_all($customer);
			foreach ($customer as $customer) {
				?>
				<tr>
					<td><?= $customer[0] ?></td>
					<td><?= $customer[1] ?></td>
					<td><?= $customer[2] ?></td>
					<td><?= $customer[3] ?></td>
					<td><a href="updatec.php?id=<?= $customer[0] ?>">Update</a></td>
					<td><a style="color: red;" href="function/deletec.php?id=<?= $customer[0] ?>">Delete</a></td>
				</tr>
				
				<?php
			}

			?>
		</pre>
	</table>

	<h3>Додати замовника</h3>
	<form action="function/createc.php" method="post">
		<p>Ім'я</p>
		<input type="text" name="name">
		<p>Email</p>
		<input type="text" name="email">
		<p>Номер телефону</p>
		<input type="number" name="phone">
		<br></br>
		<button type="submit">Додати</button>
	</form>
</body>
</html>