<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
	</head>
	<body>

	<h1 align="center">Sign Up</h1>

	<form id="signup" action="register.php" method="post" align="center">
		<fieldset>
		
			<input type="hidden" name="submitted" id="submitted" value="1"/>
			<label for="name" >Your Full Name*: </label>
			<input type="text" name="name" id="name" maxlength="50" /><br></br>
			<label for="email" >Email Address*:</label>
			<input type="text" name="email" id="email" maxlength="50" /><br></br>
			 
			<label for="username" >UserName*:</label>
			<input type="text" name="username" id="username" maxlength="50" /><br></br>
			 
			<label for="password" >Password*:</label>
			<input type="password" name="password" id="password" maxlength="50" /><br></br>
			<input type="submit" name="Submit" value="Submit" />
			 
		</fieldset>
	</form>

	</body>
</html>
