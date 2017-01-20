<?php 
	#curl handler explained in functions/Brands.php,note that this is a POST request
	function login($credentials){
		$url =  "http://localhost:8080/project/user/login";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/project/user/login");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: text/plain',
        ));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $credentials);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec($ch);
		curl_close ($ch);
		#create an xml element according to the response
		$xml = new SimpleXMLElement($server_output);
		#if the credentials are not wrong
		if(strcmp($xml->username,"wrong")){
			#create cookies for the user
			$cookieName = "user";
			$cookieValue = $_POST['username'];
			#this cookie lasts for 7 days
			setcookie($cookieName, $cookieValue, time() + (86400 * 30 * 7), "/"); 
			#redirect and die
			header("Location: http://localhost/index.php");
			die();
		}else{
			#inform the user that the credentials he provided are wrong
			echo "
				<script>
					alert('Wrong username and password try again');
				</script>";
		}
	}

	function logout(){
		#destroy the cookie and redirect
		$cookieName = "user";
		setcookie($cookieName, "", time() - 3600);
		header("Location: http://localhost/index.php");
		die();
	}

	function mainMenu(){
		#redirect to main menu
		header("Location: http://localhost/index.php");
		die();
	}

	function brands(){
		#redirect to brands
		header("Location: http://localhost/brands.php");
		die();
	}

	#only if there is a valid user cookie -> redirect to User Area
	function userArea(){
		if(isset($_COOKIE['user'])){
			header("Location: http://localhost/userArea.php");
			die();
		}else{
			#else inform and redirect to index
			echo "<script>alert('You must sign in first to enter user area!');</script>";
			echo "<script>setTimeout(\"location.href = 'http://localhost/index.php';\",1000);</script>";
			die();
		}
	}
 ?>