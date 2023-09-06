<?php

require_once 'conf/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>   
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Матеріали</title>
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
			<th>Назва</th>
			<th>Кількість</th>
		</tr>
		<pre>
			<?php
			$materials = mysqli_query($con, query:"SELECT * FROM `materials` ");
			$materials = mysqli_fetch_all($materials);
			foreach ($materials as $materials) {
				?>
				<tr>
					<td><?= $materials[0] ?></td>
					<td><?= $materials[1] ?></td>
					<td><?= $materials[2] ?></td>
					<td><a href="updatem.php?id=<?= $materials[0] ?>">Update</a></td>
					<td><a style="color: red;" href="function/deletem.php?id=<?= $materials[0] ?>">Delete</a></td>
				</tr>
				
				<?php
			}

			?>
		</pre>
	</table>

	<h3>Додати матеріал</h3>
	<form action="function/createm.php" method="post">
		<p>Назва</p>
		<input type="text" name="name">
		<p>Кількість</p>
		<input type="number" name="amount">
		<br></br>
		<button type="submit">Додати</button>
	</form>
</body>
</html>