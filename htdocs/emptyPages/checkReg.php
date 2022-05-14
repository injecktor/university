<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		$title = "CheckPage";
		require_once "../blocks/head.php";
		require_once "../functions/functions.php";
	?>
</head>
<body>
	<?php
		require_once "../blocks/header.php";
	?>
	<?php
		$name = $_POST['name'];
		$login = $_POST['login'];
		$pass = $_POST['pass'];
		$textErr = checkReg($name, $login, $pass);
		if ($textErr != ""){
			print_r($textErr);
			exit;
		}
		$pass = md5($pass);
		global $mysqli;
		connectDB();
		$mysqli->query("INSERT INTO `users` (`name`, `login`, `password`) VALUES ('$name', '$login', '$pass')");
		closeDB();
	?>
	<?php
		require_once "../blocks/footer.php";
	?>
	
</body>
</html>
