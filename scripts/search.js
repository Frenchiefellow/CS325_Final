$(document).ready(function() {

  $( 'a[href="#sidr"]' ).click( function ( event ){
		event.preventDefault();
	});

  $('#simple-menu').sidr();

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
});


function loadNew( Eid, pageName ){
  window.location.replace( 'home.php' );
}
