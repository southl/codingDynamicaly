<?php
$_GET['item'] = 'a';
print_r($_GET);
echo"<br>"; 
	if(isset($_GET['item'])){
		echo"<br>";
		echo $_GET['item'];
		
	} else {echo 'no';}


?>