<?php

/**
 *
 */
class Setting extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Setting_md');
  }

  function index(){
    if($this->session->userdata('logged')==FALSE):
      redirect('administrator');
    endif;

    if($this->input->post('submit')):
      $this->Setting_md->setting();
    endif;

    $data['title']="Setting";
    $data['read']=$this->Setting_md->read();
    $data['content']='administrator/content';
    $data['main']='administrator/setting/main';
    $this->load->view('index',$data);
  }
}

?>
