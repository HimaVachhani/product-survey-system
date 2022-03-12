<?php
	session_start();
	include_once 'classes/User.php';
	$objUser = new User();
	$objUser -> delete($_GET);
	unset($_SESSION['UserName']);
	header('location: index.php');

?>