<?php
class users_model extends CI_Model {
	
	
	
	 public function __construct()
	{
		//Call the Model constructor
		parent::__construct();
	}
	public function get_all_users()
	{
		$query = $this->db->get('users_lat_lon');	
		return $query->result();
	}
	
	
	public function insert_user($lat, $lon) {

		$this->lat = $lat;
		$this->lon = $lon;		
		
		$this->db->insert('users_lat_lon', $this);
		
	}
}
?>
