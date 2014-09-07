<?php
include 'include/config.php';

if (isset($_POST['p'])) {
	$page = $_POST['p'];
} else if (isset($_GET['p'])) {
	$page = $_GET['p'];
} else {
	$page = 'main';
}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>
        <div id="header">
            <?php include "header.php";?>
        </div>
		<div id="container">
            <div id="mainMenu">
                <?php include "menu.php";?>
            </div>
            <div id="subPage">
                <?php include $page.".php";?>
            </div>
		</div>

	</body>
</html>