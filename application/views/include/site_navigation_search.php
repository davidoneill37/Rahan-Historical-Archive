<body>
<!--Navbar code-->
<nav class="navbar navbar-fixed-top navbar-absolute navbar-default" id="searchnavigationbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false" id="mobiletoggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/home_icon.png"/></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
       
       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="" class="menubutton" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="history">History<span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="<?php echo base_url(); ?>Sitecontrol/historyMain" id="history" onclick="Navigation()" >History</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/historyTimeline" id="history" >Timeline</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/historyMaps" id="history">Maps</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/historySchools" id="history">Schools</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/historyGraveyards" id="history">Graveyards</a></li>
              </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="menubutton" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="search">Search<span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="<?php echo base_url(); ?>Sitecontrol/searchMain" id="search">Search Overview</a>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/searchSchoolRecords" id="search">School Records</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/searchFamilyNames" id="search">Family Names</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/searchGraveyards" id="search">Graveyards</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/searchDocuments" id="search">Documents</a></li>
              </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="menubutton" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="stories">Stories<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="<?php echo base_url(); ?>Sitecontrol/storiesView" id="stories">View All Stories</a></li>
               <li><a href="<?php echo base_url(); ?>Sitecontrol/storiesChildrensPage" id="stories">Childrens Page</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/storiesTellAStory" id="stories">Tell A Story</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/storiesWhereAreYou" id="stories">Where Are You?</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/storiesGallery" id="stories">Gallery</a></li>
                <li><a href="<?php echo base_url(); ?>Sitecontrol/storiesMythsandLegends" id="stories">Myths &amp; Legends</a></li>
                
                <!--<li><a href="<?php echo base_url(); ?>SiteControl/storiesUserLocationMap" id="stories">User Locations Map</a></li>-->
              </ul>
        </li>
        <li><a href="<?php echo base_url(); ?>Sitecontrol/contactPage" id="contact" class="menubutton">Contact</a></li>
       </ul>
        
    </div><!-- end navbar-collapse -->
  </div><!-- end container-fluid -->
</nav><!---------------- end navbar------------------------>
<br>
<br>