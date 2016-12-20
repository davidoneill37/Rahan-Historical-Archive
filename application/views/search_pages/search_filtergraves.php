<!doctype html>

<html>

<head>
	
	<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/graves.min.css">	
		
</head>

<body>

<!--list page -->
<div data-role="page" id="info-page">


  
    <div data-role="header" data-theme="a">
	
		<a href="#" data-rel="back" data-role="buttonclass=">Go Back</a>
         <h1>Rahan Graveyard Filter Search</h1>
    </div>
    
    <form class="ui-filterable">
		
    	<input id="myFilter" data-type="search" placeholder="Enter Names or Dates to Search for">
    </form>
    <div data-role="content" id="content">		
        <ul data-role="listview" id="grave-list" data-filter="true"  data-input="#myFilter"  data-inset="true" >
        	<li data-role="list-divider"  data-theme="b" role="heading"><strong>Graveyard Records</strong></li>			
			
<!--         	list will be added here -->
        </ul>
		
    </div>
	
</div>
<!--details page starts here --> 


<div data-role="page" id="details-page">

    <div data-role="header" data-theme="a">`
	<a href="#" data-rel="back" data-role="buttonclass=">Go Back</a>
         <h1><strong>Rahan Graveyard Records</strong></h1>
    </div>
	
<!--     details will be added here -->
    <div data-role="content" id="content">
	</div>
	
</div><!--end of detail page>-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>	
	
	
<script>


<!---http://iviewsource.com/codingtutorials/getting-started-with-javascript-object-notation-json-for-absolute-beginners--->
<!---http://www.2ality.com/2011/04/iterating-over-arrays-and-objects-in.html--->
<!---http://api.jquery.com/on/--->

// run on page creation in DOM
//
$(document).on("pagecreate", "#info-page", function () {

	
	// load the JSON from a file
	//alter here for change of data feed see also append list
		//$.getJSON("/Main/IPP/scripts/Rahan_Graves.json" , function(data) { 
		
		var data = <?php echo json_encode($query); ?>;
		// store content in variable
		var json = data;
		//end 
		
		// set up string for adding <li/>
		var list = "";
		
		//container for list index and name to be added
		$.each(json, function (index, grave) {
        
        //store index value in array as id of the <a> tag
        	list += '<li><a href="#" id="' + index + '" class="info-go">' + grave.Lastname + " " + grave.Firstname + " died on - " +  grave.Date_d  + " " +  grave.Date_m + " " +  grave.Date_Year  + " " + '</a></li>';
    	});

		// append list to <ul> element		
		
		if (list =='') { //This will check if the object is empty
			list = '<li><a href="#" id="msg" class="">No Records were found </a></li>';
    	}
		
		$("#grave-list").append(list).promise().done(function () {				
		    
		    // add the click event to the list elements
		    $(this).on("click", ".info-go", function (e) {
		        
		        // disable link click event of browser
		        e.preventDefault();
		        
		        // store the grave information in the next page's data
				//alter here for change of data feed
		        $("#details-page").data("filedata", json[this.id]);
				
		        // change the page to second page 
		        $.mobile.changePage("#details-page");
		    });
		
		    // refresh list to fix list styling
		    $(this).listview("refresh");
		});
	//});
});



$(document).on("pagebeforeshow", "#details-page", function () {
    
    // get grave info from data stored when you click the grave title 
    var grave = $(this).data("filedata");
    
    // store grave info html here
    var grave_info = "";
    
    // loop through object to get the grave object fields and values
    for(var grave_info in grave) {
    
     grave_info = '<p><a id = ' + grave.id + 'class="info-go"><table><tbody><tr><td><b>Graveyard</b></td><td>' + grave.Graveyard + '</td></tr><tr><td><b>Firstname </b></td><td>' + grave.Firstname + '</td></tr><tr><td><b>MaidenName/Alias </b></td><td>' + grave.Maiden_Name + '</td></tr><tr><td><b>Lastname </b></td><td>' + grave.Lastname + '</td></tr><tr><td><b>Death </b></td><td>' + grave.Date_d + ' ' +  grave.Date_m  + ' ' +  grave.Date_Year  + '</td></tr><tr><td><b>Age </b></td><td>' + grave.Age + '</td></tr><tr><td><b>Inscription </b></td><td>' + grave.Inscription + '</td></tr><tr><td><b>Headstone Number </b></td><td>' + grave.Headstone_Number + '</td></tr></table>' + grave.Image_Url + '</p>';
	
    }
    //add div to html on details page
    $(this).find("[data-role=content]").html(grave_info);
});

</script>

</body>
</html>