<?php
include("header.php");
?>
<body>
	<link rel="stylesheet" type="text/css" href="./style/login.css">
	<h1 class="logo">TagRoulette<sup>Beta</sup></h1>
	<div id="login">
		<form action="../new_user.php" method="POST">
			<input type="text" name="first_name" placeholder="First Name">
			<input type="text" name="last_name" placeholder="Last Name">
			<input type="text" name="email" placeholder="Email">
			<input class="password_sign_up" type="password" name="password" placeholder="Password">
			<label for="male"><input id="male" type="radio" name="sex" value="male">Male</label>
			<label for="female"><input id="female" type="radio" name="sex" value="female">Female</label>
			<input type="submit" value="Sign Up">
		</form>
	</div>
<?php
include("footer.php");
?>
