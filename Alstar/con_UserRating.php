<?php
	include_once '../admin/classes/ProductWiseReview.php';
	$objProductWiseReview = new ProductWiseReview();
	$resultProductWiseReview=$objProductWiseReview->checkforupdate($_GET);
	$rowProductWiseReview=$resultProductWiseReview[0];
	if (isset($rowProductWiseReview['ProductWiseReviewID'])) {
		$objProductWiseReview -> updateuser($_GET);
	}
	else{
		$objProductWiseReview -> insert($_GET);
	}
	//print_r($_GET);
	header('location: index.php?submit=1#review');

?>