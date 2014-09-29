<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
	// Connect to mysql
	require_once("./mysql_connection.php");
	$email = $_POST['email'];		
	$password = md5($_POST['password']);
	$query = "SELECT * FROM users WHERE email = \"$email\" AND password = \"$password\"";
	$result = $db->query($query);
	$status = $result->num_rows;
	if ($status == "1") {
		$row = $result->fetch_assoc();
		session_start();
		$_SESSION['userid'] = $row['userid'];
		header("location: ./public_html/home.php");
	} else {
		header("location: ./public_html/login.php?error=incorrect_username or password");
	}
}
?>
