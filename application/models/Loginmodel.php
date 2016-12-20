<?php
class Loginmodel extends CI_Model {//this model check user details to log into admin pages
    
    function checkDetails()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));//$this->db->wheremd5(('', $this->input->post(''));
        
        $query = $this->db->get('admin');//Table we are querying
        
        if($query->num_rows() == 1)//if something is returned
        {
            
            return true;
        }
        else
        {
            return false;
        }
    }
    
}

?>