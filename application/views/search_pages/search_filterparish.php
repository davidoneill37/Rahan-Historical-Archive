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
         <h1>Rahan Parish Records Filter Search</h1>
    </div>
    
    <form class="ui-filterable">
		
    	<input id="myFilter" data-type="search" placeholder="Enter Names or Dates to Search for">
    </form>
    <div data-role="content" id="content">		
        <ul data-role="listview" id="parish-list" data-filter="true"  data-input="#myFilter"  data-inset="true" >
        	<li data-role="list-divider"  data-theme="b" role="heading"><strong>Parish Records</strong></li>			
			
<!--         	list will be added here -->
        </ul>
		
    </div>
	
</div>
<!--details page starts here --> 


<div data-role="page" id="details-page">

    <div data-role="header" data-theme="a">`
	<a href="#" data-rel="back" data-role="buttonclass=">Go Back</a>
         <h1><strong>Rahan Parish Records</strong></h1>
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
		//$.getJSON("/Main/IPP/scripts/Rahan_Parish.json" , function(data) { 
		
		var data = <?php echo json_encode($query); ?>;
		// store content in variable
		var json = data;
		//end 
		
		// set up string for adding <li/>
		var list = "";
		
			
		//container for list index and name to be added
		$.each(json, function (index, parish) {
			
        //store index value in array as id of the <a> tag
		if (parish.Type_of_Record == "B") {
        	list += '<li><a href="#" id="' + index + '" class="info-go">' + parish.Firstname + " " + parish.Family_Name + " Event Year " +  parish.Event_Year  + " - Baptismal" + '</a></li>';
			}
		else {
			list += '<li><a href="#" id="' + index + '" class="info-go">' + parish.Firstname + " " + parish.Family_Name + " Event Year " +  parish.Event_Year  + " - Marriage" + '</a></li>';
			}
			
		});

		// append list to <ul> element		
		
		if (list =='') { //This will check if the object is empty
			list = '<li><a href="#" id="msg" class="">No Records were found </a></li>';
    	}
		
		$("#parish-list").append(list).promise().done(function () {				
		    
		    // add the click event to the list elements
		    $(this).on("click", ".info-go", function (e) {
		        
		        // disable link click event of browser
		        e.preventDefault();
		        
		        // store the parish information in the next page's data
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
    
    // get parish info from data stored when you click the parish title 
    var parish = $(this).data("filedata");
    
    // store parish info html here
    var parish_info = "";
    
    // loop through object to get the parish object fields and values
    for(var parish_info in parish) {
    if (parish.Type_of_Record == "B") {
		parish_info = '<p><a id = ' + parish.id + 'class="info-go"><table><tbody><tr><td><b>Date of Baptism</b></td><td>' + parish.Event_D + ' '+ parish.Event_M + ' ' + parish.Event_Year +'</td></tr><tr><td><b>First Name</b></td><td>' + parish.Firstname + '</tr></td><tr><td><b>Family Name </b></td><td>' + parish.Family_Name + '</tr></td><tr><td><b>Sex </b></td><td>' + parish.Sex + ' </td></tr><tr><td><b>Fathers Name </b></td><td>' + parish.Fathers_First_Name + ' ' + parish.Fathers_Surname + '</td></tr><tr><td><b>Mothers Firstname </b></td><td>' + parish.Mothers_First_Name + '</td></tr><tr><td><b>Mothers Maiden Name </b></td><td>' + parish.Mothers_Maiden_Name + '</td></tr><tr><td><b>Witness 1</b></td><td>' + parish.Witness1_Firstname + ' ' + parish.Witness1_Surname + '</td></tr><tr><td><b>Witness 2</b></td><td>' + parish.Witness2_Firstname + ' ' + parish.Witness2_Surname + '</td></tr><tr><td><b>Reference</b></td><td>' + parish.Reference + '</tr></td></body></table></p>';
		}
	else {
		parish_info = '<p><a id = ' + parish.id + 'class="info-go"><table><tbody><tr><td><b>Date of Marriage</b></td><td>' + parish.Event_D + ' '+ parish.Event_M + ' ' + parish.Event_Year +'</td></tr><tr><td><b>Grooms Name</b></td><td>' + parish.Groom_Firstname + ' ' + parish.Family_Name + '</tr></td><tr><td><b>Brides First Name </b></td><td>' + parish.Bride_Firstname + '</td></tr><tr><td><b> Brides Maiden Name </b></td><td>' + parish.Maiden_Name + '</td></tr><tr><td><b>Witness 1</b></td><td>' + parish.Witness1_Firstname + ' ' + parish.Witness1_Surname + '</td></tr><tr><td><b>Witness 2</b></td><td>' + parish.Witness2_Firstname + ' ' + parish.Witness2_Surname + '</td></tr><tr><td><b>Reference</b></td><td>' + parish.Reference + '</tr></td></body></table></p>';
		}
	}
    //add div to html on details page
    $(this).find("[data-role=content]").html(parish_info);
});

</script>

</body>
</html>