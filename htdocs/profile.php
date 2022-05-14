<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		$title = "Profile";
		require_once "blocks/head.php";
	?>
</head>

<body>
	<?php
		require_once "blocks/header.php";
	?>
	<div class="container2 mt-5">
		<span>Id: <?php print_r($_COOKIE['id'])?></span><br>
		<span>Name: <?php print_r($_COOKIE['name'])?></span><br>
	</div>
	<?php
		require_once "blocks/footer.php";
	?>
</body>
</html>