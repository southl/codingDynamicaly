<?php 
	define("TITLE","Menu Item |Menu Dinin");

	include('includes/header.php');

	if(isset($_GET['item'])){
		$menuItem = $_GET['item'];

		$dish = $menuItems[$menuItem];
	}
?>