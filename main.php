<?php
	include 'include/config.php';
	include 'include/functions.php';
	sec_session_start();
	if(login_check($DBH) == true) {
?>
	   
	   	<!DOCTYPE html>
		<html>
			<head>
				<link href="<?php echo $GLOBALS['server_path']?>css/base.css" rel="stylesheet">
				
				<link rel="stylesheet" href="<?php echo $GLOBALS['server_path']?>js/jq/css/ui-darkness/jquery-ui-1.10.3.custom.css" />
				<script src="<?php echo $GLOBALS['server_path']?>js/jq/js/jquery-1.9.1.js"></script>
				<script src="<?php echo $GLOBALS['server_path']?>js/jq/js/jquery-ui-1.10.3.custom.min.js"></script>
				
				<title>Main Page</title>
			</head>
			
			<body>
				<?php include('header.php')?>
			</body>
		</html>
	   
	   
<?php
	 
	} else {
		redirect('index.php?p=login');
	}
	
?>