<?php include '/partials/header.php'; ?> 

<!-- CSS -->
<style> <?php include '/CSS/home.css'; ?> </style>
<style> <?php include '/sidr/stylesheets/jquery.sidr.dark.css'; ?> </style>
<!-- SCRIPTS --> 
<script src="./sidr/jquery.sidr.min.js"></script> 




<a id="simple-menu" class="navButton sidr2" href="#sidr" >
<<<<<<< HEAD
	<div class="space"></div>
	<div id="expText" class="vert"> &#8593; Click to Expand Menu &#8593; </div>
	<div class="space"></div>
</a>

=======
</a>
>>>>>>> origin/master
<?php include '/partials/sideNav.php'; ?> 

<?php include '/partials/mainHeader.php'; ?> 
<?php include '/partials/locationBar.php'; ?>

<div class="contentBody">
<<<<<<< HEAD
	<p class="vert" style="position: absolute; margin: 0 auto; left: 200px"> hello </p>
=======
	<p> hello </p>
>>>>>>> origin/master
       
</div>


<script>
$(document).ready(function() {
  $('#simple-menu').sidr();
<<<<<<< HEAD

  $('#simple-menu').click( function( ){
  	var pos = $(this).position()
  	//alert( pos.left === 0);
  	 if( pos.left === 0 ){
  	 	$( '#expText' ).html(" &#8595; Click to Collapse Menu &#8595;");
  	 }
  	 else{
  	 	$( '#expText' ).html(" &#8593; Click to Expand Menu &#8593;");
  	 }
  } );
=======
>>>>>>> origin/master
});
</script>

<?php include '/partials/footer.php'; ?> 