<?php

	include 'config.php';
	include 'functions.php';
	sec_session_start(); // Our custom secure way of starting a php session. 
	 
	if(isset($_POST['email'], $_POST['p'])) { 
	   $email = $_POST['email'];
	   $password = $_POST['p']; // The hashed password.
	   if(login($email, $password, $DBH) == true) {
	      // Login success
		   $DBH;
		   $server_path;
	      echo 'Success: You have been logged in!';
		  header('Location: /main.php');
	   } else {
	      // Login failed
	      header('Location: /login.php?error=1');
	   }
	} else { 
	   // The correct POST variables were not sent to this page.
	   echo 'Invalid Request';
	}

?>