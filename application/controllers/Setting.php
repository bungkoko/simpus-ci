<?php 
/**
* Source by : Joko Purwanto
*/
class Setting extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged')==FALSE):
			redirect('administrator');
			exit();
		endif;
	}

	function index(){
		$data['warning']='';
		if($this->input->post('submit')):
			$this->Setting_md->setting();
			$this->session->set_flashdata('message','Setting Perpustakaan sudah diubah');
			redirect('dashboard');
			exit();
		endif;

		$data['title']='Pengaturan Denda';
		$data['read']=$this->Setting_md->read();
		$data['content']='setting/setting_main';
		$this->load->view('administrator/index',$data);
	}
	function membercard(){
		$data['title']='Kartu Anggota';
		$data['content']='setting/setting_membercard';
		$this->load->view('administrator/index',$data);
	}
}
?>