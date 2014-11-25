<?php include '/partials/header.php'; ?> 

<!-- CSS -->
<style> <?php include '/CSS/home.css'; ?> </style>
<style> <?php include '/sidr/stylesheets/jquery.sidr.dark.css'; ?> </style>
<!-- SCRIPTS --> 
<script src="./sidr/jquery.sidr.min.js"></script> 




<a id="simple-menu" class="navButton sidr2" href="#sidr" >
</a>
<?php include '/partials/sideNav.php'; ?> 

<?php include '/partials/mainHeader.php'; ?> 
<?php include '/partials/locationBar.php'; ?>

<div class="contentBody">
	<p> hello </p>
       
</div>


<script>
$(document).ready(function() {
  $('#simple-menu').sidr();
});
</script>

<?php include '/partials/footer.php'; ?> 