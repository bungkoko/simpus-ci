<?php  
/**
* Source by : Joko Purwanto
*/
class Circulation extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged')==FALSE):
			redirect('administrator');
			exit();
		endif;
	}
}
?>