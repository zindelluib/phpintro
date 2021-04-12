<?php
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//Retrieve 
		$fname  = $_POST['fname'];
		$lname = $_POST['lname'];
		$pwd = $_POST['password'];
		$username  = $_POST['username'];

		echo "Name: " .  $fname  . " "  .$lname; 
		echo "<br>Password: " . password_hash($pwd, PASSWORD_DEFAULT);
		echo "<br>Username: "  .  $username;  

	}



?>