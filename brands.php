<!DOCTYPE html>
<html>
<head>
	<title>Someone's Bank-Brands</title>
	<?php 
		include 'resources/navigation.php';
		include 'css/brands.php';
		include 'resources/header.php';
		include 'functions/Brands.php';
		include 'resources/listeners.php';
	 ?>

</head>
<body>
	<?php
		include 'resources/brandsStatic.php';
		#if the user presses the submit button
		if(isset($_REQUEST['submit'])){
			#if he has provided an email
			if(strcmp($_REQUEST['email'],"")){
				#create data and send it
				$data = $_REQUEST['email'] . "," . $_REQUEST['brand'];
				subscribe($data);
			}else{
				#otherwise inform
				echo "<script type='text/javascript'>alert('Please fill in your email!');</script>";
			}
		}
	?>
</body>
</html>