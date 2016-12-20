<style>

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%; 
  text-align: center;
  background-color: black;
  color: white;
  font-weight: bold;
  
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 1000px;
}

/* The Close Button */
.close {
    position: absolute;
    top: 60px;
    right: 35px;
	color: white;
	text-decoration: none;
    font-size: 40px;
    font-weight: bold;
}


.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: white;
  color: black;
  font-weight: bold;
  
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 125px;
    background-color: #555;
    color: #fff;
    text-align: center;
	font-size: 14px;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>
<br>
   <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
         <h3 id="mainheading">Gallery</h3>
          <h2 class="pageheadings">Photographic Collections from our Past</h2>
          <br>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
           <br>
           <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh.</p>
           <br>
           <hr class="divider" id="pagedivider">
           <br>
           <div class="row" class="center-block">
           <div class="col-sm-5"><!--Main body iamge left side-->
		   
			   <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/stories/1_gallery.jpg" onclick="openModal();currentSlide(1)" class="multigalleryimage"></span>
               <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/stories/3_gallery.jpg" onclick="openModal();currentSlide(1)" class="multigalleryimage"></span>
			   <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/stories/5_gallery.jpg" onclick="openModal();currentSlide(1)" class="multigalleryimage"></span>
			   <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/stories/7_gallery.jpg" onclick="openModal();currentSlide(1)" class="multigalleryimage"></span>
			   
           </div>
           
           <div class="col-sm-7"> <!--Main body image right side-->
               <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/stories/2_gallery.jpg" onclick="openModal();currentSlide(1)" class="multigalleryimage"></span>
               <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/stories/4_gallery.jpg" onclick="openModal();currentSlide(1)" class="multigalleryimage"></span>
			   <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/stories/6_gallery.jpg" onclick="openModal();currentSlide(1)" class="multigalleryimage"></span>
			   <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/stories/8_gallery.jpg" onclick="openModal();currentSlide(1)" class="multigalleryimage"></span>
			</div>   
           </div>
           
           <br><br>
           <hr class="divider" id="pagedivider">
           <br>
           <h2 class="pageheadings">The Killina Collection</h2>
           <p>Lorem ipsum class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. </p>
           <br> 
        </div><!--End body column-->
        
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <img src="<?php echo base_url(); ?>images/stories/av_logo.jpg" class="avmenu"><!--The audio/video logo-->
            <br>
            <h2 class="pageheadings" id="avheading">Look, listen and recall some bygone days....</h2>
            <br><br>
            
            <!--Audio visual files go here-->
            <div class="row">
            <figure><!--class="avtext"-->
                <img src="<?php echo base_url(); ?>images/stories/av1_b.jpg" id="av1"class="avimages" onmouseover="newAVImage1()" onmouseout="oldAVImage1()" onclick="avvideo1()">
                <figcaption>
                    Nan Higgins - How to make bread
                </figcaption>
            </figure>
            </div>
            <br><br>
            
            <div class="row">
            <figure><!--class="avtext"-->
                <img src="<?php echo base_url(); ?>images/stories/av2_b.jpg" id="av2" class="avimages" onmouseover="newAVImage2()" onmouseout="oldAVImage2()" onclick="avvideo2()">
                <figcaption>
                    John Hall - The first car we ever had
                </figcaption>
            </figure>
            </div>
            <br><br>
            
            <div class="row">
            <figure><!--class="avtext"-->
                <img src="<?php echo base_url(); ?>images/stories/av3_b.jpg" id="av3" class="avimages" onmouseover="newAVImage3()" onmouseout="oldAVImage3()" onclick="avvideo3()">
                <figcaption>
                    The Looby's &amp; Jane Hickey - The shores of Amerikay
                </figcaption>
            </figure>
            </div>
            <br><br>         
        </div><!--End audio visual column-->
       </div><!--End to row-->
        
        
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <img src="<?php echo base_url(); ?>images/stories/1912_class.jpg" class="storiessubimages">
           <h6><i>Class of 1912</i></h6>
           <br><br>
           <img src="<?php echo base_url(); ?>images/stories/1921_class.jpg" class="storiessubimages">
           <h6><i>Class of 1921</i></h6>
        </div>
    </div><!--End images row-->
    <br>
</div><!--End container-->

<div id="myModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <div class="modal-content">
    <div class="mySlides">
      <div class="numbertext">1 / 8</div>
        <img src="<?php echo base_url(); ?>images/stories/images_1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
	  <img src="<?php echo base_url(); ?>images/stories/images_2.png" style="width:100%">
	</div>
	
    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
        <img src="<?php echo base_url(); ?>images/stories/images_3.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 8</div>
        <img src="<?php echo base_url(); ?>images/stories/images_4.png" style="width:100%">
    </div>
	<div class="mySlides">
      <div class="numbertext">5 / 8</div>
        <img src="<?php echo base_url(); ?>images/stories/images_5.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 8</div>
        <img src="<?php echo base_url(); ?>images/stories/images_6.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 8</div>
        <img src="<?php echo base_url(); ?>images/stories/images_7.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 8</div>
        <img src="<?php echo base_url(); ?>images/stories/images_8.png" style="width:100%">
    </div>	
	
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
	 
    </div>
    <div class="column">
      <img class="demo" src="" onclick="currentSlide(1)" alt="The Killina Collection">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(2)" alt="Sporting Events in Rahan">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(3)" alt="Rahan People down through the years">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(4)" alt="Photographs from the Heritage Centre">
    </div>
	<div class="column">
      <img class="demo" src="" onclick="currentSlide(5)" alt="Photos from The Island School">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(6)" alt="The Rahan Lodge Collection">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(7)" alt="Fr. Barry  Condron Collection">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(8)" alt="Miscellaneous">
    </div>
	
  </div>
  </div>   			
 </div>
 <script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>

<script>
function avvideo1()
{
    window.open("<?php echo base_url(); ?>Sitecontrol/galleryVideo1", '', "width=700, height=400, scrollbars=yes")
}
    
function avvideo2()
{
    window.open("<?php echo base_url(); ?>Sitecontrol/galleryVideo2", '', "width=700, height=400, scrollbars=yes")
}
    
function avvideo3()
{
    window.open("<?php echo base_url(); ?>Sitecontrol/galleryVideo3", '', "width=700, height=400, scrollbars=yes")
}       
</script>