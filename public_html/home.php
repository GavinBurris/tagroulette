<?php
include("header.php");
include("banner.php");
session_start();
if (!isset($_SESSION['userid'])) {
	header("location: ./login.php?error=not_logged_in");
	exit;
} 
require_once("../mysql_connection.php");
$userid = $_SESSION['userid'];
$query = "SELECT first_name, last_name, email FROM users WHERE userid = \"$userid\"";
$result = $db->query($query);
$row = $result->fetch_assoc();
echo $row['first_name'];
?>
