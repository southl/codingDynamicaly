<?php 
	define("TITLE","Menu | menu page");
	include('includes/header.php');
?>

<div id="menu-items">
<h1>Our Deliicos menu</h1>
<p>some text about  menu</p>
<p><em>LOOK HERE</em></p>

<hr>
<ul>
		<?php 
				foreach ($menuItems as $dish => $item) {?>

				<li><a href="dish.php?item=<?php echo $dish;?>"><?php echo $item['title'];?></a><sup>$</sup><?php echo $item['price']; ?></li>

<?php } ?>
</ul>
</div>

<?php 
	include('includes/footer.php');
?>