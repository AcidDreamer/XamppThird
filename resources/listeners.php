<?php 
	#check or just redirect
	if(isset($_POST['username']) && isset($_POST['password'])){
		$checker0 = 0;
		$data = $_POST['username'] ."," .$_POST['password'];
		login($data);
	}	
	if(isset($_REQUEST['logout'])){
		logout();
	}
	if(isset($_REQUEST['brands'])){
		brands();
	}
	if(isset($_REQUEST['mainMenu'])){
		mainMenu();
	}
	if(isset($_REQUEST['userArea'])){
		userArea();
	}

 ?>