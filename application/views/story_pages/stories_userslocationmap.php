<!doctype html>
<html>
<head>


	<style>
	html,
	body{
	font-family: Georgia;
	height: 100%;
	margin:  0;
	padding: 0;
	}
	#map {
	width : 82%; 	/* map width */
		height: 92%;	/* map height */
		
		border-left: 20px solid #654e84;
		border-right: 20px solid #654e84;
		border-bottom: 20px solid #654e84;
		border-top: 20px solid #654e84;	
	
	}
	</style>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	

</head>
<body>
<br></br>
<a href="javascript:window.history.go(-1);"><button>Go Back</button></a>
<br></br>
<div id="map"></div>

	<script>
	var map;
	var markers = [];
	var locations = [];
	var locate;
	
	function initMap(){
	//Contructor creates a new map -only center and zoom are required.
	var data = <?php echo json_encode($query); ?>;
	map = new google.maps.Map(document.getElementById('map'),{
	//center: {lat: 53.2798, lng: -7.6159}, //Rahan
	center: {lat:34.397, lng: 150.644},
	zoom: 2
	}); 
	// pick up json string of lat and lng to pin prior users location
	//$.getJSON("http://localhost/CIAss01/CI/index.php/user/get_users" , function(data) {
		
	
	
		// store content in variable

		var locations = data;		
		
		//container for location index and name to be added
			$.each(locations, function (index, id) {
        		
			console.log (id);
				
			var largeInfowindow = new google.maps.InfoWindow();
	  //put numeric lat and long into location
			var locate = {lat: parseFloat(id.lat), lng: parseFloat(id.lon)}; 
	  
	  //create marker per location 
			var marker = new google.maps.Marker({
				map: map,
				position: locate,
				animation: google.maps.Animation.DROP
			})	 	
		
	})
	var infoWindow = new google.maps.InfoWindow({map: map});
	
	// Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location');
           // map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
	
}

		   
       
	
	</script>
	
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9AOzf4DIASBNbp6qGiVyaWgotW-Gj-Kw&v=3&callback=initMap">



	</script>


</body>
</html>