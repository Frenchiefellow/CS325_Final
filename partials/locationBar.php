<div class="locations">
	<h4 class="crumbHeader" style="width: 125px; display: inline-block;">LOCATIONS: </h4>
	<div class="loc"></div>

	<div class="add"><a title="Add New Location" onclick='loadNew( "locate"  , "locations" )'> ADD </a></div>
	

</div>

<script>
$(document).ready(function() {
	var loc = window.localStorage.getItem( 'loc' );
	//window.localStorage.clear( );

	var following = '<a onclick="contSearch( )" title="Remove Location">' +
					'<sup style="cursor: pointer"> X</sup>'
					'</a>';

	if( loc === 'czech' ){
		var html = 'Prague' + following;
		$( '.loc' ).html( html );
	}
	if( loc === 'mass' ){
		var html = 'Western Mass' + following;
		$( '.loc' ).html( html );
	}
	if( loc === 'okla' ){
		var html = 'Tulsa' + following;
		$( '.loc' ).html( html );
	}
	if( loc === 'CZ' ){
		var html = 'Czech Republic' + following;
		$( '.loc' ).html( html );
	}
	if( loc === 'USA' ){
		var html = 'United States of America' + following;
		$( '.loc' ).html( html );
	}
	else if( loc !== undefined || loc !== null ){
		var html = loc + following;
		$( '.loc' ).html( html );
	}

});

function contSearch(  ){

	var following = '<a onclick="contSearch( )" title="Remove Location">' +
					'<sup style="cursor: pointer"> X</sup>'
					'</a>';
	var loc = window.localStorage.getItem( 'loc' );
	
	if( loc === 'czech' ){
		var html = 'Czech' + following;
		window.localStorage.setItem( 'loc', 'CZ' )
		$( '.loc' ).html( html );
	}
	if( loc === 'mass' ){
		var html = 'USA' + following;
		$( '.loc' ).html( html );
		window.localStorage.setItem( 'loc', 'USA' );
	}
	if( loc === 'okla' ){
		var html = 'USA' + following;
		$( '.loc' ).html( html );
		window.localStorage.setItem( 'loc', 'USA' );
	}
}
</script>