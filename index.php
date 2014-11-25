<?php include '/partials/header.php'; ?> 

<!-- CSS -->
<style> <?php include '/CSS/index.css'; ?> </style>


<!-- Jumbotron Splash Banner --> 
<div class="jumbotron" id= "splashBanner" style="background-color: rgba(18, 165, 244, .6);">
	<h1 class="dropHeaders" >CRAIGSLIST! </h1>
</div>


<!-- Form Selection Box --> 
<div class="splashSelection">

	<!-- Continent Selection Drop Down --> 
	<h4 class="dropHeaders" >1. Select Your Continent </h4>
	<?php include '/partials/Lists/continentList.php'; ?>

	<!-- Country Selection Drop Down --> 
	<div id="countriesList"></div>

	<!-- Region Selection Drop Down --> 
	<div id="map"></div>

</div> 

<!-- SCRIPTS --> 
<script src="./scripts/index.js"></script> 


<?php include '/partials/footer.php'; ?> 