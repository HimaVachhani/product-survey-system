<?php
	include_once 'classes/Admin.php';
	$objAdmin = new Admin();
	if(isset($_GET['AdminID'])) {
		$objAdmin -> update($_GET);
	}
	else
	{
		$objAdmin -> insert($_GET);
	}
	/*print_r($_GET);*/
	header('location: ListAdmin.php');

?>