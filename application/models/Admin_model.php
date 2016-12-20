<?php
class Admin_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();	
		
    }
    
    public function get_graves()
    {
        
            $query = $this->db->get('graveyard');
            return $query->result_array();
       
    }
    public function get_grave_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('graveyard');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('graveyard', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_grave($id = 0)
    {
        $this->load->helper('url');
 
        $lastname = url_title($this->input->post('lastname'), 'dash', TRUE);
 
        $data = array(
			'Type_of_Record' => $this->input->post('typeofrecord'),
			'Graveyard' => $this->input->post('graveyard'),
            'Firstname' => $this->input->post('firstname'),
            'Lastname' => $this->input->post('lastname'),
			'Maiden_Name' => $this->input->post('maidenname'),
			'Date_d' => $this->input->post('dated'),
			'Date_m' => $this->input->post('datem'),
			'Date_Year' => $this->input->post('dateyear'),
			'Inscription' => $this->input->post('inscription'),
			"Headstone_Number" => $this->input->post('headstonenumber'),
			'Age' => $this->input->post('age'),
			'Other' => $this->input->post('other'),
			"Image_Url" => $this->input->post('imageurl')
			
        );
        
        if ($id == 0) {
            return $this->db->insert('graveyard', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('graveyard', $data);
        }
    }
    
    public function delete_grave($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('graveyard');
    }
	
	public function get_graves_name($firstname, $lastname)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE  Firstname  = $firstname AND (Lastname = $lastname or Maiden_Name = $lastname) ';	
		
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			$field_name[3] = "Maiden_Name";
			
			$query_3=$field_name[3]."='".$field_value[1]."'";
			
			$sql = "SELECT * FROM graveyard WHERE $query_1 AND ($query_2 OR $query_3)";
			
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 }
	 public function get_graves_first_name($firstname)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	// Showing the sql in this way made a change of search easy to make.
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE  Firstname  = $firstname  ';	
	
		$field_name[0] = "Firstname";
			
		$field_value[0] = $firstname;
			
		$query_1=$field_name[0]."='".$field_value[0]."'";
			
		$sql = "SELECT * FROM graveyard WHERE $query_1" ;
			
		$query = $this->db->query($sql);
		
		return $query->result_array();
	
	 }
	 
	 public function get_graves_family_name($lastname)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE  Lastname = $lastname or Maiden_Name = $lastname)) ';	
			
			$field_name[0] = "Maiden_Name";
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$query_1=$field_name[1]."='".$field_value[1]."'";
			$query_2=$field_name[0]."='".$field_value[1]."'";
			$sql = "SELECT * FROM graveyard WHERE $query_1 OR $query_2" ;
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 } 
	
	 
	 public function get_graves_fuzzy_name($firstname, $lastname)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE Firstname  like $firstname AND (Lastname like $lastname or Maiden_Name = $lastname)) ';	
		
		
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_name[0] = "Firstname";
			$field_value[0] = $part;
			
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Lastname";
			$field_value[1] = $part;
			
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			$field_name[2] = "Maiden_Name";
			$field_value[2] = $lastname;
			
			$query_3=$field_name[2]."='".$field_value[2]."'";
			
			$sql = "SELECT * FROM graveyard WHERE $query_1 AND ($query_2 OR $query_3)"  ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 } 
	 
	 public function get_graves_fuzzy_first_name($firstname)
	
	// Fetch the result array selection for graveyard from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE ((Lastname like $lastname)) ';	
		
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_name[1] = "Firstname";
			$field_value[1] = $part;
			$query_2= $field_name[1]." like '".$field_value[1]."%'";
			
			
			$sql = "SELECT * FROM graveyard WHERE $query_2" ;
		//echo '<script type="text/javascript">alert("' . $sql. '") </script>';	
			
			$query = $this->db->query($sql);
		
		
			return $query->result_array();
	
	 }
	 
	 public function get_graves_fuzzy_family_name($lastname)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE ((Lastname like $lastname or Maiden_Name = $lastname)) ';	
		
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Lastname";
			$field_value[1] = $part;
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			$field_name[3] = "Maiden_Name";
			$field_value[3] = $lastname;
			$query_3=$field_name[3]."='".$field_value[3]."'";
			
			$sql = "SELECT * FROM graveyard WHERE $query_2 OR $query_3" ;
			
			
		$query = $this->db->query($sql);
		
		
	return $query->result_array();
	
	 }
	 
	 public function get_graves_name_and_date($firstname, $lastname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE (Death >= $date1 AND <$date2) AND( Firstname  = $firstname AND (Lastname = $lastname or Maiden_Name = $lastname)) ';	
		
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";  
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$field_name[5] = "Maiden_Name";
			$field_value[5] = $lastname;
			$query_5=$field_name[5]."='".$field_value[5]."'";

			
			$sql = "SELECT * FROM graveyard WHERE $query_1 AND  ($query_2 OR $query_5) AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
			$query = $this->db->query($sql);
		
			return $query->result_array();
	 } 
	 
	 public function get_graves_first_name_and_date($firstname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE (Death >= $date1 AND < $date2) AND( Firstname  = $firstname) ';	
		
		
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate +1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM graveyard WHERE $query_1 AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			

		$query = $this->db->query($sql);
		
		return $query->result_array();
	 }
	 
	 
	 public function get_graves_family_name_and_date($lastname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	// Showing the sql in this way made a change of search easy to make.
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE (Death >= $date1 AND <$date2) AND (Lastname = $lastname or Maiden_Name = $lastname)) ';	
		
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			
			$field_name[5] = "Maiden_Name";
			$field_value[5] = $lastname;
			$query_5=$field_name[5]."='".$field_value[5]."'";
			
			
			$sql = "SELECT * FROM graveyard WHERE ($query_2 OR $query_5) AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
			$query = $this->db->query($sql);
		
		
		return $query->result_array();
	 }
	 
	 public function get_graves_fuzzy_first_name_and_date($firstname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE (Death>= $date1 AND <$date2) AND( Firstname  = $firstname) ';	
		
			$field_name[0] = "Firstname";
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_value[0] = $part;
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM graveyard WHERE $query_1 AND $query_3 AND $query_4" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);	
		
		return $query->result_array();
	 }
	 public function get_graves_fuzzy_name_and_date($firstname,$lastname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE (Death >= $date1 < AND $date2) AND( Firstname  = $firstname AND (Lastname = $lastname or Maiden_Name = $lastname)) ';	
		
			$field_name[0] = "Firstname";
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_value[0] = $part;
			
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Lastname";
			$field_value[1] = $part;
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			$field_name[5] = "Maiden_Name";
			$field_value[5] = $lastname;
			$query_5=$field_name[5]."='".$field_value[5]."'";
			
			$sql = "SELECT * FROM graveyard WHERE $query_1 AND ($query_2 OR $query_5) AND $query_3 AND $query_4" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);
			
			return $query->result_array();
	 }
	 
	 public function get_graves_fuzzy_family_name_and_date($lastname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM graveyard
		//	WHERE (Death >= date1 AND < date2) AND (Lastname = $lastname or Maiden_Name = $lastname)) ';	
			
			$field_name[0] = "Maiden_Name";
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			$query_1=$field_name[0]."='".$field_value[1]."'";
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_value[1] = $part;
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM graveyard WHERE ($query_2 OR $query_1) AND $query_3 AND $query_4" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);
			
			return $query->result_array();
	 }
        
	public function get_schools()
    {
    
            $query = $this->db->get('school');
            return $query->result_array();
       
    }
    public function get_school_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('school');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('school', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_school($id = 0)
    {
        $this->load->helper('url');
 
        $lastname = url_title($this->input->post('lastname'), 'dash', TRUE);
 
        $data = array(
			'Type_of_Record' => $this->input->post('typeofrecord'),
			'School' => $this->input->post('school'),
			'Date_d' => $this->input->post('dated'),
			'Date_m' => $this->input->post('datem'),
			'Date_Year' => $this->input->post('dateyear'),
			'Registration_Number' => $this->input->post('registrationnumber'),
			'Lastname' => $this->input->post('lastname'),
			'Firstname' => $this->input->post('firstname'),
			'Datebirth_d' => $this->input->post('datebirthd'),
			'Datebirth_m' => $this->input->post('datebirthm'),
			'Datebirth_Year' => $this->input->post('datebirthyear'),
			"Religion" => $this->input->post('religion'),
			'Address' => $this->input->post('address'),
			'Fathers_Occupation' => $this->input->post('fathersoccupation'),
			"Previous_School" => $this->input->post('previousschool')	
        );
        
        if ($id == 0) {
            return $this->db->insert('school', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('school', $data);
        }
    }
    
    public function delete_school($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('school');
    }


public function get_school_name($firstname, $lastname)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE  Firstname  = $firstname AND (Lastname = $lastname) ';	
		
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			$sql = "SELECT * FROM school WHERE $query_1 AND $query_2";
			
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 }
	 public function get_school_first_name($firstname)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	// Showing the sql in this way made a change of search easy to make.
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE  Firstname  = $firstname  ';	
	
		$field_name[0] = "Firstname";
			
		$field_value[0] = $firstname;
			
		$query_1=$field_name[0]."='".$field_value[0]."'";
			
		$sql = "SELECT * FROM school WHERE $query_1" ;
		//echo '<script type="text/javascript">alert("' . $sql. '") </script>';	
		$query = $this->db->query($sql);
		
		return $query->result_array();
	
	 }
	 
	 public function get_school_family_name($lastname)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE  Lastname = $lastname)) ';	
			
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$query_1=$field_name[1]."='".$field_value[1]."'";
			
			$sql = "SELECT * FROM school WHERE $query_1" ;
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 }
	 public function get_school_fuzzy_name($firstname, $lastname)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE Firstname  like $firstname AND (Lastname like $lastname)) ';	
		
		
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_name[0] = "Firstname";
			$field_value[0] = $part;
			
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Lastname";
			$field_value[1] = $part;
			
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$sql = "SELECT * FROM school WHERE $query_1 AND $query_2"  ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);
		
			return $query->result_array();
	
	 } 
	 public function get_school_fuzzy_family_name($lastname)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE ((Lastname like $lastname)) ';	
		
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Lastname";
			$field_value[1] = $part;
			$query_2= $field_name[1]." like '".$field_value[1]."%'";
			
			
			$sql = "SELECT * FROM school WHERE $query_2" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);
		
		
			return $query->result_array();
	
	 }
	 public function get_school_fuzzy_first_name($firstname)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE ((Lastname like $lastname)) ';	
		
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_name[1] = "Firstname";
			$field_value[1] = $part;
			$query_2= $field_name[1]." like '".$field_value[1]."%'";
			
			
			$sql = "SELECT * FROM school WHERE $query_2" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);
		
		
			return $query->result_array();
	
	 }
	 
	 
	 
	 public function get_school_name_and_date($firstname, $lastname,$startdate,$enddate)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE (Death >= $date1 AND <$date2) AND( Firstname  = $firstname AND (Lastname = $lastname)) ';	
		
		
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate +1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";  
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM school WHERE $query_1 AND $query_2 AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	 } 
	 
	 public function get_school_first_name_and_date($firstname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE (Date_of_Entry >= $date1 AND < $date2) AND( Firstname  = $firstname) ';	
		
		
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM school WHERE $query_1 AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			

		$query = $this->db->query($sql);
		
		return $query->result_array();
	 }
	 
	 
	 public function get_school_family_name_and_date($lastname,$startdate,$enddate)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	// Showing the sql in this way made a change of search easy to make.
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE (Date_of_Entry >= $date1 AND <$date2) AND (Lastname = $lastname)) ';	
		
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			
			
			
			$sql = "SELECT * FROM school WHERE $query_2 AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
			$query = $this->db->query($sql);
		
		
		return $query->result_array();
	 }
	 
	 public function get_school_fuzzy_first_name_and_date($firstname,$startdate,$enddate,$query)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE (Date_of_Entry>= $date1 AND <$date2) AND( Firstname  = $firstname) ';	
		
			$field_name[0] = "Firstname";
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_value[0] = $part;
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM school WHERE $query_1 AND $query_3 AND $query_4" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);	
		
		return $query->result_array();
	 }
	 public function get_school_fuzzy_name_and_date($firstname,$lastname,$startdate,$enddate)
	
	// Fetch the result array selection for school from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE (Date_of_Entry >= $date1 < AND $date2) AND( Firstname  = $firstname AND (Lastname = $lastname)) ';	
		
			$field_name[0] = "Firstname";
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_value[0] = $part;
			
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Lastname";
			$field_value[1] = $part;
			
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			
			$sql = "SELECT * FROM school WHERE $query_1 AND $query_2 AND $query_3 AND $query_4" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);
			
			return $query->result_array();
	 }
	 
	 public function get_school_fuzzy_family_name_and_date($lastname,$startdate,$enddate)
	
	// Fetch the result array selection for school from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM school
		//	WHERE (Date_of_Entry >= date1 AND < date2) AND (Lastname = $lastname)) ';	
			
			
			$field_name[1] = "Lastname";
			$field_value[1] = $lastname;
			
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_value[1] = $part;
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[2] = "Date_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM school WHERE $query_2 AND $query_3 AND $query_4" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);
			
			return $query->result_array();
	 }
	 public function get_parish()
    {
        
            $query = $this->db->get('parish');
            return $query->result_array();
       
    }
	 
	
    public function get_parish_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('parish');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('parish', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_parish($id = 0)
    {
        $this->load->helper('url');
 
        $firstname = url_title($this->input->post('firstname'), 'dash', TRUE);
 
        $data = array(
			
			'Type_of_Record' => $this->input->post('typeofrecord'),
            'Firstname' => $this->input->post('firstname'),
			'Groom_Firstname' => $this->input->post('groomfirstname'),
			'Bride_Firstname' => $this->input->post('bridefirstname'),
			'Family_Name' => $this->input->post('familyname'),
			'Maiden_Name' => $this->input->post('maidenname'),
			'Event_D' => $this->input->post('eventd'),
			'Event_M' => $this->input->post('eventm'),
			'Event_Year' => $this->input->post('eventyear'),
			'Sex' => $this->input->post('sex'),
			'Fathers_First_Name' => $this->input->post('fathersfirstname'),
			"Fathers_Surname" => $this->input->post('fatherssurname'),
			'Mothers_First_Name' => $this->input->post('mothersfirstname'),
			"Mothers_Maiden_Name" => $this->input->post('mothersmaidenname'),
			'Witness1_Firstname' => $this->input->post('witness1firstname'),
			"Witness1_Surname" => $this->input->post('witness1surname'),
			'Witness2_Firstname' => $this->input->post('witness2firstname'),
			"Witness2_Surname" => $this->input->post('witness2surname'),
			"Reference" => $this->input->post('reference')
			
			
        );
        
        if ($id == 0) {
            return $this->db->insert('parish', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('parish', $data);
        }
    }
    
    public function delete_parish($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('parish');
    }
	 
	 public function get_parish_name($firstname, $lastname)
	
	// Fetch the result array selection for parish table from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE  Firstname  = $firstname AND (Lastname = $lastname) ';	
			
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			$field_name[2] = "Groom_Firstname";
			$field_name[3] = "Bride_Firstname";
			$field_name[4] = "Maiden_Name";
			
			$query_3=$field_name[2]."='".$field_value[0]."'";
			$query_4=$field_name[3]."='".$field_value[0]."'";
			$query_5=$field_name[4]."='".$field_value[1]."'";
			
			$sql = "SELECT * FROM parish WHERE (($query_1 OR $query_3 OR $query_4) AND $query_2) OR ($query_5 AND $query_4)";
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
			$query1 = $this->db->query($sql);
		
			return $query1->result_array();
	
	 }
	 public function get_parish_first_name($firstname)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE  Firstname  = $firstname  ';	
	
		$field_name[0] = "Firstname";
			
		$field_value[0] = $firstname;
			
		$query_1=$field_name[0]."='".$field_value[0]."'";
		
			$field_name[1] = "Groom_Firstname";
			$field_name[2] = "Bride_Firstname";
			
			$query_2=$field_name[1]."='".$field_value[0]."'";
			$query_3=$field_name[2]."='".$field_value[0]."'";
		
			
		$sql = "SELECT * FROM parish WHERE $query_1 OR $query_2 OR $query_3" ;
		//echo '<script type="text/javascript">alert("' . $sql. '") </script>';	
		$query1 = $this->db->query($sql);
		
		return $query1->result_array();
	
	 }
	 
	 public function get_parish_family_name($lastname)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE  Lastname = $lastname)) ';	
			
			$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			
			$query_1=$field_name[1]."='".$field_value[1]."'";
			
			$field_name[2] = "Maiden_Name";
			
			$query_2=$field_name[2]."='".$field_value[1]."'";
			
			
			
			$sql = "SELECT * FROM parish WHERE $query_1 OR $query_2" ;
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
		$query1 = $this->db->query($sql);
		
	return $query1->result_array();
	
	 }
	 public function get_parish_fuzzy_name($firstname, $lastname)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE Firstname  like $firstname AND (Lastname like $lastname)) ';	
		
		
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_name[0] = "Firstname";
			$field_value[0] = $part;
			
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Family_Name";
			$field_value[1] = $part;
			
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			$field_name[2] = "Groom_Firstname";
			$field_name[3] = "Bride_Firstname";
			$field_name[4] = "Maiden_Name";
			
			$query_3=$field_name[2]." like '".$field_value[0]."%'";
			$query_4=$field_name[3]." like '".$field_value[0]."%'";
			$query_5=$field_name[4]." like'".$field_value[1]."%'";
			
			$sql = "SELECT * FROM parish WHERE (($query_1 OR $query_3 OR $query_4) AND $query_2) OR ($query_5 AND $query_4)";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query1 = $this->db->query($sql);
		
			return $query1->result_array();
	
	 } 
	 public function get_parish_fuzzy_family_name($lastname)
	
	// Fetch the result array selection for schools from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE ((Lastname like $lastname)) ';	
		
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Family_Name";
			$field_value[1] = $part;
			$query_2= $field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[2] = "Maiden_Name";
			
			$query_3=$field_name[2]." like'".$field_value[1]."%'";
			
			$sql = "SELECT * FROM parish WHERE $query_2 OR $query_3" ;
			
			
			$query1 = $this->db->query($sql);
		
		
			return $query1->result_array();
	
	 }
	 public function get_parish_fuzzy_first_name($firstname)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE ((Lastname like $lastname)) ';	
		
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_name[1] = "Firstname";
			$field_value[1] = $part;
			$query_2= $field_name[1]." like '".$field_value[1]."%'";
			$field_name[2] = "Groom_Firstname";
			$field_name[3] = "Bride_Firstname";
			
			$query_3=$field_name[2]." like '".$field_value[1]."%'";
			$query_4=$field_name[3]." like '".$field_value[1]."%'";
			
			
			$sql = "SELECT * FROM parish WHERE $query_2 OR $query_3 OR $query_4" ;
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
			$query1 = $this->db->query($sql);
		
		
			return $query1->result_array();
	
	 }
	 
	 
	 
	 public function get_parish_name_and_date($firstname, $lastname,$startdate,$enddate)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE (Death >= $date1 AND <$date2) AND( Firstname  = $firstname AND (Lastname = $lastname)) ';	
		
		
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			$field_name[5] = "Groom_Firstname";
			$field_name[6] = "Bride_Firstname";
			$field_name[7] = "Maiden_Name";
			
			$query_5=$field_name[5]." = '".$field_value[0]."'";
			$query_6=$field_name[6]." = '".$field_value[0]."'";
			$query_7=$field_name[7]." = '".$field_value[1]."'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1 ;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";  
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM parish WHERE ((($query_1 OR $query_5 OR $query_6)  AND $query_2) OR ($query_6 AND $query_7)) AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
		$query1 = $this->db->query($sql);
		
	return $query1->result_array();
	 } 
	 
	 public function get_parish_first_name_and_date($firstname,$startdate,$enddate)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE (Date_year >= $date1 AND < $date2) AND( Firstname  = $firstname) ';	
		
		
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			
			$field_name[4] = "Groom_Firstname";
			$field_name[5] = "Bride_Firstname";
			
			
			$query_5=$field_name[4]." = '".$field_value[0]."'";
			$query_6=$field_name[5]." = '".$field_value[0]."'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM parish WHERE ($query_1 OR $query_5 OR $query_6) AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			

		$query1 = $this->db->query($sql);
		
		return $query1->result_array();
	 }
	 
	 
	 public function get_parish_family_name_and_date($lastname,$startdate,$enddate)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE (Date_year >= $date1 AND <$date2) AND (Lastname = $lastname)) ';	
		
			$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			
			$field_name[4] = "Maiden_Name";
			
			$query_5=$field_name[4]." = '".$field_value[1]."'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			
			
			
			$sql = "SELECT * FROM parish WHERE ($query_2 OR $query_5) AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			
			$query1 = $this->db->query($sql);
		
		
		return $query1->result_array();
	 }
	 
	 public function get_parish_fuzzy_first_name_and_date($firstname,$startdate,$enddate,$query1)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE (Event_Year>= $date1 AND <$date2) AND( Firstname  = $firstname) ';	
		
			$field_name[0] = "Firstname";
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_value[0] = $part;
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			$field_name[4] = "Groom_Firstname";
			$field_name[5] = "Bride_Firstname";
			
			
			$query_5=$field_name[4]." like '".$field_value[0]."%'";
			$query_6=$field_name[5]." like '".$field_value[0]."%'";	
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate+ 1;
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM parish WHERE ($query_1 OR $query_5 OR $query_6) AND $query_3 AND $query_4" ;
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query = $this->db->query($sql);	
		
		return $query->result_array();
	 }
	 public function get_parish_fuzzy_name_and_date($firstname,$lastname,$startdate,$enddate)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE (Date_of_Entry >= $date1 < AND $date2) AND( Firstname  = $firstname AND (Lastname = $lastname)) ';	
		
			$field_name[0] = "Firstname";
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_value[0] = $part;
			
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_name[1] = "Family_Name";
			$field_value[1] = $part;
			
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[4] = "Groom_Firstname";
			$field_name[5] = "Bride_Firstname";
			$field_name[6] = "Maiden_Name";
			
			$query_5=$field_name[4]." like '".$field_value[0]."%'";
			$query_6=$field_name[5]." like '".$field_value[0]."%'";
			$query_7=$field_name[6]." like'".$field_value[1]."%'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate +1;
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			
			$sql = "SELECT * FROM parish WHERE ((($query_1 OR $query_5 OR $query_6)  AND $query_2) OR ($query_6 AND $query_7)) AND $query_3 AND $query_4";
			
			//echo '<script type="text/javascript">alert("' . $sql. '") </script>';
			$query1 = $this->db->query($sql);
			
			return $query1->result_array();
	 }
	 
	 public function get_parish_fuzzy_family_name_and_date($lastname,$startdate,$enddate)
	
	// Fetch the result array selection for parish from the result object and return to Controller
	{ 
		//$sql =	'SELECT * FROM parish
		//	WHERE (Death >= date1 AND < date2) AND (Lastname = $lastname)) ';	
			
			
			$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_value[1] = $part;
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[4] = "Maiden_Name";
			
			
			$query_5=$field_name[4]." like'".$field_value[1]."%'";
			
			
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$sql = "SELECT * FROM parish WHERE ($query_2 OR $query_5) AND $query_3 AND $query_4" ;
			
			
			$query1 = $this->db->query($sql);
			
			return $query1->result_array();
	 }

public function get_all_fuzzy_family_name_and_date($lastname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
			$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_value[1] = $part;
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[4] = "Maiden_Name";
			
			$query_5=$field_name[4]." like '".$field_value[1]."%'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$field_name[6] = "Lastname";
			
			$query_6=$field_name[6]." like '".$field_value[1]."%'";
			
			$field_name[7] = "Date_Year";
			
			$query_7=$field_name[7].">='".$field_value[2]."'";
			$query_8=$field_name[7]."<'".$field_value[3]."'";
					
			$query_9=$field_name[4]." like '".$field_value[1]."%'";
			
			
			$sql = "SELECT id, Type_of_Record, Firstname, Lastname, Date_D, Date_M, Date_Year,
			Registration_Number, Datebirth_D, Datebirth_M , Datebirth_Year, School, Religion,
			Address, Fathers_Occupation, Previous_School, null as Groom_Firstname, null as Bride_Firstname, null as Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url  FROM school WHERE $query_6 AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Lastname, Date_d, Date_m, Date_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, null as Groom_Firstname, null as Bride_Firstname, Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, Graveyard, Age,
			Inscription, Headstone_Number, Other, Image_Url FROM graveyard WHERE ($query_6 OR $query_9) AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Family_Name, Event_D, Event_M, Event_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, Groom_Firstname, Bride_Firstname, Maiden_Name,
			Sex, Fathers_First_Name, Fathers_Surname, Mothers_First_Name,
			Mothers_Maiden_Name, Witness1_Firstname, Witness1_Surname,
			Witness2_Firstname, Witness2_Surname, Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url 
			FROM parish WHERE ($query_2 OR $query_5) AND $query_3 AND $query_4";
			
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 }
	 public function get_all_family_name_and_date($lastname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
		$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			
			$field_name[4] = "Maiden_Name";
			
			$query_5=$field_name[4]." = '".$field_value[1]."'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			
			$field_name[6] = "Lastname";
			
			$query_6=$field_name[6]."='".$field_value[1]."'";
			
			$field_name[7] = "Date_Year";
			
			$query_7=$field_name[7].">='".$field_value[2]."'";
			$query_8=$field_name[7]."<'".$field_value[3]."'";	
			$query_9=$field_name[4]."='".$field_value[1]."'";
			
			
			$sql = "SELECT id, Type_of_Record, Firstname, Lastname, Date_D, Date_M, Date_Year,
			Registration_Number, Datebirth_D, Datebirth_M , Datebirth_Year, School, Religion,
			Address, Fathers_Occupation, Previous_School, null as Groom_Firstname, null as Bride_Firstname, null as Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url  FROM school WHERE $query_6 AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Lastname, Date_d, Date_m, Date_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, null as Groom_Firstname, null as Bride_Firstname, Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, Graveyard, Age,
			Inscription, Headstone_Number, Other, Image_Url FROM graveyard WHERE ($query_6 OR $query_9) AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Family_Name, Event_D, Event_M, Event_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, Groom_Firstname, Bride_Firstname, Maiden_Name,
			Sex, Fathers_First_Name, Fathers_Surname, Mothers_First_Name,
			Mothers_Maiden_Name, Witness1_Firstname, Witness1_Surname,
			Witness2_Firstname, Witness2_Surname, Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url 
			FROM parish WHERE ($query_2 OR $query_5) AND $query_3 AND $query_4";
			
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 }
	 public function get_all_fuzzy_name_and_date($firstname,$lastname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
	
			$field_value[0] = $firstname;
			$field_name[0] = "Firstname";
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_value[0] = $part;
			$query_0= $field_name[0]." like '".$field_value[0]."%'";
			
			$field_name[3] = "Groom_Firstname";
			$field_name[5] = "Bride_Firstname";
			
			$query_1=$field_name[3]." like '".$field_value[0]."%'";
			$query_10=$field_name[5]." like '".$field_value[0]."%'";
	
	
			$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			$part = substr($lastname, 0, -2);  // returns name less 2
			$field_value[1] = $part;
			$query_2=$field_name[1]." like '".$field_value[1]."%'";
			
			$field_name[4] = "Maiden_Name";
			
			$query_5=$field_name[4]." like '".$field_value[1]."%'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$field_name[6] = "Lastname";
			
			$query_6=$field_name[6]." like '".$field_value[1]."%'";
			
			$field_name[7] = "Date_Year";
			
			$query_7=$field_name[7].">='".$field_value[2]."'";
			$query_8=$field_name[7]."<'".$field_value[3]."'";
					
			$query_9=$field_name[4]." like '".$field_value[1]."%'";
			
			
			$sql = "SELECT id, Type_of_Record, Firstname, Lastname, Date_D, Date_M, Date_Year,
			Registration_Number, Datebirth_D, Datebirth_M , Datebirth_Year, School, Religion,
			Address, Fathers_Occupation, Previous_School, null as Groom_Firstname, null as Bride_Firstname, null as Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url  FROM school WHERE $query_0 AND $query_6 AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Lastname, Date_d, Date_m, Date_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, null as Groom_Firstname, null as Bride_Firstname, Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, Graveyard, Age,
			Inscription, Headstone_Number, Other, Image_Url FROM graveyard WHERE $query_0 AND ($query_6 OR $query_9) AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Family_Name, Event_D, Event_M, Event_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, Groom_Firstname, Bride_Firstname, Maiden_Name,
			Sex, Fathers_First_Name, Fathers_Surname, Mothers_First_Name,
			Mothers_Maiden_Name, Witness1_Firstname, Witness1_Surname,
			Witness2_Firstname, Witness2_Surname, Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url 
			FROM parish WHERE ($query_0 OR $query_1 OR $query_10) AND ($query_2 OR $query_5) AND $query_3 AND $query_4";
			
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 }
	
	 public function get_all_name_and_date($firstname,$lastname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
	
			$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			
			$query_0=$field_name[0]."='".$field_value[0]."'";
			$field_name[3] = "Groom_Firstname";
			$field_name[5] = "Bride_Firstname";
			
			$query_1=$field_name[3]." = '".$field_value[0]."'";
			$query_10=$field_name[5]." = '".$field_value[0]."'";
			
	
			$field_name[1] = "Family_Name";
			$field_value[1] = $lastname;
			
			$query_2=$field_name[1]."='".$field_value[1]."'";
			
			
			$field_name[4] = "Maiden_Name";
			
			$query_5=$field_name[4]." = '".$field_value[1]."'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$field_name[6] = "Lastname";
			
			$query_6=$field_name[6]."='".$field_value[1]."'";
			
			$field_name[7] = "Date_Year";
			
			$query_7=$field_name[7].">='".$field_value[2]."'";
			$query_8=$field_name[7]."<'".$field_value[3]."'";	
			$query_9=$field_name[4]."='".$field_value[1]."'";
			
			
			$sql = "SELECT id, Type_of_Record, Firstname, Lastname, Date_D, Date_M, Date_Year,
			Registration_Number, Datebirth_D, Datebirth_M , Datebirth_Year, School, Religion,
			Address, Fathers_Occupation, Previous_School, null as Groom_Firstname, null as Bride_Firstname, null as Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url  FROM school WHERE $query_0 AND $query_6 AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Lastname, Date_d, Date_m, Date_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, null as Groom_Firstname, null as Bride_Firstname, Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, Graveyard, Age,
			Inscription, Headstone_Number, Other, Image_Url FROM graveyard WHERE $query_0 AND($query_6 OR $query_9) AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Family_Name, Event_D, Event_M, Event_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, Groom_Firstname, Bride_Firstname, Maiden_Name,
			Sex, Fathers_First_Name, Fathers_Surname, Mothers_First_Name,
			Mothers_Maiden_Name, Witness1_Firstname, Witness1_Surname,
			Witness2_Firstname, Witness2_Surname, Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url 
			FROM parish WHERE ($query_0 OR $query_1 OR $query_10) AND ($query_2 OR $query_5) AND $query_3 AND $query_4";
			
			
			$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 }
	 
	 public function get_all_fuzzy_first_name_and_date($firstname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
	
			$field_value[0] = $firstname;
			$field_name[0] = "Firstname";
			$part = substr($firstname, 0, -2);  // returns name less 2
			$field_value[0] = $part;
			$query_1= $field_name[0]." like '".$field_value[0]."%'";
			
			$field_name[4] = "Groom_Firstname";
			$field_name[5] = "Bride_Firstname";
			
			$query_2=$field_name[4]." like '".$field_value[0]."%'";
			$query_9=$field_name[5]." like '".$field_value[0]."%'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			$query_4=$field_name[2].">='".$field_value[2]."'";
			$query_5=$field_name[2]."<'".$field_value[3]."'";
			
			
			$field_name[7] = "Date_Year";
			
			$query_7=$field_name[7].">='".$field_value[2]."'";
			$query_8=$field_name[7]."<'".$field_value[3]."'";
			
			$sql = "SELECT id, Type_of_Record, Firstname, Lastname, Date_D, Date_M, Date_Year,
			Registration_Number, Datebirth_D, Datebirth_M , Datebirth_Year, School, Religion,
			Address, Fathers_Occupation, Previous_School, null as Groom_Firstname, null as Bride_Firstname, null as Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url  FROM school WHERE $query_1 AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Lastname, Date_d, Date_m, Date_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, null as Groom_Firstname, null as Bride_Firstname, Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, Graveyard, Age,
			Inscription, Headstone_Number, Other, Image_Url FROM graveyard WHERE $query_1 AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Family_Name, Event_D, Event_M, Event_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, Groom_Firstname, Bride_Firstname, Maiden_Name,
			Sex, Fathers_First_Name, Fathers_Surname, Mothers_First_Name,
			Mothers_Maiden_Name, Witness1_Firstname, Witness1_Surname,
			Witness2_Firstname, Witness2_Surname, Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url 
			FROM parish WHERE ($query_1 OR $query_2 OR $query_9) AND $query_4 AND $query_5";
			
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 }
	 public function get_all_first_name_and_date($firstname,$startdate,$enddate)
	
	// Fetch the result array selection for graveyards from the result object and return to Controller
	
	{ 
	
		$field_name[0] = "Firstname";
			$field_value[0] = $firstname;
			
			
			$query_1=$field_name[0]."='".$field_value[0]."'";
			$field_name[4] = "Groom_Firstname";
			$field_name[5] = "Bride_Firstname";
			
			
			$query_2=$field_name[4]." = '".$field_value[0]."'";
			$query_9=$field_name[5]." = '".$field_value[0]."'";
			
			$field_name[2] = "Event_Year";
			$field_value[2] = $startdate;
			$field_value[3] = $enddate + 1;
			
			
			$query_3=$field_name[2].">='".$field_value[2]."'";
			$query_4=$field_name[2]."<'".$field_value[3]."'";
			
			$field_name[7] = "Date_Year";
			
			$query_7=$field_name[7].">='".$field_value[2]."'";
			$query_8=$field_name[7]."<'".$field_value[3]."'";
			
			
			$sql = "SELECT id, Type_of_Record, Firstname, Lastname, Date_D, Date_M, Date_Year,
			Registration_Number, Datebirth_D, Datebirth_M , Datebirth_Year, School, Religion,
			Address, Fathers_Occupation, Previous_School, null as Groom_Firstname, null as Bride_Firstname, null as Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url  FROM school WHERE $query_1 AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Lastname, Date_d, Date_m, Date_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, null as Groom_Firstname, null as Bride_Firstname, Maiden_Name,
			null as Sex, null as Fathers_First_Name, null as Fathers_Surname, null as Mothers_First_Name,
			null as Mothers_Maiden_Name, null as Witness1_Firstname, null as Witness1_Surname,
			null as Witness2_Firstname, null as Witness2_Surname, null as Reference, Graveyard, Age,
			Inscription, Headstone_Number, Other, Image_Url FROM graveyard WHERE $query_1 AND $query_7 AND $query_8
			UNION ALL
			SELECT id, Type_of_Record, Firstname, Family_Name, Event_D, Event_M, Event_Year, null as School,
			null as Registration_Number, null as Datebirth_D, null as Datebirth_M, null as Datebirth_Year,
			null as Religion, null as Address, null as Fathers_Occupation, null as Previous_School, Groom_Firstname, Bride_Firstname, Maiden_Name,
			Sex, Fathers_First_Name, Fathers_Surname, Mothers_First_Name,
			Mothers_Maiden_Name, Witness1_Firstname, Witness1_Surname,
			Witness2_Firstname, Witness2_Surname, Reference, null as Graveyard, null as Age,
			null as Inscription, null as Headstone_Number, null as Other, null as Image_Url 
			FROM parish WHERE ($query_1 OR $query_2 OR $query_9) AND $query_3 AND $query_4";
			
			
		$query = $this->db->query($sql);
		
	return $query->result_array();
	
	 } 
}
?>

