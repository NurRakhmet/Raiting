
<?php 
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$site = filter_var(trim($_POST['site']),
	FILTER_SANITIZE_STRING);
	$comm = filter_var(trim($_POST['comm']),
	FILTER_SANITIZE_STRING);

	if(mb_strlen($name)<5){
		echo "недопустимая длина имени";
		exit();
	}
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	echo "E-mail адрес '$email' указан верно.\n <br>";
	}else{
    	echo "E-mail адрес '$email' указан неверно.\n";
    	exit();
	}
	if(mb_strlen($site)<5){
		echo "недопустимая длина сайта";
		exit();
	}else if(mb_strlen($comm)<50){
		echo "недопустимая длина комментария";
		exit();
	}




	$mysql = new mysqli("localhost","root","","comment");
	$mysql->query("INSERT INTO `tabcom` (`name`,`email`,`site`,`comm`) 
	VALUES('$name','$email','$site','$comm')");
	echo 'форма отправлена!';
	$mysql->close();


?>
