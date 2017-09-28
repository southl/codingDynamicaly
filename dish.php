<?php 	
	define("TITLE","Menu item | Franklin`s dining");

	include('includes/header.php');
	if(isset($_GET['item'])){
		$menuItem = $_GET['item'];
		$dish = $menuItems[$menuItem];
	}
?>