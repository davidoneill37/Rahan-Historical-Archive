<?php
class Administrationmodel extends CI_Model { //these are models for the admin page functionality
    
    function addUser()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $query = $this->db->insert('admin', $data); //insert into admin table all all in $data variable
        if($query)
        {
            ?>
            <script>alert('New user added');</script>
            <?php
            $this->load->view('admin_pages/admin_menu');
            return true; //if everything went well
        }
        else
        {
            return false;//if something failed
        }
    }
    
    function viewUsers()
    {    
        $query = $this->db->get('admin');
        return $query;
    }
    
    function addStories()
    {
        $data = array(
            'summary' => $this->input->post('summary'),
            'story' => $this->input->post('story')
        );
        $query = $this->db->insert('user_stories', $data); //insert into admin table all all in $data variable
        if($query)
        {
            ?>
            <script>alert('User story added');</script>
            <?php
            $this->load->view('admin_pages/admin_menu');
            return true; //if everything went well
        }
        else
        {
            return false;//if something failed
        }
    }
}
?>