<?php
class Story extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Userstory_model');
        $this->load->helper('url_helper');
    }
 
   
 
    public function view()
    {
        
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
    
    
}