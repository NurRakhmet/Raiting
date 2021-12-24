<?php 
	$dsn = 'mysql:host=localhost;dbname=to-do-list';
	$pdo = new PDO($dsn, 'root', '');
 ?>
<?php 

	$title = $_POST['title'];
	require 'db.php';

        $sql = 'INSERT INTO list(title) VALUES(:title)';

	$query = $pdo->prepare($sql);
  
	$query->execute(['title' => $title]);

	header('Location: index.php');

?>
<?php 

//Подключаем базу данных из файла db.php
require 'db.php';

//Переменная
$id = $_GET['id'];

//Удаляем элемент из таблицы list с определенным id
  $sql = 'DELETE FROM `list` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

//Перемещаемся в index.php
  header('Location: index.php');

 ?>
https://www.pvsm.ru/php-2/345318
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>TO-DO List</title>
</head>
<style>
	body {
	padding: 40px;
}

input[type="text"] {
	width: 330px;
	height: 40px;
	border: 1px solid #c4c4c4;
	border-radius: 5px 0 0 5px;
	border-right: none;
	padding-left: 10px;
	padding-right: 10px;
}

input[type="submit"] {
	width: 80px;
	height: 44px;
	background: #3F6BDE;
	border: none; 
	position: absolute;
	border: 1px solid #c4c4c4;
	border-radius: 0 5px 5px 0;
}

ul {
	list-style: none;
	padding-left: 0;
}

li {
	width: 400px;
	height: auto;
	border: 2px solid gray;
	padding-top: 20px;
	list-style: none;
    padding: 15px;
    margin-bottom: 10px;
    background: #fcfcfc;
    border: 1px solid silver;
    border-radius: 5px;	
}

a {
    float: right;
    text-decoration: none;
    color: red;
}

https://www.pvsm.ru/php-2/345318
</style>
<body>
	<form action="add.php" method="POST">
		<input type="text" name="title" required>
		<input type="submit" value="Add">
	</form>
	
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

