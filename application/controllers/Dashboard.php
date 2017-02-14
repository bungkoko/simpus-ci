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
		else:
			$data['title']="Dashboard";
			$data['content']="administrator/dashboard/dashboard";
			$data['main']="administrator/dashboard/main";
			$data['sidebar']="administrator/dashboard/sidebar";
			$data['header']="administrator/dashboard/header";
			$data['footer']="administrator/dashboard/footer";
		endif;
			$this->load->view('index',$data);

	}


}
