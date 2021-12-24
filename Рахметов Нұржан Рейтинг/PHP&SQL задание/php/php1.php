<?php  
$mysql = new mysqli("localhost","root","","username");
$mysql ->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT * FROM `namesurname`");
if($result ->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<b>id:</b> ".$row['id'].'<br>';
		echo "name: ".$row['name'].'<br>';
		echo "surname: ".$row['surname'].'<br>','<hr>';
	}
}
$mysql->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

</style>
<body>
	
</body>
</html>		