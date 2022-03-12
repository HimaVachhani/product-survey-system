<?php
	include_once 'classes/Product.php';
	$objProduct = new Product();
	if(isset($_POST['ProductID'])) {
		$objProduct -> update($_POST);
	}
	else
	{
		$objProduct -> insert($_POST);
	}
	//print_r($_POST);
	header('location: ListProduct.php');

?>