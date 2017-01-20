<?php
		#if there is not a cookie for user
		#echo the appropriate header
		if(!isset($_COOKIE['user'])){
			echo "<header>	
					<form method='post' style ='float: right; padding: 5px;'> 
						Login
						<input type= 'password' placeholder='Username' name='username'/>
						<input type= 'password' placeholder='Password' name='password'/>
						<input type='submit' value='Login' class='submit button'/>
				   	</form>
				   	<form  method='post' style ='float: left; padding: 5px;'>
						<input type=submit name='mainMenu' class='mainMenu button' value = 'Main Menu'/>
					</form>
					<form  method='post' style ='float: left; padding: 5px;'>
						<input type=submit name='brands' class='brands button' value = 'Brands'/>
					</form>
					<form  method='post' style ='float: left; padding: 5px;'>
						<input type=submit name='userArea' class='userArea button' value = 'User Area'/>
					</form>

				   </header>";
		#else echo appropriate header
		}else{
			echo "<header> 
					<form  method='post' style ='float: right; padding: 5px;'>
						<input type=submit name='logout' class='logout button' value = 'Log-out'/>
					</form>
				   	<form  method='post' style ='float: left; padding: 5px;'>
						<input type=submit name='mainMenu' class='mainMenu button' value = 'Home'/>
					</form>
					<form  method='post' style ='float: left; padding: 5px;'>
						<input type=submit name='brands' class='brands button' value = 'Brands'/>
					</form>
					<form  method='post' style ='float: left; padding: 5px;'>
						<input type=submit name='userArea' class='userArea button' value = 'User Area'/>
					</form>
					<div style= 'font-family:Montserrat;float:right;font-size:20px;margin-top:0.5%'>Hello " . $_COOKIE['user'] . "</div>
					</header>";
		}
	echo "<style>	
		header{
			color: white;
			background-color: #655fe8;
			overflow: hidden;
			padding: 1%;
		}
		header .button {
			width: 100px;
			background: #b5b2a0;
			box-sizing: border-box;
			border-radius: 5px;
			border: 1px solid #7c8c7d;
			color:black;
			font-weight: bold;
			text-transform: uppercase;
			font-size: 12px;
			font-family: Montserrat;
			outline: none;
			cursor: pointer;
			height: 28px;
			display:inline;
		}
		</style>";
?>