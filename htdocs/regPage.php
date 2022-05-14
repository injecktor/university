<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		$title = "Register";
		require_once "blocks/head.php";
	?>
</head>

<body>
	<?php
		require_once "blocks/header.php";
	?>
	<div class="container mt-5">
		<form action="emptyPages/checkReg.php" method="post">
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
			<input type="text" class="form-control" name="login" id="login" placeholder="Придумайте логин"><br>
			<input type="password" class="form-control" name="pass" id="pass" placeholder="Придумайте пароль"><br>
			<button class="btn btn-success">Зарегистрироваться</button>
		</form>
	</div>
	<?php
		require_once "blocks/footer.php";
	?>
</body>
</html>