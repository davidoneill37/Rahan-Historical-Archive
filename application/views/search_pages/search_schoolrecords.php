<br>
<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
         <h3 class="searchheading" id="mainheading">Search The School Records of Rahan Parish</h3>
        
        
         <br><br>
            <img src="<?php echo base_url(); ?>images/search/roll_book.png" class="searchsubimages">
            <h5><i><b>Roll Book from The Island Boys National School</b></i></h5>
          <br><br>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
           <br>
           <hr class="divider" id="pagedivider">
           <br>
             <br>
           <h2 class="pageheadings">Killina Girls National School</h2>
           <br><br>
           <img src="<?php echo base_url(); ?>images/history/1912_class.jpg" class="searchsubimages"/>
		   <br><br>
		   
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit.</p>
           <br><br>
		   <hr class="divider" id="pagedivider">
           <h2 class="pageheadings">The Island National School</h2>
           <br><br>
           <img src="<?php echo base_url(); ?>images/history/1929_class.jpg" class="searchsubimages"/>
		   <br><br>
		   
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit.</p>
		   
           <br><br>  
		  
			<hr class="divider" id="pagedivider">
            
          
           
        </div><!--End body column-->
<div>
<div class="container2">		

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
                   <a href="<?= base_url();?>Sitecontrol/filterSchoolsBr"><button id="browsebutton"><strong>BROWSE THE RECORDS</strong></button></a>
            
        </div><!--End timeline column-->
    </div><!--End row-->
</div><!--End container-->
