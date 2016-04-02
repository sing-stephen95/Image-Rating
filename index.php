<!DOCTYPE html>
<html>

	<head>
		<style>
			.signup{
				position: absolute;
				right: 0px;
				width: 100px
			}
			.signin{
				position: absolute;
				right: 0px;
			}
		</style>
	</head>

	<body>
	<?php

	header("Location: src/models/index.html"); 

	?>
		<h1 align="center">Image Rating</h1>  
		<a href="./signup.php" class="signup">Sign up</a>
		<a href="./signin.php" class="signin">Sign in</a>
		
		<h2>Recent</h2>
		<h2>Popularity</h2>
	</body>

</html>