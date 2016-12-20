<!doctype html>
<html>
<head>

	<style>
	html,
	body{
	font-family: Charter Roman, serif;
	height: 80%;
	width: 90%;
	margin:  0;
	padding: 0;
	}
	#map {
	width : auto; 	/* map width */
	height: 660px;	/* map height */
	border: 20px solid #91221d;
	}
	</style>

</head>
<body>
<br></br>
<a href="javascript:window.history.go(-1);"><button>Go Back</button></a>
<br><br>
	<div id="map"></div>
<script>
function initMap(){
	//Contructor creates a new map -only center and zoom are required.
	var map;
	var markers = [];
		
		map = new google.maps.Map(document.getElementById('map'),{
		
		//set center to center of Rahan
		
		zoom: 12,
		center: {lat: 53.2798, lng: -7.6159}
		
		}); 
	// Create an array of locations 
	var locations = [
          {title: "St. Carthage's Monastic Site, Churchlands, Rahan", location: {lat: 53.27909526, lng: -7.612777052}, image:"<?php echo base_url(); ?>images/markers/church.png"},
          {title: 'Presentation Convent, Killina, Rahan', location: {lat: 53.27026095, lng: -7.596284149}, image:"<?php echo base_url(); ?>images/markers/building.png"},
          {title: 'The Jesuit College, Tullabeg, Rahan', location: {lat: 53.2702226095, lng: -7.611894605}, image:"<?php echo base_url(); ?>images/markers/building.png"},
          {title: "Charville Castle, Charleville, Tullamore - actually in Rahan", location: {lat: 53.28506717, lng: -7.528032658}, image:"<?php echo base_url(); ?>images/markers/castle.png"},
          {title: 'Lynally Church, Lynally, Mucklagh', location: {lat: 53.26053275, lng: -7.555777428}, image:"<?php echo base_url(); ?>images/markers/church.png"},
          {title: 'Rahan Lodge, Killina, Rahan', location: {lat: 53.26537787, lng: -7.593752143}, image:"<?php echo base_url(); ?>images/markers/small_building.png"},
		  {title: 'Brick Kiln, Killina, Rahan', location: {lat: 53.26913648, lng: -7.591308651}, image:"<?php echo base_url(); ?>images/markers/kiln.png"},
          {title: "Cromwell's Lines, Screggan", location: {lat: 53.26837131, lng: -7.561372516}, image:"<?php echo base_url(); ?>images/markers/lines.png"},
          {title: "Cromwell's Lines, Fertaun", location: {lat: 53.24963242, lng: -7.575513122}, image:"<?php echo base_url(); ?>images/markers/lines.png"},
          {title: 'Wetheral Castle (ruins), Castletown', location: {lat: 53.25540948, lng: -7.676219342}, image:"<?php echo base_url(); ?>images/markers/castle.png"},
		  {title: 'Killafeehan Burial Ground, The Island', location: {lat: 53.30681654, lng: -7.642077503}, image:"<?php echo base_url(); ?>images/markers/headstone.png"},
		  {title: 'Ringfort, The Island', location: {lat: 53.30423771, lng: -7.664994297}, image:"<?php echo base_url(); ?>images/markers/ringfort.png"},
          {title: "Ringfort, The Island", location: {lat: 53.31052662, lng: -7.66634613}, image:"<?php echo base_url(); ?>images/markers/ringfort.png"},
          {title: "Farranavilla Graveyard, Castletown", location: {lat: 53.3135201, lng: -7.675715086}, image:"<?php echo base_url(); ?>images/markers/headstone.png"},
          {title: "Graveyard at St. Carthage's Church", location: {lat: 53.27893007, lng: -7.612055538}, image:"<?php echo base_url(); ?>images/markers/headstone.png"}
        ];
	
     //set up positions and titles for each marker to be created
	   var largeInfowindow = new google.maps.InfoWindow();
	   for (var i = 0; i < locations.length; i++){
	   var position = locations[i].location;
	   var title = locations[i].title;
	 //  var image = locations[i].image;
	   //create a marker image with the path to your graphic and the size of your graphic
		var image = new google.maps.MarkerImage(
			locations[i].image,
			new google.maps.Size(30,40), //size
			null, //origin
			null, //anchor
			new google.maps.Size(30,40) //scale
		);
	   //create marker per location and put in array
	   var marker = new google.maps.Marker({
			map: map,
			position: position,
			title: title,
			icon: image,
			animation: google.maps.Animation.DROP,
			id: i
	   });
	   //Push markers to our array
	   markers.push(marker);
	   //Create onclick event for each marker
	   marker.addListener('click', function(){
			populateInfoWindow(this, largeInfowindow);
	   });
	 //  Check for infowindow close click pressed and set marker to null
	   function populateInfoWindow(marker, infowindow) {
		if(infowindow.marker != marker) {
			infowindow.marker = marker;
			infowindow.setContent('<div>' + marker.title + '</div>');
			infowindow.open(map, marker);
			infowindow.addListener('closeclick',function(){
	  
				infowindow.setMarker(null);
		});
	   }
	 }
	}
}
	   
</script>	
	
	 
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9AOzf4DIASBNbp6qGiVyaWgotW-Gj-Kw&v=3&callback=initMap">

	</script>

</body>
</html>