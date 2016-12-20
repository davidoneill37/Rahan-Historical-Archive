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
         <h1>Rahan School Roll Books Filter Search</h1>
    </div>
    
    <form class="ui-filterable">
		
    	<input id="myFilter" data-type="search" placeholder="Enter Names or Dates to Search for">
    </form>
    <div data-role="content" id="content">		
        <ul data-role="listview" id="school-list" data-filter="true"  data-input="#myFilter"  data-inset="true" >
        	<li data-role="list-divider"  data-theme="b" role="heading"><strong>School Roll Book Records</strong></li>			
			
<!--         	list will be added here -->
        </ul>
		
    </div>
	
</div>
<!--details page starts here --> 


<div data-role="page" id="details-page">

    <div data-role="header" data-theme="a">`
	<a href="#" data-rel="back" data-role="buttonclass=">Go Back</a>
         <h1><strong>Rahan Schools Records</strong></h1>
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

	
	// load the JSON from a Database feed or File
	//alter here for change of data feed see also append list
		//$.getJSON("/Main/IPP/scripts/Rahan_Schools.json" , function(data) { 
		
		var data = <?php echo json_encode($query); ?>;
		// store content in variable
		var json = data;
		//end 
		
		// set up string for adding <li/>
		var list = "";
		
		//container for list index and name to be added
		$.each(json, function (index, school) {
        
        //store index value in array as id of the <a> tag
        	list += '<li><a href="#" id="' + index + '" class="info-go">' + school.Lastname + ", " + school.Firstname + " Date of Entry "  +  school.Date_D  + " " +  school.Date_M + " " +  school.Date_Year  + " " + '</a></li>';
    	});

		// append list to <ul> element		
		
		if (list =='') { //This will check if the object is empty
			list = '<li><a href="#" id="msg" class="">No Records were found </a></li>';
    	}
		
		$("#school-list").append(list).promise().done(function () {				
		    
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
    
    // get school info from data stored when you click the grave title 
    var school = $(this).data("filedata");
    
    // store grave info html here
    var school_info = "";
    
    // loop through object to get the school object fields and values
    for(var school_info in school) {
    
     school_info = '<p><a id = ' + school.id + 'class="info-go"><table><tbody><tr><td><b>Name of School</b></td><td>' + school.School + '</td></tr><tr><td><b>Register Number</b></td><td>' + school.Registration_Number + '</tr></td><tr><td><b>Date of Entrance </b></td><td>' +  school.Date_D  + ' ' +  school.Date_M + ' ' +  school.Date_Year  + '</tr></td><tr><td><b>Pupil Name in Full </b></td><td>' + school.Firstname + ' ' + school.Lastname +'</td></tr><tr><td><b>Date of Pupils Birth </b></td><td>'+  school.Datebirth_D  + ' ' +  school.Datebirth_M + ' ' +  school.Datebirth_Year  + '</td></tr><tr><td><b>Religious Denomination as stated by parent or guardian </b></td><td>' + school.Religion + '</td></tr><tr><td><b>Address </b></td><td>' + school.Address + '</td></tr><tr><td><b>Fathers Occupation </b></td><td>' + school.Fathers_Occupation + '</td></tr><tr><td><b>If previously at school, name of school</b></td><td>' + school.Previous_School + '</td></tr></body></table></p>';
	
    }
    //add div to html on details page
    $(this).find("[data-role=content]").html(school_info);
});

</script>

</body>
</html>