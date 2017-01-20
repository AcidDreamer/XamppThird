<?php
	function subscribe($data){
			$url =  "http://localhost:8080/project/user/register";
			#initiate curl
			$ch = curl_init();
			#load the url to the handler
			curl_setopt($ch, CURLOPT_URL, $url);
			#POST request
			curl_setopt($ch, CURLOPT_POST, 1);
			#set content type
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	                        'Content-Type: text/plain',
	        ));
	        #sent $data
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
			#return response
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			#execute and load the response to server_output
			$server_output = curl_exec($ch);
			#replace any ' in the output
			$server_output = str_ireplace("'", "\'", $server_output);
			#close the handler
			curl_close ($ch);
			#echo the output to the user
			echo "<script type='text/javascript'>alert('$server_output');</script>";
			#redirect the user
			echo "<script>setTimeout(\"location.href = 'http://localhost/brands.php';\",1000);</script>";
			die();
	}

?>