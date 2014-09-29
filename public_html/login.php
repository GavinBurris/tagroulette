<?php
include("header.php");
?>
<body>
	<link rel="stylesheet" type="text/css" href="./style/login.css">
	<h1 class="logo">TagRoulette<sup>Beta</sup></h1>
	<div id="login">
		<form action="../login_check.php" method="POST">
			<input type="text" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" value="Sign In">
		</form>
		<a class="forgot_password" href="#">Forgot Password</a>
		<h3>Not a member?</h3>
		<a class="sign_up" href="sign_up.php">Sign up</a>
	</div>
<?php
include("footer.php");
?>
