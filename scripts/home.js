$(document).ready(function() {

  $( '.contentBody' ).load( './ContentPages/home.html' );

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
	var ID = '#' + String( Eid );
	//alert( ID );
	var name = String( pageName ) + ".html";
	//alert( name );
	var path = './ContentPages/';
	$( ".contentBody" ).load( path + name );

	$( 'li' ).click( function ( event ){
		event.preventDefault();
		$('li').removeClass( "active" );
		$( ID ).addClass( "active" );
	});
}

function loadFake( Eid, pageName ){
	var ID = '#' + String( Eid );
	var name = String( pageName ) + ".html";
	var path = './ContentPages/FakeData/';

	$( '.contentBody' ).load( path + name );
	$( '.contentBody' ).attr("style", "padding-left: 0px");

	$( 'a' ).click( function ( event ){
		event.preventDefault();
		$('li').removeClass( "active" );
		$( ID ).addClass( "active" );
	});
}