<?php
	$size = 50;
	$gravURL = "http://www.gravatar.com/avatar/". md5( strtolower( trim( $_SESSION['email']) ) ) . "?s=". $size;
?>
	
	<div class="headerbar">
		
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
				   window.location = "/logout.php";
				});
				$( "#menu" ).menu();
			</script>
			
		</div>
		
	</div>

