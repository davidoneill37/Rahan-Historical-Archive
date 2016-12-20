<?php
class Logincontroller extends CI_Controller {
    
    function index()
    {
        $this->load->view('admin_pages/admin_login');
    }
    
    function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|callback_validate');//must be filled in
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run())
        {
            $session = array(
                'username' => $this->input->post('username'),//setting username used to create session to an arry which will display
                'is_logged_in' => 1
                );
                
            $this->session->set_userdata($session);
            redirect('logincontroller/admin_Menu');
        }
        else
        {
            $this->index();
        }
    }
    
    function admin_Menu()
    {
        if($this->session->userdata('is_logged_in'))
        {
            $this->load->view('admin_pages/admin_menu');
        }
        else
        {
            $this->index();
            ?>
            <script>alert('You are not logged in. Please log in to continue');</script>
            <?php
        }
        
    }
    
    function validate()
    {
        $this->load->model('loginmodel');
        
        if($this->loginmodel->checkDetails())//if model method returns a row
        {
            return true;//it works
        }
        else
        {
            $this->form_validation->set_message('validate', 'Incorrect username/Password');
            return false;//it doesnt work
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();//kills session
        redirect('logincontroller/index');
    }
}
?>