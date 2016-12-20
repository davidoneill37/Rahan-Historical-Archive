<br>
<br>
<div class="container" id="historysection">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <h3 id="mainheading">Your Stories</h3>
         <br>
          <h2 class="pageheadings">The Stories of Rahan</h2>
          <br>
          <img src="<?php echo base_url(); ?>images/stories/rambling _house.jpg" id="storiesmainimage" class="center-block">
          <br><br>

           <p>Below you will find some stories from Rahan that have been submitted to us by readers. Where possible, images have been submitted with the stories, to furthur illuminate the history of the area, and the stories of those who lived here.</p>
           <br>
           <hr class="divider" id="pagedivider">
           <br>
           <div>
		   <table id="storiestable" >
		   <tr>
               <th colspan="2">Stories of Rahan</th>
           </tr>
		   
			<tr>
        <td><strong>Action</strong></td>
        <td><strong>Summary</strong></td>
    </tr>
<?php foreach ($stories as $story_item):?>
	
        <tr>
			<td><a href="<?php echo site_url('Story/view/'.$story_item['id']) ?>"><button>View more</button></a></td>
            <td><?php echo $story_item['summary']; ?></td>
            
        </tr>
<?php endforeach; ?>
</table>

		   
           
        <br><br>
    </div
            
        </div><!--End body column-->
    </div><!--End row-->
</div><!--End container-->

