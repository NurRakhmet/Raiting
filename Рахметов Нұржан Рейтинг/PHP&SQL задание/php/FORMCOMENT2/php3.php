<?php 
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$site = filter_var(trim($_POST['site']),
	FILTER_SANITIZE_STRING);
	$comm = filter_var(trim($_POST['comm']),
	FILTER_SANITIZE_STRING);


	$mysql = new mysqli("localhost","root","","comment");
	$mysql->query("INSERT INTO `tabcom` (`name`,`email`,`site`,`comm`) 
	VALUES('$name','$email','$site','$comm')");
	$mysql->close();


?>
		<?php  
	$mysql1 = new mysqli("localhost","root","","comment");
	$mysql1 ->query("SET NAMES 'utf8'");
	$result = $mysql1->query("SELECT * FROM `tabcom`");
	if($result ->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<b>id:</b> ".$row['id']."<br>";
		echo "name: ".$row['name']."<br>";
		echo "email: ".$row['email']."<br>";
		echo "site: ".$row['site']."<br>";
		echo "comm: ".$row['comm']."<br>"."<hr>";
	}
}

?>
