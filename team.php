<?php
	define("TITLE","Team | Franklins dinner");
	include('includes/header.php');
?>
<div id="team-members" class="cf">

	<h1>Our Franklin`s team</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat massa et dignissim ullamcorper. Proin dignissim sit amet lectus sed consectetur. Sed nulla ex, ornare fringilla nunc ac, euismod maximus ante. Fusce mattis mi id arcu molestie, id accumsan felis pellentesque. Duis id libero eget tortor viverra pulvinar ut commodo orci. Mauris ut pretium libero. 
	</p>
	<hr>

	<?php 
		foreach($teamMembers as $member){
	 ?>
			<div class="member">
				<img src="img/<?php echo $member["img"];?>.png" alt="<?php echo $member["name"];?>">
				<h2><?php echo $member["name"];?></h2>
				<p><?php echo $member["bio"];?></p>
			</div><!--member-->
	 <?php
	 	}
	 ?>


	
</div><!--team-members-->
<hr>

<?php 
	include('includes/footer.php');
?>