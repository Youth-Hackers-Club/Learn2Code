<?php
include 'include/config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="<?php //echo $GLOBALS['server_path']?>css/base.css" rel="stylesheet">
		
		<script type="text/javascript" src="<?php //echo $GLOBALS['server_path']?>js/sha512.js"></script>
		<script type="text/javascript" src="<?php //echo $GLOBALS['server_path']?>js/forms.js"></script>
		<title>Login</title>
	</head>

	<body>
		<div class="login-box">
			<h1>Login</h1>
			<?php
				if(isset($_GET['error'])) { 
				   echo '<div class="error">Error Logging In!</div>';
				}
				else{
					echo '<div class="info">If you do not have an account <a href="index.php?p=register">register</a>.</div>';
				}
			?>
			
			<form action="include/process_login.php" method="post" name="login_form">
			   	Email: <br /><input type="text" name="email" /><br />
			   	Password: <br /><input type="password" name="password" id="password"/><br />
			   	<input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
			</form>
			<br />
		</div>
		
	</body>
</html>





