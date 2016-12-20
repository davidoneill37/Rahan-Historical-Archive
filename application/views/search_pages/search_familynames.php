<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
         <h3 class="searchheading" id="mainheading">Search the Family Rahan Parish Records</h3>
         
          <br><br>
          <img src="<?php echo base_url(); ?>images/search/family_tree.png" class="searchsubimages">
            <br><br><br>
           <h3 class="pageheadings">The Family Names of Rahan</h3>
			<br><br>
            <p>As we have already said, Rahan people, down through the ages, have shown great resilience. Having come through wars, upheavals, famine, many of the family names still Survive. In 1854, the most common surnames in Rahan were Molloy, Guynan, Fox, Cantwell, Grennan, Minnock , Dunne, Carroll, Corcoran and Daly. Today, most of those same families are still here.</p>
		    <br>
		    <p>Cantwell’s trace their lineage way back to ... while there were Mooneys in Lynally back in the late 1600s. Corcorans have farmed in the same place at Aghadonagh for 5 generations. Members of many families went away at various points in our history and came back. Many more emigrated, never to return.</br>
			<br>
			<p>Today, many of our community still have a strong connection with farming the land here. While most families were farmers in the 19th and 20th century, some were employed in places such as Goodbodys in Clara, the Jesuit College, the Presentation Convent, Rahan Lodge, Charleville Demesne or the Turf Development Board later knownas Bord na Mona. Flax growing and potato growing were enterprises associated with Rahan in the past.
			<br>
			<p>Many families arrived in Rahan at defining moments in history - the Norman invasion, the Cromwellian plantations or to build roads in the early 20th century. Many came from all over Ireland and further afield to work on the building of the canal. Alan Lindley, who’s mother’s family have been lock-keepers at 30th lock can trace back his family 8 generations here. His ? first arrived here in 17? to work on the building of the canal and afterwards received the job of lock-keeper on the 30th lock. Others were drawn to Rahan by finding employment in brickmaking, carpentry, as blacksmiths or as tailors etc. A look at the Census for 1911, gives an indication of the different types of employment in the area at the time.</br>
		<br><br>

           <hr class="divider" id="pagedivider">
           <br>
             <br>
           
        </div><!--End body column-->
		

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
               <br>
			   <div class="panel panel-default" id="searchpanel">
                <div class="panel-body">
			   
               <form action="<?= base_url();?>Sitecontrol/filterSearch"  method="get">
                
				<div class="form-group">
                
                    <div class="form-group">
                    <label class="searchlabel" for="firstname">First Name</label>
                    <input type="alpha" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group">
                    <label class="searchlabel" for="lastname">Last Name</label>
                    <input type="alpha" class="form-control" id="lastname" name="lastname">
                    </div>
        
					<label class = "searchlabel"><input type="checkbox" class="searchcheck" name="exact_btn" value= "1"  data-toggle="checkbox-x" data-three-state="false" data-size="xl" /> Exact Match Only</label><br>
					<br>
					<ul class="list-inline">
					<li><label class ="searchlabel"><input type="checkbox"  class="searchcheck" name="school_btn" value="1" /> School Roll Book</label></li> 
					<li><label class ="searchlabel"><input type="checkbox" class="searchcheck" name="grave_btn" value="1" /> Graveyard</label></li><br>
					<li><label class ="searchlabel"><input type="checkbox"  class="searchcheck" name="parish_btn" value="1" /> Parish</label></li>
					<li><label class ="searchlabel"><input type="checkbox" class="searchcheck" name="all_btn" value="1" /> All</label></li>	
                    </ul>
					<br>
                    
                    <div class="form-group">
                    <label class="searchlabel" for="lyearrange">Year Range</label>
                    <ul class="list-inline">
                        <li><input id="yearrange" type="number" class="form-control" id="startdate"name="start_date" min="1600" max="1950"></li>
                        <li><label class="searchlabel"> to </label></li>
                        <li><input id="yearrange" type="number" class="form-control" id="enddate" name="end_date" min="1600" max="1950"></li>
                    </ul>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-default"><strong>SEARCH</strong></button>
                </form>
				</div>
                <br><br>                
                
            </div><!--End body-->
            </div><!--End panel-->
                   <a href="<?= base_url();?>Sitecontrol/filterParishBr"><button id="browsebutton"><strong>BROWSE THE RECORDS</strong></button></a>
            
        </div><!--End timeline column-->
    </div><!--End row-->
</div><!--End container-->
