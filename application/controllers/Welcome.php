<?php defined('BASEPATH') or exit('No direct script access allowed');


/**
* 
*/
class Welcome extends CI_Controller
{
	

	function index(){
		$data['warning']='';
		$data['title']='Peminjaman';
		$data['content']='circulation/borrow';
		$this->load->view('administrator/index',$data);
	}
}

?>