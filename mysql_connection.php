<?php
@ $db = new mysqli("localhost", "USERNAME", "PASSWORD", "albany");
if (mysqli_connect_errno()) {
	$error = "Error could not connect to database please try agian.";
	header("location: ./public_html/sign_up.php?error=$error");
}
?>
