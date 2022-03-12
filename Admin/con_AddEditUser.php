<?php
	include_once 'classes/User.php';
	$objUser = new User();
	if(isset($_GET['UserID'])) {
		$objUser -> update($_GET);
	}
	else
	{
		$objUser -> insert($_GET);
	}
	/*print_r($_GET);*/
	header('location: ListUser.php');

?>