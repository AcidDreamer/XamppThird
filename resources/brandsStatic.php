<?php
	#turn output buffering on
    ob_start();
	echo "
		<h3>Audi</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. </p>
		<form method='post' style='font-size:20px;margin: 0; padding: 0;'>
		  Subscribe! 
		  Email:<input type='text' name='email' placeholder='E-mail'><br>
		  <input type='hidden' name='brand' value='Audi'>
		  <input type='submit' name = 'submit' class='button' value='Submit' style='display:inline'>
		</form>

		<h3>Ferrari</h3>
		<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. </p>
		<form method='post' style='font-size:20px'>
		  Subscribe! 
		  Email:<input type='text' name='email' placeholder='E-mail'><br>
		  <input type='hidden' name='brand' value='Ferrari'>
		  <input type='submit' name = 'submit' class='button' value='Submit' style='display:inline'>
		</form>

		<h3>Volvo</h3>
		<p>Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. </p>
		<form method='post' style='font-size:20px'>
		  Subscribe! 
		  Email:<input type='text' name='email' placeholder='E-mail'><br>
		  <input type='hidden' name='brand' value='Volvo'>
		  <input type='submit' name = 'submit'  class='button' value='Submit' style='display:inline'>
		</form>

		<h3>Alfa Romeo</h3>
		<p>Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. </p>
		<form method='post' style='font-size:20px'>
		  Subscribe! 
		  Email:<input type='text' name='email' placeholder='E-mail'><br>
		  <input type='hidden' name='brand' value='Alfa Romeo'>
		  <input type='submit' name = 'submit'  class='button' value='Submit' style='display:inline'>
		</form>

		<h3>Renault</h3>
		<p>Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. </p>
		<form method='post' style='font-size:20px'>
		  Subscribe! 
		  Email:<input type='text' name='email' placeholder='E-mail'><br>
		  <input type='hidden' name='brand' value='Renault'>
		  <input type='submit' name = 'submit' class='button' value='Submit' style='display:inline'>
		</form>

		<h3>Tesla</h3>
		<p>Aenean laoreet. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales. Aenean lectus elit, fermentum non, convallis id, sagittis at, neque. Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollis lectus. Vivamus consectetuer risus et tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
		<form method='post' style='font-size:20px'>
		  Subscribe! 
		  Email:<input type='text' name='email' placeholder='E-mail'><br>
		  <input type='hidden' name='brand' value='Tesla'>
		  <input type='submit' name = 'submit'  class='button' value='Submit' style='display:inline'>
		</form>

		";

?>