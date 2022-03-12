<?php

	include_once 'classes/ProductWiseReview.php';
	$objProductWiseReview = new ProductWiseReview();
	$objProductWiseReview -> delete($_GET);
	header('location: ListProductWiseReview.php');

?>