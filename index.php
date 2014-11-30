<?php include '/partials/header.php'; ?> 

<!-- CSS -->
<style> <?php include '/CSS/index.css'; ?> </style>


<!-- Jumbotron Splash Banner --> 
<div class="jumbotron" id= "splashBanner">
	<h1 class="bannerText" style="font-size: 900%"> &#9774; CRAIGSLIST! </h1>
</div>


<!-- Form Selection Box --> 
<div class="splashSelection">

	<!-- Continent Selection Drop Down --> 
	<h4 class="dropHeaders" >1. Select Your Continent </h4>
	<?php include '/partials/Lists/continentList.php'; ?>

	<!-- Country Selection Drop Down --> 
	<div id="countriesList"></div>

	<!-- Region Selection Map --> 
	<div id="map"></div>

</div> 

<!-- SCRIPTS --> 
<script src="./scripts/index.js"></script> 


<?php include '/partials/footer.php'; ?> 