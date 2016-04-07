<?php

	require_once "../models/Database.php";
	
	if(isset($_POST['Submit'])){
		$first = $_POST['fname'];
		$last = $_POST['lname'];
		$e = $_POST['email'];
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		
		$db = new Database();
		$conn = $db->connect();
		
		$query = "INSERT INTO USER(f_name, l_name, email, u_name, u_pwd) VALUES( '$first', '$last', '$e', '$uname', '$pass')";
				
		if(mysqli_query($conn, $query)){
			echo "Success";
		}
		else{
			echo $conn->error;
		}
		
	}
?>