<?php
	include_once 'classes/ProductWiseReview.php';
	$objProductWiseReview = new ProductWiseReview();
	if(isset($_GET['ProductWiseReviewID'])) {
		$objProductWiseReview -> update($_GET);
	}
	else
	{
		$objProductWiseReview -> insert($_GET);
	}
	/*print_r($_GET);*/
	header('location: ListProductWiseReview.php');

?>