<?php

	include_once 'classes/Admin.php';
	$objAdmin = new Admin();
	$objAdmin -> delete($_GET);
	header('location: ListAdmin.php');

?>