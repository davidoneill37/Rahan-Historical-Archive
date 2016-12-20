<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteControl extends CI_Controller {
    public function index()
    {
        $this->home();
    }
    
    public function home()
    {
        $data['meta']['title'] = 'Rahan Historical Archive'; //dynamically adding metatag title and description to page
        $data['meta']['desc'] = 'The history of Rahan, Co Offaly, including Records, Stories, Images and Videos.';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_home");
        $this->load->view("index");
    }
    
    public function historyMain()
    {
        $data['meta']['title'] = 'Rahan History';
        $data['meta']['desc'] = 'The history of Rahan';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_history");
        $this->load->view("history_pages/history_main");
        $this->load->view("include/site_footer");
    }
    
    public function historyTimeline()
    {
        $data['meta']['title'] = 'Rahan History';
        $data['meta']['desc'] = 'A visual display of the history of Rahan';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_history");
        $this->load->view("history_pages/history_timeline");
        $this->load->view("include/site_footer");
    }
    
    public function historyMaps()
    {
        $data['meta']['title'] = 'Maps of Rahan Parish';
        $data['meta']['desc'] = 'Maps of Rahan, historical sites of interest';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_history");
        $this->load->view("history_pages/history_maps");
        $this->load->view("include/site_footer");
    }
	
    public function historyGMap()
    {
		$data['meta']['title'] = 'Map of Rahan';
        $data['meta']['desc'] = 'Maps of Rahan, historical sites of interest';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_history");
        $this->load->view("history_pages/history_gmap");
        $this->load->view("include/site_footer");
    }
	
    public function historySchools()
    {
        $data['meta']['title'] = 'History of Rahan Schools';
        $data['meta']['desc'] = 'Name all schools, + Rahan Schools History';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_history");
        $this->load->view("history_pages/history_schools");
        $this->load->view("include/site_footer");
    }
    
    public function historyGraveyards()
    {
        $data['meta']['title'] = 'History of Rahan Graveyards';
        $data['meta']['desc'] = 'Graveyard names + History of Rahan Graveyards';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_search");
        $this->load->view("search_pages/search_graveyards");
        $this->load->view("include/site_footer");
    }
    
        
    public function searchMain()
    {
        $data['meta']['title'] = 'Rahan Records, Parish, School, Graveyard';
        $data['meta']['desc'] = 'Search Rahan Family History Parish School Graveyard Records';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_search");
        $this->load->view("search_pages/search_main");
        $this->load->view("include/site_footer");
    }
    
    public function searchSchoolRecords()
    {
        $data['meta']['title'] = 'Search Rahan School Records';
        $data['meta']['desc'] = 'Search Rahan School Records';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_search");
        $this->load->view("search_pages/search_schoolrecords");
        $this->load->view("include/site_footer");
    }
    
    public function searchFamilyNames()
    {
        $data['meta']['title'] = 'Search Family Names of Rahan';
        $data['meta']['desc'] = 'Search for Family Names associated with Rahan';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_search");
        $this->load->view("search_pages/search_familynames");
        $this->load->view("include/site_footer");
    }
    
    public function searchGraveyards()
    {
		
		$data['meta']['title'] = 'History of Rahan Graveyards';
        $data['meta']['desc'] = 'Graveyard names + History of Rahan Graveyards';
        $this->load->view("include/site_header", $data);
		$this->load->view("include/site_navigation_search");
        $this->load->view("search_pages/search_graveyards.php");	
		$this->load->view("include/site_footer");
    }
	
    public function filterGraveyardsBr()
    {
		$this->load->model('admin_model', '', true);	
		$query['query'] = $this->admin_model->get_graves();
		$this->load->view("search_pages/search_filtergraves.php",$query);	
	
	}
	
	public function filterSearch()
    {
		$school = ($this->input->get('school_btn'));
		$grave = ($this->input->get('grave_btn'));
		$parish = ($this->input->get('parish_btn'));
		$all = ($this->input->get('all_btn'));
		
		if ($school == "1" and $parish == "1" and $grave == "1"){
			$all = "a";
			$this->filterAllS($all);
		}
		elseif ($parish =="1" and $school == "1") {
			$all ="b";
		$this->filterAllS($all);
		}
		elseif ($parish =="1" and $grave == "1")  {
			$all = "c";
			$this->filterAllS($all);
		}
		elseif ($grave =="1" and $school == "1") {
			$all ="d";
		$this->filterAllS($all);
		}
		elseif ($parish =="1") {
		$this->filterParishS();
		}
		elseif ($grave =="1") {
		$this->filterGraveyardsS();
		}
		elseif ($school =="1") {
		$this->filterSchoolsS();
		}
		else {
			$all = "a";
			$this->filterAllS($all);
        }
    }
	
	public function filterGraveyardsS()
    {
		$datesy = "n";
		$dateey = "n";
		$firstname = ($this->input->get('firstname'));		  
		$lastname = ($this->input->get('lastname'));
		$exact = ($this->input->get('exact_btn'));
		$startdate = ($this->input->get('start_date'));
		$enddate = ($this->input->get('end_date'));
		
		$this->load->model('admin_model', '', true);
		
		if($exact =="")
			{$exact = "0";}
		else
			{$exact = "1";}
		
		if ($startdate == null)
				{
				$datesy = "n";
				}
		else
			{$datesy = "y";}
		
		if($enddate == null)	{
			$dateey = "n";
			}
		else
			{$dateey = "y";	
		}
		if ($datesy== "n" and $dateey + "y") {
				$startdate = "0001"; 
			}
		
		if ($dateey== "n" and $datesy == "y") {
				$enddate = "1950";
				$dateey = "y";
				}
		//echo '<script type="text/javascript">alert("' . $dateey.' ' . $exact. '") </script>';
		if($dateey =="n" & $exact == "1")	{
			if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_graves_family_name($lastname);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_graves_first_name($firstname);}
				else	{
				$query['query'] = $this->admin_model->get_graves_name($firstname,$lastname);
				}
		}		
		if($dateey =="n" & $exact == "0") {
				if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_graves_fuzzy_family_name($lastname);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_graves_fuzzy_first_name($firstname);}
				else	{
				$query['query'] = $this->admin_model->get_graves_fuzzy_name($firstname,$lastname);
				}
		}		
		
		if ($dateey =="y" & $exact == "0"){
				if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_graves_fuzzy_family_name_and_date($lastname,$startdate,$enddate);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_graves_fuzzy_first_name_and_date($firstname,$startdate,$enddate);}
				else	{
				$query['query'] = $this->admin_model->get_graves_fuzzy_name_and_date($firstname,$lastname,$startdate,$enddate);}
		}		
		
		if ($dateey =="y" & $exact == "1"){
				if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_graves_family_name_and_date($lastname,$startdate,$enddate);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_graves_first_name_and_date($firstname,$startdate,$enddate);}
				else	{
				$query['query'] = $this->admin_model->get_graves_name_and_date($firstname,$lastname,$startdate,$enddate);
				}
		}
			
        $this->load->view("search_pages/search_filtergraves.php",$query);	
	
	}
	
	public function filterSchoolsBr()
    {
		$this->load->model('admin_model', '', true);	
		$query['query'] = $this->admin_model->get_schools();
		$this->load->view("search_pages/search_filterschools.php",$query);	
	
	}
	
	
	public function filterSchoolsS()
    {
		
		$datesy = "n";
		$dateey = "n";
		$firstname = ($this->input->get('firstname'));		  
		$lastname = ($this->input->get('lastname'));
		$exact = ($this->input->get('exact_btn'));
		$startdate = ($this->input->get('start_date'));
		$enddate = ($this->input->get('end_date'));
		
		$this->load->model('admin_model', '', true);
		
		if($exact =="")
			{$exact = "0";}
		else
			{$exact = "1";}
		
		if ($startdate == null)
				{
				$datesy = "n";
				}
		else
			{$datesy = "y";}
		
		if($enddate == null)	{
			$dateey = "n";
			}
		else
			{$dateey = "y";	
		}
		if ($datesy== "n" and $dateey + "y") {
				$startdate = "0001"; 
			}
		
		if ($dateey== "n" and $datesy == "y") {
				$enddate = "1950";
				$dateey = "y";
				}
		//echo '<script type="text/javascript">alert("' . $dateey.' ' . $exact. '") </script>';
		if($dateey =="n" & $exact == "1")	{
			if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_school_family_name($lastname);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_school_first_name($firstname);}
				else	{
				$query['query'] = $this->admin_model->get_school_name($firstname,$lastname);
				}
		}		
		if($dateey =="n" & $exact == "0") {
				if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_school_fuzzy_family_name($lastname);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_school_fuzzy_first_name($firstname);}
				else	{
				$query['query'] = $this->admin_model->get_school_fuzzy_name($firstname,$lastname);
				}
		}		
		
		if ($dateey =="y" & $exact == "0"){
				if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_school_fuzzy_family_name_and_date($lastname,$startdate,$enddate);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_school_fuzzy_first_name_and_date($firstname,$startdate,$enddate);}
				else	{
				$query['query'] = $this->admin_model->get_school_fuzzy_name_and_date($firstname,$lastname,$startdate,$enddate);}
		}		
		
		if ($dateey =="y" & $exact == "1"){
				if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_school_family_name_and_date($lastname,$startdate,$enddate);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_school_first_name_and_date($firstname,$startdate,$enddate);}
				else	{
				$query['query'] = $this->admin_model->get_school_name_and_date($firstname,$lastname,$startdate,$enddate);
				}
		}
		
			$this->load->view("search_pages/search_filterschools.php",$query);	
	
	}
	public function filterParishBr()
    {
    $this->load->model('admin_model', '', true);	
	$query['query'] = $this->admin_model->get_parish();
    $this->load->view("search_pages/search_filterparish.php",$query);	
	
	}
	
	
	public function filterParishS()
    {
		$datesy = "n";
		$dateey = "n";
		$firstname = ($this->input->get('firstname'));		  
		$lastname = ($this->input->get('lastname'));
		$exact = ($this->input->get('exact_btn'));
		$startdate = ($this->input->get('start_date'));
		$enddate = ($this->input->get('end_date'));
		
		$this->load->model('admin_model', '', true);
		
		if($exact =="")
			{$exact = "0";}
		else
			{$exact = "1";}
		
		if ($startdate == null)
				{
				$datesy = "n";
				}
		else
			{$datesy = "y";}
		
		if($enddate == null)	{
			$dateey = "n";
			}
		else
			{$dateey = "y";	
		}
		if ($datesy== "n" and $dateey + "y") {
				$startdate = "0001"; 
			}
		
		if ($dateey== "n" and $datesy == "y") {
				$enddate = "1950";
				$dateey = "y";
				}
		//echo '<script type="text/javascript">alert("' . $dateey.' ' . $exact. '") </script>';
		if($dateey =="n" & $exact == "1")	{
			if ($firstname == NULL)  {
				$query1['query'] = $this->admin_model->get_parish_family_name($lastname);}
				elseif ($lastname ==NULL) {
					$query1['query'] = $this->admin_model->get_parish_first_name($firstname);}
				else	{
				$query1['query'] = $this->admin_model->get_parish_name($firstname,$lastname);
				}
		}		
		if($dateey =="n" & $exact == "0") {
				if ($firstname == NULL)  {
				$query1['query'] = $this->admin_model->get_parish_fuzzy_family_name($lastname);}
				elseif ($lastname ==NULL) {
					$query1['query'] = $this->admin_model->get_parish_fuzzy_first_name($firstname);}
				else	{
				$query1['query'] = $this->admin_model->get_parish_fuzzy_name($firstname,$lastname);
				}
		}		
		
		if ($dateey =="y" & $exact == "0"){
				if ($firstname == NULL)  {
				$query1['query'] = $this->admin_model->get_parish_fuzzy_family_name_and_date($lastname,$startdate,$enddate);}
				elseif ($lastname ==NULL) {
					$query1['query'] = $this->admin_model->get_parish_fuzzy_first_name_and_date($firstname,$startdate,$enddate);}
				else	{
				$query1['query'] = $this->admin_model->get_parish_fuzzy_name_and_date($firstname,$lastname,$startdate,$enddate);}
		}		
		
		if ($dateey =="y" & $exact == "1"){
				if ($firstname == NULL)  {
				$query1['query'] = $this->admin_model->get_parish_family_name_and_date($lastname,$startdate,$enddate);}
				elseif ($lastname ==NULL) {
					$query1['query'] = $this->admin_model->get_parish_first_name_and_date($firstname,$startdate,$enddate);}
				else	{
				$query1['query'] = $this->admin_model->get_parish_name_and_date($firstname,$lastname,$startdate,$enddate);
				}
		}		
		
		
        $this->load->view("search_pages/search_filterparish.php",$query1);	
	
	}
	
	public function filterAllS($all)
	
    {
		
		$datesy = "n";
		$dateey = "n";
		$firstname = ($this->input->get('firstname'));		  
		$lastname = ($this->input->get('lastname'));
		$exact = ($this->input->get('exact_btn'));
		$startdate = ($this->input->get('start_date'));
		$enddate = ($this->input->get('end_date'));
		
		$this->load->model('admin_model', '', true);
		
		if($exact =="")
			{$exact = "0";}
		else
			{$exact = "1";}
		
		if ($startdate == null)
				{
				$startdate = "1600";
				}
		
		if($enddate == null)	{
			$enddate = "1950";
			}
		
		
		
		if  ($exact == "0"){
				if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_all_fuzzy_family_name_and_date($lastname,$startdate,$enddate);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_all_fuzzy_first_name_and_date($firstname,$startdate,$enddate);}
				else	{
				$query['query'] = $this->admin_model->get_all_fuzzy_name_and_date($firstname,$lastname,$startdate,$enddate);}
				}		
			
					
				
					
		if ($exact == "1"){
				if ($firstname == NULL)  {
				$query['query'] = $this->admin_model->get_all_family_name_and_date($lastname,$startdate,$enddate);}
				elseif ($lastname ==NULL) {
					$query['query'] = $this->admin_model->get_all_first_name_and_date($firstname,$startdate,$enddate);}
				else	{
				$query['query'] = $this->admin_model->get_all_name_and_date($firstname,$lastname,$startdate,$enddate);
				}
		}	
		if ($all == "a") {
			$this->load->view("search_pages/search_filterall.php",$query);
			}
		if ($all == "b") {
			$this->load->view("search_pages/search_filterparishschool.php",$query);
			}
		if ($all == "c") {
			$this->load->view("search_pages/search_filterparishgraves.php",$query);
			}
		if ($all == "d") {
			$this->load->view("search_pages/search_filterschoolgraves.php",$query);
		}
				
				
	}
	
    public function searchDocuments()
    {
        $data['meta']['title'] = 'Search Rahan Documents';
        $data['meta']['desc'] = 'Search for historical documents related to Rahan ';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_search");
        $this->load->view("search_pages/search_documents");
        $this->load->view("include/site_footer");
    }
	
    
    public function StoriesView()
    {

        $this->load->model('Userstory_model');
        $this->load->helper('url_helper');
		$data['stories'] = $this->Userstory_model->getStories();
        $data['title'] = 'User Story';
		$data['meta']['title'] = 'Stories of Rahan';
        $data['meta']['desc'] = 'Stories of the People of Rahan';
		$this->load->view("include/site_header", $data);
		$this->load->view("include/site_navigation_stories");
        $this->load->view('story_pages/index', $data);
		$this->load->view("include/site_footer");
		
    }
 
    public function StoriesViewAStory()
    {
        $this->load->model('Userstory_model'); 
       $id = $this->uri->segment(3);
		 $data['story_item'] = $this->Userstory_model->getFullStory($id);
         $this->load->helper('form');
		 $data['title'] = 'View a Story';
		 
        if (empty($data['story_item']))
        {
            show_404();
        }
 
        $this->load->view('story_pages/stories_view', $data);
		
       
    }
    
    public function storiesTellAStory()
    {	
        $data['meta']['title'] = 'Want to Tell Your Rahan Story?';
        $data['meta']['desc'] = 'Want to share your Rahan Story?  You can submit it here with images';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_stories");
        $this->load->view("story_pages/stories_tellastory");
        $this->load->view("include/site_footer");	
    } 
	
	
    public function storiesWhereAreYou()
    {	
		$this->load->model('users_model', '', true);
		$data['meta']['title'] = 'Where are you - Rahan History';
        $data['meta']['desc'] = 'Display your location on a map of the world, Tell Rahan where you are!';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_stories");
		$this->load->view("story_pages/stories_whereareyou");
        $this->load->view("include/site_footer");
    }
    
     //Called from button click in storiesWhereAreYou
	public function storiesWhereAreYouMap()
    {	
		$this->load->model('users_model', '', true); 
		$query['query'] = $this->users_model->get_all_users();	
        $data['meta']['title'] = 'Where are you - Rahan History';
        $data['meta']['desc'] = 'Display your location on a map of the world, Tell Rahan where you are!';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_stories");
		$this->load->view("story_pages/stories_userslocationmap",$query);
        $this->load->view("include/site_footer");		
    }
	
    public function storiesChildrensPage()
    {
        $data['meta']['title'] = 'Educational Resources Rahan History for Children';
        $data['meta']['desc'] = 'Historical information about Rahan, Co. Offaly for children';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_stories");
        $this->load->view("story_pages/stories_childrenspage");
        $this->load->view("include/site_footer");
    }
    
    public function storiesGallery()
    {
        $data['meta']['title'] = 'Images of Rahan History';
        $data['meta']['desc'] = 'Photos, videos of Rahan History!';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_stories");
        $this->load->view("story_pages/stories_gallery");
        $this->load->view("include/site_footer");
    }
    
    public function storiesMythsandLegends()
    {
        $data['meta']['title'] = 'Myths and Legends of Rahan';
        $data['meta']['desc'] = 'Myths and legends about the area of Rahan';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_stories");
        $this->load->view("story_pages/stories_mythsandlegends");
        $this->load->view("include/site_footer");
    }
    
    public function Stories_fullStory()
    {
        $this->load->model('userstory_model');//model gets data from database
        $data['getStories'] = $this->userstory_model->getStories();//take result of query in getStories and put it into getStories array passing into variable  called data
        //$this->load->model('userstory_model');//model gets data from database
        //$data['id'] = $this->userstory_model->getFullStory();
        $this->load->view("include/site_header");
        $this->load->view("story_pages/stories_fullstory", $data);
    }
    
    public function contactPage()
    {
        $data['meta']['title'] = 'Contact Us!';
        $data['meta']['desc'] = 'Questions, requests and quaries on this page';
        $this->load->view("include/site_header", $data);
        $this->load->view("include/site_navigation_contact");
        $this->load->view("contact_page/contact_form_view");
        $this->load->view("include/site_footer");
    }
    
    public function galleryVideo1()
    {
        $data['meta']['title'] = 'Rahan History';
        $data['meta']['desc'] = 'Videos about Rahans past';
        $this->load->view("include/site_header", $data);
        $this->load->view("pop_ups/galleryvideo1");
    }
    
    public function galleryVideo2()
    {
        $data['meta']['title'] = 'Rahan History';
        $data['meta']['desc'] = 'Videos about Rahans past';
        $this->load->view("include/site_header", $data);
        $this->load->view("pop_ups/galleryvideo2");
    }
    
    public function galleryVideo3()
    {
        $data['meta']['title'] = 'Rahan History';
        $data['meta']['desc'] = 'Videos about Rahans past';
        $this->load->view("include/site_header", $data);
        $this->load->view("pop_ups/galleryvideo3");
    }
}