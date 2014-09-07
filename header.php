<?php
	$size = 50;
	$gravURL = "http://www.gravatar.com/avatar/". md5( strtolower( trim( $_SESSION['email']) ) ) . "?s=". $size;
?>
	
	<div class="headerbar">

        <link rel="stylesheet" href="<?php echo $GLOBALS['server_path']?>js/jq/css/custom-theme-dark-v1/jquery-ui-1.10.4.custom.css" />
        <script src="<?php echo $GLOBALS['server_path']?>js/jq/js/jquery-1.10.2.js"></script>
        <script src="<?php echo $GLOBALS['server_path']?>js/jq/js/jquery-ui-1.10.4.custom.min.js"></script>

		<div class="menubar">
			<ul id="menu">
			  <li><a href="#">Item 1</a></li>
			  <li><a href="#">Item 2</a></li>
			  <li><a href="#">Item 3</a>
			    <ul>
			      <li><a href="#">Item 3-1</a></li>
			      <li><a href="#">Item 3-2</a></li>
			      <li><a href="#">Item 3-3</a></li>
			      <li><a href="#">Item 3-4</a></li>
			      <li><a href="#">Item 3-5</a></li>
			    </ul>
			  </li>
			  <li><a href="#">Item 4</a></li>
			  <li><a href="#">Item 5</a></li>
			</ul>
			
			<button>Logout</button>
			<img src="<?php echo $gravURL; ?>"/>
				
			<script>
				$( "button" ).button();
				$( 'button' ).click(function() {
				   window.location = "index.php?p=logout";
				});
				$( "#menu" ).menu();
			</script>
			
		</div>
		
	</div>

