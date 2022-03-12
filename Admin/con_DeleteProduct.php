<?php

	include_once 'classes/Product.php';
	$objProduct = new Product();
	$objProduct -> delete($_GET);
	header('location: ListProduct.php');

?>