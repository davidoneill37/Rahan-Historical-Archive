<?php
class Userstory_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();	
		
    }


    function getStories()
    {
        $query = $this->db->get('user_stories');
		
        return $query->result_array();
    }
    
    function getFullStory($id = 0)
   // {
   //     $query = $this->db->get_where('user_stories', array('id' => $id), $limit, $offset);
      
	
	//return $query;
   // public function get_grave_by_id($id = 0)
   
    {
        if ($id === 0)
        {
            $query = $this->db->get('user_stories');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('user_stories', array('id' => $id));
        return $query->row_array();
    } 
}

?>