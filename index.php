<?php
include 'include/config.php';
/**
 * User: Scott Ramsay
 */
$page = '';

if (isset($_POST['p'])) {
	$page = $_POST['p'];
} else if (isset($_GET['p'])) {
	$page = $_GET['p'];
} else {
	$page = 'main';
}

$getString = '';

for ($i = 0; $i < count(array_keys($_GET)); $i++) {
	if ($i != 0) {
		$getString .= '&';
	}
	$getString .= array_keys($_GET)[$i].'='.$_GET[array_keys($_GET)[$i]];
}

$pagePath = $GLOBALS['server_pages_URI'].$page.'.php';
$pageHTML = file_get_contents($pagePath.'?'.$getString);

$menuPath = $GLOBALS['server_pages_URI'].'menu'.'.php';
$menuHTML = file_get_contents($menuPath);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>
		<div id="mainMenu">
			<?php echo $menuHTML;?>
		</div>
		<div id="subPage">
			<?php echo $pageHTML;?>
		</div>
	</body>
</html>