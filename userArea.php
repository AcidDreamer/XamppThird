<!DOCTYPE html>
<html>
<head>
	<title>Someone's Bank-User Area</title>
	<?php 
		include 'resources/navigation.php';
		include 'css/UserArea.php';
		include 'functions/UserArea.php';
		include 'resources/header.php';
		include 'resources/listeners.php';
	 ?>
</head>
<body>
	<?php
		#get users current loans or loan applications , if any exist
		getApp($_COOKIE['user']);
		#check if the user submited a new application
		if(isset($_REQUEST['newApp'])){
			#check if the fields are empty
			if(strcmp($_REQUEST['amount'],"") && strcmp($_REQUEST['repayTime'],"") && 
				strcmp($_REQUEST['drivers_licence'],"") && 	strcmp($_REQUEST['taxes'],"")){
				if(is_numeric($_REQUEST['amount']) && is_numeric($_REQUEST['repayTime']) && is_numeric($_REQUEST['taxes'])){
					#set buy type according to value
					if($_REQUEST['buy_type']==1)
						$buy_type = "Used";
					else
						$buy_type = "Brand New";
					#create the data to send
					$data = $_REQUEST['amount'] . "," . $_REQUEST['repayTime'] . ",". $buy_type . "," .
					$_REQUEST['drivers_licence'] . "," . $_REQUEST['taxes'] . "," . $_COOKIE['user'];
					#send the data
					createNewApp($data);
				}else{
					#inform the user that the field he provided are not numeric whilst they should
					echo "<script>alert('The fields amount,repay time and taxes must be numeric.')</script>";
				}
			}else{
				#inform the user that he hasn't filled all the fields
				echo "<script>alert('Please be sure you have filled all the fields.')</script>";
			}
		}
	?>

</body>
<footer>
</footer>
</html>