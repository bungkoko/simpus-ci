<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Author extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Author_md');
  }

  function index(){
    if($this->session->userdata('logged')==FALSE):
      redirect('administrator');
    endif;
    $data['title']="Author";
    $data['content']="administrator/content";
    $data['main']="administrator/author/main";

    if($this->input->post('submit')):
      $this->form_validation->set_rules('penulis_nm','Nama Penulis','required');
      $this->form_validation->set_rules('penulis_email','Email Penulis','required');

      if($this->form_validation->run()==TRUE):
        $this->Author_md->add_author();
        redirect('author');
      else:
        $data['warning']=validation_errors();
      endif;
    else:
      $data['warning']="Tidak Terhubung di database";
    endif;

    $config['base_url']=base_url().'author/index/';
    $config['total_rows']=$this->Author_md->get_all()->num_rows();
    $config['per_page']=10;
    $config['num_links']=6;

    $this->pagination->initialize($config);
    $offset=$this->uri->segment(3);

    $data['get_list']=$this->Author_md->get_all($config['per_page'],$offset);
    $data['pagination']=$this->pagination->create_links();


    $data['gt_kode']=$this->get_kode_author();
    $this->load->view('index',$data);
  }
  function get_kode_author(){
    $gt_kode=$this->Author_md->get_kode_author();
    $author_kd='';
    $kar='PNL-';
    foreach($gt_kode->result() as $gtkode):
      if($gtkode->penulis_kd==NULL):
        $author_kd=$kar.'0001';
      else:
        $substr_kd=(int)substr($gtkode->penulis_kd,4,8);
        $tmp=$substr_kd+1;
        $author_kd=$kar.sprintf("%04s",$tmp);
      endif;
    endforeach;
    return $author_kd;
    //print_r($author_kd);
  }



}


?>
