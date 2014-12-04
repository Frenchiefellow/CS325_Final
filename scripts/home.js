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
	var name = String( pageName ) + ".html";

  var path;
  if( pageName !== "forumsList")
	 path = './ContentPages/';
  else
    path = './ContentPages/FakeData/';

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

  var path;
  if( pageName !== 'events' )
	 path = './ContentPages/FakeData/';
  else
    path = './ContentPages/';

	$( '.contentBody' ).load( path + name );
	$( '.contentBody' ).attr("style", "padding-left: 0px");

	$( 'a' ).click( function ( event ){
		event.preventDefault();
		$('li').removeClass( "active" );
		$( ID ).addClass( "active" );
	});
}

function loadEvents( day ){
	var path = './ContentPages/events.html';
	window.localStorage.setItem( 'day', day );

	$( '.contentBody' ).load( path );

	$( 'a' ).click( function ( event ){
		event.preventDefault();
		$('li').removeClass( "active" );
		$( '#events' ).addClass( "active" );
	});

}

function popUp( day ){

	var css = "opacity: 0.1;"
	$( '.contentBody').attr("style", css);
	
    var popup = document.createElement('div');
    popup.className = 'popup';
    popup.id = 'test';
    var cancel = document.createElement('div');
    cancel.className = 'cancel';
    cancel.innerHTML = 'X';
    cancel.onclick = function (e) {
    	 popup.parentNode.removeChild( popup );
    	 $( '.contentBody').removeAttr("style");
    };
    var message = document.createElement('h5');
    message.innerHTML = "Events for December " + day + ":";
    message.className = 'eventTitle';

    var event1 = document.createElement('a');
    event1.innerHTML = "Event 1 <br>";
    event1.onclick = function (){
    	loadEvents( day );
    };
    event1.className = 'events';

    var event2 = document.createElement('a');
    event2.innerHTML = "Event 2 <br>";
    event2.onclick = function (){
    	loadEvents( day );
    };
    event2.className = 'events';

    var event3 = document.createElement('a');
    event3.innerHTML = "Event 3 <br>";
    event3.onclick = function (){
    	loadEvents( day );
    };
    event3.className = 'events';

    popup.appendChild(message);                                    
    popup.appendChild(cancel);
    popup.appendChild(event1);
    popup.appendChild(event2);
    popup.appendChild(event3);
    document.body.appendChild(popup);
}

function loadBread( name, args ){
   $( '.breadSpacer' ).html( );
  if( args !== null ){
    var subName = String( args ).toLowerCase( );
    
    html = "> " + "<a id='loaf' style='text-decoration: none; color: black; cursor: pointer;'";
    var funct ='onclick="loadNew( \'' + subName + '\' , \'' +  (subName + "List" ) + '\' )" style="cursor: pointer;"';
    html += funct + "> " + args + "</a> > " + name; 
  }
  else{
     html = "> "  + name;
  }
  $( '.breadSpacer' ).html( html );
}