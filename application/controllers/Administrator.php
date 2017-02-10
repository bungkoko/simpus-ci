<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Administrator extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index(){
    $this->signin();
  }

  function signin(){
    $this->form_validation->set_rules('user_name','username','required');
    $this->form_validation->set_rules('user_password','password','required');

    if($this->form_validation->run()==TRUE):
      $username=$this->input->post('user_name');
      $password=md5($this->input->post('user_password'));

      //Check Administator Auth
      $this->db->where('user_name',$username);
      $this->db->where('user_password',$password);
      $query=$this->db->get('simpus_user')->row();
      if(count($query)):
        $admin_auth=array('username'=>$query->user_name,
                      'fullname'=>$query->user_namalengkap,
                      'email'=>$query->user_email,
                      'user_role'=>$query->user_role,
                      'logged'=>TRUE
                    );
        $this->session->set_userdata($admin_auth);
        redirect('welcome');
      else:
        $data['warning']="Username atau password tidak sesuai";
      endif;
    else:
      $data['warning']=validation_errors();
    endif;
    $data['title']="Sign In administator";
    $data['content']='administrator/signin/signin';
    $this->load->view('index',$data);
  }


}

?>
