<?php
	include_once 'classes/City.php';
	$objCity = new City();
	if(isset($_GET['CityID'])) {
		$objCity -> update($_GET);
	}
	else
	{
		$objCity -> insert($_GET);
	}
	/*print_r($_GET);*/
	header('location: ListCity.php');

?>