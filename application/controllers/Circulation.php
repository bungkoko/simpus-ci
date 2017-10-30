<?php 
/**
* 
*/
class Circulation extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Circulation_md');
		$this->load->model('Setting_md');
	}

	function index(){
		$this->set_date_return();
	}

	function set_date_return(){
	  	//$get_setting=$this->db->get('simpus_pengaturan')->result();
	  	//$lama_pinjam=$get_setting->lama_pinjam;
	  	//
	  	$now=date('Y-m-d');
		$get_setting=$this->Setting_md->get_setting();
		foreach($get_setting->result() as $gt_setting):
			$lama_pinjam=$gt_setting->pengaturan_lamapinjam;
		endforeach;
		$date_return= date('Y-m-d',strtotime('+'.$lama_pinjam.'day',strtotime($now)));
		
		return $date_return;

	}


}
 ?>