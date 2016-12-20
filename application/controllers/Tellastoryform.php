<?php
class Tellastoryform extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
    }

    function index()
    {
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        //run validation on form input- 
		
		
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            $data['meta']['title'] = 'Want to Tell Your Rahan Story?';
            $data['meta']['desc'] = 'Want to share your Rahan Story?  You can submit it here with images';
            $this->load->view("include/site_header", $data);
            $this->load->view("include/site_navigation_stories");
            $this->load->view("story_pages/stories_tellastory");
            $this->load->view("include/site_footer");       
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            //set to_email id to which you want to receive mails
            $to_email = 'rahanhistoricalarchive@gmail.com';
            $upload = $this->input->post('upload');
			
		   //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'rahanhistoricalarchive@gmail.com';
            $config['smtp_pass'] = 'teamrealta';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);                        

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->attach($upload);
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                $data['meta']['title'] = 'Want to Tell Your Rahan Story?';
                $data['meta']['desc'] = 'Want to share your Rahan Story?  You can submit it here with images';
                $this->load->view("include/site_header", $data);
                $this->load->view("include/site_navigation_stories");
                $this->load->view("story_pages/stories_tellastory");
                $this->load->view("include/site_footer");;
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                $data['meta']['title'] = 'Want to Tell Your Rahan Story?';
                $data['meta']['desc'] = 'Want to share your Rahan Story?  You can submit it here with images';
                $this->load->view("include/site_header", $data);
                $this->load->view("include/site_navigation_stories");
                $this->load->view("story_pages/stories_tellastory");
                $this->load->view("include/site_footer");
            }
        }
    }
    
    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
?>