<?php

namespace Image_Rating\views;

require_once "View.php";

class SigninView extends View{

	public function render($data){
		?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>Sign In</title>
			</head>
			<body>

			<h1 align="center">Sign In</h1>

			<form id="signin" action="validate.php" method="post" align="center">
				<fieldset>
				
					<input type="hidden" name="submitted" id="submitted" value="1"/>
					
					<label for="username" >UserName*:</label>
					<input type="text" name="username" id="username" maxlength="50" /><br></br>
					 
					<label for="password" >Password*:</label>
					<input type="password" name="password" id="password" maxlength="50" /><br></br>
					<input type="submit" name="Submit" value="Submit" />
					 
				</fieldset>
			</form>

			</body>
		</html>
		<?php
	}

}
