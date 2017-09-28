php 
	define("TITLE","multArr sample");

	include('includes/header.php');
?>

	<?php 
			foreach($myArr as $key => $arrayMember){?>

			<p>element`s name is - <?php echo $arrayMember['name']."<br>"; ?> element`s type is - <?php echo $arrayMember['type']."<br>"; ?> </p>
				
			<?php } ?>
			





<?php 
	include('includes/footer.php');
?>
