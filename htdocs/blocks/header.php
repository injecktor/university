<header>
	<div class="logo">
		<a href="/"><img src="../img/logo.png" alt="Logo"></a>
	</div>
	<?php if (!isset($_COOKIE['auth'])):?>
		<div class="act">
			<a href="authPage.php"><img src="../img/logIn.png" alt="Log In"></a>
			<a href="regPage.php"><img src="../img/signUp.png" alt="Sign Up"></a>
		</div>
	<?php else:?>
		<div class="act">
			<a href="emptyPages/logOut.php"><img src="../img/logout.png" alt="Log Out"></a>
			<a href="profile.php"><img src="../img/profile.png" alt="Profile"></a>
		</div>
	<?php endif?>
</header>