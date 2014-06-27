<?php

	include 'config.php';
	include 'functions.php';
	
	// The hashed password from the form
	$password = $_POST['p']; 
	// Create a random salt
	$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
	// Create salted password (Careful not to over season)
	$password = hash('sha512', $password.$random_salt);
	 
	$email = $_POST['email']; 
	$username = $_POST['username']; 
	
	// Add your insert to database script here. 
	// Make sure you use prepared statements!
	if ($insert_stmt = $DBH->prepare("INSERT INTO users (username, email, password, salt) VALUES (?, ?, ?, ?)")) {    
	   $insert_stmt->bindParam(1, $username);
	   $insert_stmt->bindParam(2, $email);
	   $insert_stmt->bindParam(3, $password);
	   $insert_stmt->bindParam(4, $random_salt);
	   // Execute the prepared query.
	   $insert_stmt->execute();
	}

	redirect('register.php?success=1');
?>