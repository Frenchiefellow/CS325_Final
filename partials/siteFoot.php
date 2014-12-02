<?php 
	$url = "$_SERVER[REQUEST_URI]"; 
		if(strpos($url, 'home.php')){
			echo '<footer>' .
				'<ul class="botFooter">' .
				'<li>&copy; 2014 CL</li>' .
				'<li><a href="/xampp/CS325/help.php">Help</a></li>' . 
				'<li><a href="xampp/CS325/privacy.php">Privacy</a></li>' .
				'<li><a href="xampp/CS325/about.php">About</a></li>' .
				'</ul>' .
				'</footer>';
		}
		else{
			echo '<footer style="left: 0; width: 100%">' .
				'<ul class="botFooter">' .
				'<li>&copy; 2014 CL</li>' .
				'<li><a href="/xampp/CS325/help.php">Help</a></li>' . 
				'<li><a href="xampp/CS325/privacy.php">Privacy</a></li>' .
				'<li><a href="xampp/CS325/about.php">About</a></li>' .
				'</ul>' .
				'</footer>';
		}
?>