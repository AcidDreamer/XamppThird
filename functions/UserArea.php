<?php 
	function getApp($username){
			#curl handler explained in functions/Brands.php,note that this is a GET request
			$url = "http://localhost:8080/project/applications/for_user/";
			#create a second  url with the the default + the username
			$url2 = $url . $username;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_URL, $url2);
			$server_output = curl_exec($ch);
			#create an xml element form the server output
			$Application = new SimpleXMLElement($server_output);
			#if the Elements of the xml are not empty
			if($Application->app_code != 0){
				#echo the whole xml formatted
				echo "<div class='application'>";
				echo "<h3>Here you can see your current loan</h3>";
				echo "Application Code :" .$Application->app_code . "<br>";
				echo "Amount :" .$Application->amount . "<br>";
				echo "Amount Repaid :" . "0" . "<br>";
				echo "Buy Type :" .$Application->buy_type . "<br>";
				echo "Username :" .$Application->username . "<br>";
				echo "Comments :" .$Application->tekmiriwsi . "<br><br><br>";
				echo "</div>";
				#create space for a new loan application form
				createNewAppLayout();
			}else{
				#inform the user he has no loans pending
				echo "<div class='application'>";
				echo "No loan found for this user";
				echo "</div>";
				#create space for a new loan application form
				createNewAppLayout();
			}
		}

	function createNewApp($data){
			#curl handler explained in functions/Brands.php,note that this is a POST request
			$url =  "http://localhost:8080/project/applications/createApplication";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	                        'Content-Type: text/plain',
	        ));
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec($ch);
			$server_output = str_ireplace("'", "\'", $server_output);
			curl_close ($ch);
			echo "<script type='text/javascript'>alert('$server_output');</script>";
			echo "<script>setTimeout(\"location.href = 'http://localhost/index.php';\",1000);</script>";
		}
		
	#echo a new Loan Application form
	function createNewAppLayout(){
		echo "
			<div class ='newApplication'>
			<h3>Here you can create a new loan application</h3>
				<form method='post'>
					Amount Requested: <input type='text' value=''
						placeholder='Amount' name='amount' /><br> 
					Repay Time: <input type='text' value=''
						placeholder='Repay Time' name='repayTime' />
					Buy	Type: <select name='buy_type'><option
							value=1>Used</option>
						<option value=2>Brand New</option></select><br><br> 
					Drivers License: <input type='text' value=''
						placeholder='Drivers License' name='drivers_licence' /> 
					Taxes : <input
						type='text' value='' placeholder='Taxes' name='taxes' /> 
					<input type='submit' class='newApp button' name='newApp' value='Submit'>
					</form>
			</div>";
	}
?>
