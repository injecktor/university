<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		$title = "AuthPage";
		require_once "blocks/head.php";
	?>
</head>
<body>
	<?php
		require_once "blocks/header.php";
	?>
	
	<div class="container mt-5">
		<form action="emptyPages/checkAuth.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
			<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
			<button class="btn btn-success">Войти</button>
		</form>
	</div>

	<?php
		require_once "blocks/footer.php";
	?>
</body>
</html>
