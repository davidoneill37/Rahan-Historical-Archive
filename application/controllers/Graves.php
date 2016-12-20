<?php
//http://blog.chapagain.com.np/codeigniter-simple-mvc-crud-add-edit-delete-view/

class Graves extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        
		$this->load->model('admin_model', '', true); 	
		
        $this->load->helper('url_helper');
    }
 
    public function index()
    
	{	
        $data['graves'] = $this->admin_model->get_graves();
        $data['title'] = 'graveyards archive';
 
        $this->load->view('include/admin_graves/adminheader', $data);
        $this->load->view('graves/index', $data);
        $this->load->view('include/admin_graves/adminfooter');
    }
 
    public function view()
    { 
        
		$id = $this->uri->segment(3);
		 $data['graves_item'] = $this->admin_model->get_grave_by_id($id);
        //$data['graves_item'] = $this->admin_model->get_graves($id);
         $this->load->helper('form');
		 $data['title'] = 'View a graveyard item';
		 
        if (empty($data['graves_item']))
        {
            show_404();
        }
 
        
        $this->load->view('include/admin_graves/adminheader', $data);
        $this->load->view('graves/view', $data);
        $this->load->view('include/admin_graves/adminfooter');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a graveyard item';
 
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('graveyard', 'Graveyard', 'required');
        $this->form_validation->set_rules('headstonenumber', 'Headstone Number', 'required');
		
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('include/admin_graves/adminheader', $data);
            $this->load->view('graves/create');
            $this->load->view('include/admin_graves/adminfooter');
 
        }
        else
        {
            $this->admin_model->set_grave();
            $this->load->view('include/admin_graves/adminheader', $data);
            $this->load->view('graves/success');
            $this->load->view('include/admin_graves/adminfooter');
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
        
        $data['title'] = 'Edit a graveyard item';        
        $data['graves_item'] = $this->admin_model->get_grave_by_id($id);
        
       
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('graveyard', 'Graveyard', 'required');
        $this->form_validation->set_rules('headstonenumber', 'Headstone_Number', 'required');
		
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('include/admin_graves/adminheader', $data);
            $this->load->view('graves/edit', $data);
            $this->load->view('include/admin_graves/adminfooter');
 
        }
        else
        {
            $this->admin_model->set_grave($id);
            //$this->load->view('admin/success');
            redirect( base_url() . 'index.php/graves');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $graves_item = $this->admin_model->get_grave_by_id($id);
        
        $this->admin_model->delete_grave($id);        
        redirect( base_url() . 'index.php/graves');        
    }
}