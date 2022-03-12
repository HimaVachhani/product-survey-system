<?php

	include_once 'classes/City.php';
	$objCity = new City();
	$objCity -> delete($_GET);
	header('location: ListCity.php');

?>