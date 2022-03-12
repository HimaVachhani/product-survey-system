<?php
	session_start();
	include_once '../admin/classes/User.php';
	$objUser = new User();
	if($row = $objUser->checkLogin($_POST)){
		$_SESSION['UserName'] = $_POST['UserName'];
		$_SESSION['UserID'] = $row['UserID'];
		header('Location: index.php');
	}
	else{
		header("Location: UserLogin.php?login=0");
	}

?>