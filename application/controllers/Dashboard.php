<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		echo "Selamat Datang di Dashboard".$this->session->userdata('fullname');
	}


}
