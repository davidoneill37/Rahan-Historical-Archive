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
.docImg {width: 600px; height: 400px;
}

</style>

<br><br>
   <div class="container" id="searchsection">
   <div class="row">
   <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
   <br>
    <h3 id="mainheading">Documents</h3>
    <br>
          <h2 class="pageheadings">Documents in the Rahan Archives</h2>
          <br>
           <img src="<?php echo base_url(); ?>images/search/BOE_Report.jpg" id="searchmainimage"/>
           <br><br>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
           <hr class="divider" id="pagedivider">
           <br>
           
           
   <div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><!--Main body iamge left side-->
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/1_box.png" onclick="openModal();currentSlide(1)" class="multidocumentimage"></span>
  
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/3_box.png" onclick="openModal();currentSlide(3)" class="multidocumentimage"></span>
  
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/5_box.png" onclick="openModal();currentSlide(5)" class="multidocumentimage"></span>
  
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/7_box.png" onclick="openModal();currentSlide(7)" class="multidocumentimage"></span>
	
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/9_box.png" onclick="openModal();currentSlide(9)" class="multidocumentimage"></span>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><!--Main body image right side-->
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/2_box.png" onclick="openModal();currentSlide(2)" class="multidocumentimage"></span>
  
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/4_box.png" onclick="openModal();currentSlide(4)" class="multidocumentimage"></span>
  
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/6_box.png" onclick="openModal();currentSlide(6)" class="multidocumentimage"></span>
  
	<span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/8_box.png" onclick="openModal();currentSlide(8)" class="multidocumentimage"></span>
	
    <span title="Click to View Document"><img src="<?php echo base_url(); ?>images/search/10_box.png" onclick="openModal();currentSlide(10)" class="multidocumentimage"></span>
	</div>
	</div>	
</div><!--column left-->	

       
       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
         
          <div class="col-md-6 col-md-offset-2">
         <img src="<?php echo base_url(); ?>images/history/Timeline_small_head.png" class="timelinesmallheader">
           </div> 
          
          <a href="<?php echo base_url(); ?>Sitecontrol/historyTimeline"><img src="<?php echo base_url(); ?>images/history/rahan_timeline.jpg" class="subtimelines"></a>
           
       </div><!--End column right-->
    </div><!--End row-->
</div><!--End container-->
<div id="myModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <div class="modal-content">
    <div class="mySlides">
      <div class="numbertext">1 / 10</div>
        <img src="<?php echo base_url(); ?>images/search/document_1.png" class="documentimage">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 10</div>
	  <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo base_url(); ?>images/search/BOE_Report_L.png" class="documentimage">
	</div>
	
    <div class="mySlides">
      <div class="numbertext">3 / 10</div>
        <img src="<?php echo base_url(); ?>images/search/document_3.png" class="documentimage">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 10</div>
      <img src="<?php echo base_url(); ?>images/search/document_4.png" class="documentimage"> 
    </div>
	<div class="mySlides">
      <div class="numbertext">5 / 10</div>
        <img src="<?php echo base_url(); ?>images/search/document_5.png" class="documentimage">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 10</div>
        <img src="<?php echo base_url(); ?>images/search/document_6.png" class="documentimage">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 10</div>
         <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo base_url(); ?>images/search/maggiemolloy_newyork.png" class="documentimage">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 10</div>
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo base_url(); ?>images/search/Sheridan_family_tree.png" class="documentimage">
    </div>	
	<div class="mySlides">
      <div class="numbertext">9 / 10</div>
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="<?php echo base_url(); ?>images/search/Census_Killina_1911.png" class="documentimage">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 10</div>
        <img src="<?php echo base_url(); ?>images/search/document_10.png" class="documentimage">
    </div>	
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
	 
    </div>
    <div class="column">
      <img class="demo" src="" onclick="currentSlide(1)" alt="Census 1871- Rahan Parish">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(2)" alt="Board of Education Report 1831">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(3)" alt="Rahan Estate Document">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(4)" alt="Rahan Burial Record Book">
    </div>
	<div class="column">
      <img class="demo" src="" onclick="currentSlide(5)" alt="Griffith's Valuation for Rahan Estate">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(6)" alt="Dr. Murray Letter to Maria O'Brien">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(7)" alt="Maggie Molloy New York">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(8)" alt="Sheridan Family Tree">
    </div>
	<div class="column">
      <img class="demo" src="" onclick="currentSlide(9)" alt="Census of Ireland 1911">
    </div>

    <div class="column">
      <img class="demo" src="" onclick="currentSlide(10)" alt="Document">
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

function bigImg(x) {
    
    x.style.width = "1600px";
}

function normalImg(x) {
   
    x.style.width = "1000px";
	x.style.length = "700px";
	
}

</script>
