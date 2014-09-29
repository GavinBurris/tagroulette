<?php
// Connect to mysql.
require_once("mysql_connection.php");
// Vailidate that all information is filled out.
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['sex'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sex = $_POST['sex'];
	$query = "INSERT INTO users (first_name, last_name, email, password, sex) VALUES (\"$first_name\", \"$last_name\", \"$email\", \"$password\", \"$sex\")"; 
	$result = $db->query($query);
	if ($result) {
		mail("$email", "TagRoulette", "Test");
		echo $email;
		header("location: ./public_html/home.php");
	} else {
		header("location: ./public_html/sign_up.php?error=datbase_error");
	}
}
?>
