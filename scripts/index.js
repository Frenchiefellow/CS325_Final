function countryAppear( name ){
		switch( name ){
			case 'Africa' :
				$( '#countriesList' ).load( './partials/Lists/africaCountries.html' );
	  			break;

	  		case 'Asia' :
	  			$( '#countriesList' ).load( './partials/Lists/asiaCountries.html' );
	  			break;

	  		case 'Canada' :
	  			$( '#countriesList' ).load( './partials/Lists/canadaProvinces.html' );
	  			break;

	  		case 'Europe' :
	  			$( '#countriesList' ).load( './partials/Lists/europeCountries.html' );
	  			break;

	  		case 'Latin America' :
	  			$( '#countriesList' ).load( './partials/Lists/latinCountries.html' );
	  			break;

	  		case 'Oceania' :
	  			$( '#countriesList' ).load( './partials/Lists/oceaniaCountries.html' );
	  			break;

			case 'US' :
	  			$( '#countriesList' ).load( './partials/Lists/statesList.html' );
	  			break;

	  		case 'Select' :
	  			$( '#countriesList' ).load( './partials/Lists/defaultList.html' );
	  			break;

	  		default : 
	  			$( '#countriesList' ).load( './partials/Lists/defaultList.html' );
	  	}
	  
}

function mapAppear ( name ){
		switch( name ){  			
			case 'MA' :
				$( '#map' ).load( './partials/mapBox.html' );
				break;

			case 'CR' :
				$( '#map' ).load( './partials/mapBox.html' );
				break;

			case 'OK' :
				$( '#map' ).load( './partials/mapBox.html' );
				break;

			default :
				$( '#map' ).html( "" );
		}


	window.localStorage.setItem( 'location', name );
}
