<?php
//http://blog.chapagain.com.np/codeigniter-simple-mvc-crud-add-edit-delete-view/

class Schools extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        
		$this->load->model('admin_model', '', true); 	
		
        $this->load->helper('url_helper');
    }
 
    public function index()
    
	{	
        $data['schools'] = $this->admin_model->get_schools();
        $data['title'] = 'Schools archive';
 
        $this->load->view('include/admin_schools/adminheader', $data);
        $this->load->view('schools/index', $data);
        $this->load->view('include/admin_schools/adminfooter');
    }
 
    public function view()
    { 
        
		$id = $this->uri->segment(3);
		
		 $data['schools_item'] = $this->admin_model->get_school_by_id($id);
        //$data['graves_item'] = $this->admin_model->get_schools($id);
         $this->load->helper('form');
		 $data['title'] = 'View a school item';
		 
        if (empty($data['schools_item']))
        {
            show_404();
        }
 
        
        $this->load->view('include/admin_schools/adminheader', $data);
        $this->load->view('schools/view', $data);
        $this->load->view('include/admin_schools/adminfooter');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a school item';
 
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('school', 'School', 'required');
       
		
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('include/admin_schools/adminheader', $data);
            $this->load->view('schools/create');
            $this->load->view('include/admin_schools/adminfooter');
 
        }
        else
        {
            $this->admin_model->set_school();
            $this->load->view('include/admin_schools/adminheader', $data);
            $this->load->view('schools/success');
            $this->load->view('include/admin_schools/adminfooter');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a school item';        
        $data['schools_item'] = $this->admin_model->get_school_by_id($id);
        
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('school', 'School', 'required');
		
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('include/admin_schools/adminheader', $data);
            $this->load->view('schools/edit', $data);
            $this->load->view('include/admin_schools/adminfooter');
 
        }
        else
        {
            $this->admin_model->set_school($id);
            //$this->load->view('admin/success');
            redirect( base_url() . 'index.php/schools');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $schools_item = $this->admin_model->get_school_by_id($id);
        
        $this->admin_model->delete_school($id);        
        redirect( base_url() . 'index.php/schools');        
    }
}