<!DOCTYPE html><html>
<head>
	<title>Image Rating</title>
	<link rel="stylesheet" type="text/css" href="../styles/indexStyle.css">


</head>

<body>

	<button type="signIn">Sign In</button>
	<button type="signUp">Sign Up</button>

	<h1>Image Rating</h1>
	
	<?php

	/* The base Model class should have methods for performing the initial connection to the database. */

	class mySqlConnection{
		private $ip
		private $username
		private $pass
		private $db

		public function _construct($args){
			$args[0] = $ip;
			$args[1] = $username;
			$args[2] = $pass;
			$args[3] = $db;
		}

		 function connect(){
			$conn = mysqli_connect($ip, $username, $pass, $db);
		}




	}

	$main = new mySqlConnection('127.0.0.1' , 'root' , '' , '');
	$main->connect();
	
	?>

	<h2>Recent</h2>

	<?php
	
	/*Each image item should consist of a correctly oriented image, beneath which is a caption, the user who uploaded the image, a rating from 1-5, and a date when the image was uploaded. Before the first three image items, should be an h2 tag with Recent in it. These three items should be the three most recently added images in order from most recent to least.*/

	?>

	<h2>Popular</h2>

	<?php

	/*Up to ten image items should be displayed beneath this header. These items should be the most popular uploaded items ranked from most to least popular, ties being broken by recentness with more recent on top.*/

	?>



</body>

</html>