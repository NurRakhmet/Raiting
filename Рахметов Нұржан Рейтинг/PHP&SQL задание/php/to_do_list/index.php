<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>List</title>
</head>
<body>
	<h2>СПИСОК ДЕЛ</h2>
	<form action="add.php" method="POST">
		<input type="text" name="title" required>
		<input type="submit" value="Add">
	</form>
	<h3>список дейсвие</h3>
	<ul>
		<?php

		require 'db.php';

		$query = $pdo->query('SELECT * FROM `list` ORDER BY `id` DESC');

		while($row = $query->fetch(PDO::FETCH_OBJ)) {
				echo '<div><li>'. $row->title .' <a href="delete.php?id='.$row->id.'" id="card-link-click">X</a></li>' . ' </div>';

			}
		 ?>
	</ul>
</body>
</html>