<?php
class User extends CI_Controller {
	
//http://saeedpourali.com/codeigniter-passing-parameters-to-controller-index/
//http://localhost/CIAss01/CI/index.php/user/id/1/2 to run with parameters
function _remap($method,$args)
{

if (method_exists($this, $method))
{
$this->$method($args);
}
else
{
$this->index($method,$args);
}
}

function index($method, $args=array())
{
		
	$lat = $args[0];
	$lon = $args[1];
	
// $method is the id in the url
// $args is an array as
// array(‘lat’ , ‘lon’)		
	
	$this->load->model('users_model', '', true);
		
	if(!empty($lat) && !empty($lon)) {
		$query['query'] = $this->users_model->insert_user($lat, $lon);
				
		}	  			
	}
}
?> 

