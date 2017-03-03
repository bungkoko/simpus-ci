<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->model('Member_md');
	}

	public function index()
	{
		if($this->session->userdata('logged')==FALSE):
			redirect('Administrator');
    endif;
    $data['title']="Dashboard";
		$data['content']="administrator/content";
		$data['main']="administrator/dashboard/main";
		$data['total_member']=$this->Member_md->count_new_member_today();
    $data['total_all']=$this->Member_md->count_all();

		$this->load->view('index',$data);
	}


}
