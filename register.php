<?php
include 'include/config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="<?php //echo $GLOBALS['server_path']?>css/base.css" rel="stylesheet">
		
		<script type="text/javascript" src="js/sha512.js"></script>
		<script type="text/javascript" src="js/forms.js"></script>
		<title>Register</title>
		
	</head>

	<body>
		<div class="login-box">
			<h1>Register</h1>
			<?php
				if(isset($_GET['success'])) { 
				   echo '<div class="success">Success! Please <a href="login.php">login</a></div>';
				}
				if(isset($_GET['short'])) { 
				   echo '<div class="error">Please fill in all fields.</div>';
				}
			?>
			<form action="include/process_register.php" method="post" name="register form">
				Username: <br /><input type="text" name="username"/><br /><br />
			   	Email: <br /><input type="text" name="email" /><br /><br />
			   	Password: <br /><input type="password" name="password" id="password"/><br /><br />
			   	<input type="button" value="Register" onclick="checkfields(this.form);" />
			</form>
			<br />
		</div>
		
	</body>
</html>
