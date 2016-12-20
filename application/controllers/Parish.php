<?php
//http://blog.chapagain.com.np/codeigniter-simple-mvc-crud-add-edit-delete-view/

class Parish extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        
		$this->load->model('admin_model', '', true); 	
		
        $this->load->helper('url_helper');
    }
 
    public function index()
    
	{	
        $data['parish'] = $this->admin_model->get_parish();
        $data['title'] = 'Parish Archive';
 
        $this->load->view('include/admin_parish/adminheader', $data);
        $this->load->view('parish/index', $data);
        $this->load->view('include/admin_parish/adminfooter');
    }
 
    public function view()
    { 
        
		$id = $this->uri->segment(3);
		 $data['parish_item'] = $this->admin_model->get_parish_by_id($id);
         $this->load->helper('form');
		 $data['title'] = 'View a parish item';
		 
        if (empty($data['parish_item']))
        {
            show_404();
        }
 
        
        $this->load->view('include/admin_parish/adminheader', $data);
        $this->load->view('parish/view', $data);
        $this->load->view('include/admin_parish/adminfooter');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a parish item';
 
        $this->form_validation->set_rules('familyname', 'Family Name', 'required');
		$this->form_validation->set_rules('eventyear', 'Event Year', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('include/admin_parish/adminheader', $data);
            $this->load->view('parish/create');
            $this->load->view('include/admin_parish/adminfooter');
 
        }
        else
        {
            $this->admin_model->set_parish();
            $this->load->view('include/admin_parish/adminheader', $data);
            $this->load->view('parish/success');
            $this->load->view('include/admin_parish/adminfooter');
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
        
        $data['title'] = 'Edit a Parish item';        
        $data['parish_item'] = $this->admin_model->get_parish_by_id($id);
        
       
        $this->form_validation->set_rules('familyname', 'Family Name', 'required');
		$this->form_validation->set_rules('eventyear', 'Event Year', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('include/admin_parish/adminheader', $data);
            $this->load->view('parish/edit', $data);
            $this->load->view('include/admin_parish/adminfooter');
 
        }
        else
        {
            $this->admin_model->set_parish($id);
            //$this->load->view('admin/success');
            redirect( base_url() . 'index.php/parish');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $graves_item = $this->admin_model->get_parish_by_id($id);
        
        $this->admin_model->delete_parish($id);        
        redirect( base_url() . 'index.php/parish');        
    }
}