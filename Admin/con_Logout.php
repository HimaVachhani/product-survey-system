<?php
	session_start();
	unset($_SESSION['AdminName']);
	header("Location: login.php");
	die();
?>