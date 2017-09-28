<?php 	
	
	define("TITLE","Menu Item |Menu Dinin");

	include('includes/header.php');

	function strip_bad_chars($input){
		$output = preg_replace("/[^a-zA-Z0-0_-]/","",$input);
		return $output;
	}

	if(isset($_GET['item'])){
		$menuItem = strip_bad_chars($_GET['item']);)

		$dish = $menuItems[$menuItem];
	}
?>

<hr>

<div id="dish">
	
	<h1><?php echo $dish['title'];?><span clas="price"><sup>$</sup><?php echo dish['price']; ?></span></h1>
</div>