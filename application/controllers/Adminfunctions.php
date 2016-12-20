<?php
class Adminfunctions extends CI_Controller
{
    //navigation. Maybe in site control? But afraid of security issue if that controller is compromised
    function returnMainMenu()
    {
        $this->load->view('admin_pages/admin_menu');
    }
    
    function addUserPage()
    {
        $this->load->view('admin_pages/admin_adduser');
    }
    
    function editUserPage()
    {
        $this->load->view('admin_pages/admin_edituser');
    }
    
    function deleteUserPage()
    {
        $this->load->view('admin_pages/admin_deleteuser');
    }
    
    //navigation for story options
    function addUserStory()
    {
        $this->load->view('admin_pages/admin_addstory');
    }
    
    //Admin functionality - users
    function addUser()
    {
        $this->load->library('form_validation');//CI library for form validation
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]');//valid_email if username changed to email
        $this->form_validation->set_rules('password', 'Password', 'required|trim');//md5 can go here
        
        $this->form_validation->set_message('is_unique', 'That username already exists');//change message for is_unique method
        
        if($this->form_validation->run())//if validation runs
        {
            $this->load->model('administrationmodel');//load model
            $this->administrationmodel->addUser();//use fxn addUser in model
        }
        
        else
        {
            $this->load->view('admin_pages/admin_adduser');//if it doesnt run return to page
            ?>
            <script>alert('New user submit failed');</script><!--JS alert saying error-->
            <?php
        }
    }
    
    function showUsers()
    {
        $this->load->model('administrationmodel');//load model which has SQL query
        $data['fetch_data'] = $this->administrationmodel->viewUsers();//access method viewUsers in this method
        $this->load->view('admin_pages/admin_viewusers', $data);//laod this view and pass data into it
    }
    
    function deleteUsers()
    {
        
    }
    
    //admin functionality - stories
    function addStory()
    {
        $this->load->model('administrationmodel');//load model
        $this->administrationmodel->addStories();//no need for validation here as admin will edit story before uploading
    }
    
}
?>