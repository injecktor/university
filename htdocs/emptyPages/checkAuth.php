<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		$title = "checkPage";
		require_once "../blocks/head.php";
	?>
</head>

<body>
	<?php
		require_once "../blocks/header.php";
	?>
	<?php
		$login = $_POST['login'];
		$pass = md5($_POST['pass']);
		$textErr = checkLogIn($login, $pass);
		if ($textErr != ""){
			print_r($textErr);
			exit;
		}
		$textErr = "Вход успешно выполнен";
		print_r($textErr);
		setcookie('auth', true, time() + 3600, "/");
	?>
	<form action="/">
		<button class="btn btn-success">Нажми сучка</button>
	</form>
	<?php

		require_once "../blocks/footer.php";
	?>
</body>
</html>