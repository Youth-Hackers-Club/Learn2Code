<?php
	//DATABASE
	$db_user = "walrus_user";
	$db_password = "testing";
	$db_host = "localhost";
	$db_database = "walrus";
	
	//GLOBAL VARIABLES
	$GLOBALS['server_path'] = '/';
	//CUSTOM VARIABLES (Change for each installation)
	$GLOBALS['server_pages_URI'] = 'http://localhost/';

	
	try{
		$DBH = new PDO("mysql:host=$db_host;dbname=$db_database", $db_user, $db_password);
	}
	catch(PDOException $e) {
		//echo $e->getMessage();
	}