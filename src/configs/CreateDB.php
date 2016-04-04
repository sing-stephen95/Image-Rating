<? php
 
	require_once('./Config.php');
	require_once('../mySqlConnection.php');
	
	$conn = mysqli_connect($server, $user, $pwd, $db);

	$createUserTable = "CREATE TABLE USER(
		u_id INT NOT NULL,
		f_name VARCHAR(50) NOT NULL,
		l_name VARCHAR(50) NOT NULL,
		email VARCHAR(255) NOT NULL,
		u_pwd VARCHAR(50) NOT NULL,
		PRIMARY KEY (u_id)
	)";

	$createPostTable = "CREATE TABLE POST(
		u_id INT NOT NULL,
		f_name VARCHAR(50) NOT NULL,
		l_name VARCHAR(50) NOT NULL,
		date_submitted DATE NOT NULL,
		caption TEXT NOT NULL,
		rating INT NOT NULL,
		PRIMARY KEY (u_id)
	)";

	
	
	mysqli_query($createUserTable);
	mysqli_query($createPostTable);

 
 
	
 /*can be run from the command-line to make a good initial database.*/
 
 
 ?>
