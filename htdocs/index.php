<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		$title = "Main";
		require_once "blocks/head.php";
	?>
</head>

<body>
	<?php
		require_once "blocks/header.php";
		$news = getData('tournaments');
	?>
	<div class="content">
	<?php for ($i=0; $i < 3; $i++) { 
			echo "<div class='tour'>
				<div class='text'>
					<h4><b>".$news[$i]['name']."</b></h4>
					<p>".$news[$i]['info']."</p>
				</div>
				<form action='' method='POST'>
					<button class='btn btn-success'>Подать заявку</button>
				</form>
			</div>";
		}?>
	</div>
	<?php
		require_once "blocks/footer.php";
	?>
</body>
</html>