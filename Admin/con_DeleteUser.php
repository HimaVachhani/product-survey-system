<?php

	include_once 'classes/User.php';
	$objUser = new User();
	$objUser -> delete($_GET);
	header('location: ListUser.php');

?>