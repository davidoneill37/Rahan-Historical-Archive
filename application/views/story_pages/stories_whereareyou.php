<!DOCTYPE html>
<html>
<head>
	<title>Google Map Geocoded Address</title>
	
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9AOzf4DIASBNbp6qGiVyaWgotW-Gj-Kw&v=3">
	</script>
	<script>
	// Code based on http://opengeocode.org/tutorials/googlemap/googlemaps_1.php
	
	var map;	// Google map object
	
	// Initialize and display a google map
	function Init()
	{
	
		// Create a Google coordinate object for where to initially center the map
		var latlng = new google.maps.LatLng( 53.2798, -7.6159 );	// Rahan
		
		// Map options for how to display the Google map
		var mapOptions = { zoom: 12, center: latlng  };
		
		// Show the Google map in the div with the attribute id 'map-canvas'.
		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	}
	
	// Update the Google map for the user's inputted address
	function UpdateMap( )
	{
		var geocoder = new google.maps.Geocoder();    // instantiate a geocoder objectvar 
		infoWindow = new google.maps.InfoWindow({map: map});
		
		
		// Get the user's inputted address
		var address = document.getElementById( "address" ).value;
	
		// Make asynchronous call to Google geocoding API
		geocoder.geocode( { 'address': address }, function(results, status) {
			var addr_type = results[0].types[0];	// type of address inputted that was geocoded
			if ( status == google.maps.GeocoderStatus.OK ) 
				{ShowLocation( results[0].geometry.location, address, addr_type ) ;          
			//SET UP POS and use instead of latlng for ERRORS!!!!
				param1 =	(results[0].geometry.location.lat());
				param2 =	(results[0].geometry.location.lng());
				 var pos = {
					lat: param1,
					lng: param2
				};
				
  
				url = "http://<?php echo base_url(); ?>index.php/user/id/";
	
					  

				newurl = (url+param1+"/"+param2);
				// pick up store lat long data in database and retieve record for pinning
				 $.getJSON(newurl , function(data) {});
				infoWindow.setPosition(pos);
				infoWindow.setContent('Thank you, your Location will now be shown on our World Map of Rahan Historical Archive Users.');
				map.setCenter(pos),
				function() {
				handleLocationError(true, infoWindow, map.getCenter,pos());			
			
				}
			}
         else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter, pos());
					
			}}
	)}
	
	 function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
	}
	// Show the location (address) on the map.
	function ShowLocation( latlng, address, addr_type )
	
	{
	
	
		// Center the map at the specified location
		map.setCenter( latlng );
		
		// Set the zoom level according to the address level of detail the user specified
		var zoom = 12;
		switch ( addr_type )
		{
		case "administrative_area_level_1"	: zoom = 6; break;		// user specified a state
		case "locality"						: zoom = 10; break;		// user specified a city/town
		case "street_address"				: zoom = 15; break;		// user specified a street address
		}
		map.setZoom( zoom );
		
		// Place a Google Marker at the same location as the map center 
		// When you hover over the marker, it will display the title
		var marker = new google.maps.Marker( { 
			position: latlng,			
			map: map      
		});
		
		// Create an InfoWindow for the marker
		var contentString = "" + address + "";	// HTML text to display in the InfoWindow
		var infowindow = new google.maps.InfoWindow( { content: contentString } );
		
		// Set event to display the InfoWindow anchored to the marker when the marker is clicked.
		google.maps.event.addListener( marker, 'click', function() { infowindow.open( map, marker ); });
	}
	
	// Call the method 'Init()' to display the google map when the web page is displayed ( load event )
	google.maps.event.addDomListener( window, 'load', Init );

	</script>
	<style>
	/* style settings for Google map */
	
	
	#map-canvas
	{
		width : auto; 	/* map width */
		height: 550px;	/* map height */
		border: 50px solid #654e84;
	}
	#map-form
	{
	text-align:center;
	border:1px solid #654e84";
	font-family: Charter Roman, serif
	}
	button {
	
    margin-right:50px;
	}

	
	
	
	</style>
</head>
<body> 
	<!-- Dislay Google map here -->
	<div id='map-canvas' ></div><br/>
	<div id='map-form'>
		<p>Would you like to include your Location Pin on our World Map of Users?</p>
		<label for="address"> Please Enter Home Address:</label>			
		<input type="text" id="address"/>
		<button onclick="UpdateMap()">Locate</button>
		<a href="<?= base_url();?>sitecontrol/storiesWhereAreYouMap"><button id="button2">World Map of Users</button>
		<br>
		</br>
	</div>
</body>
</html>


