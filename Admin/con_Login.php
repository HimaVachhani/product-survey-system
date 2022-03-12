<?php
	session_start();
	include_once 'classes/Admin.php';
	$objAdmin = new Admin();
	if($row = $objAdmin->checkLogin($_POST)){
		$_SESSION['AdminName'] = $_POST['AdminName'];
		$_SESSION['AdminName'] = $row['AdminName'];
		header("Location: Dashbord.php");
	}
	else{
		header("Location: Login.php");
	}

?>