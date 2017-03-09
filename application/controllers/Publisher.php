<?php

/**
 *
 */
class Publisher extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Publisher_md');
  }

  function index(){
    if($this->session->userdata('logged')==FALSE):
      redirect('administrator');
    endif;

    if($this->input->post('submit')):
      $this->form_validation->set_rules('penerbit_nm','Penerbit','required');
      $this->form_validation->set_rules('penerbit_email','Email Penerbit','required');
      $this->form_validation->set_rules('penerbit_alamat','Alamat Penerbit','required');
      $this->form_validation->set_rules('penerbit_notelp','Nomer Telepon Penerbit','required');

      if($this->form_validation->run()==TRUE):
        $this->Publisher_md->add_publisher();
        redirect('Publisher');
      else:
        $data['warning']=validation_errors();
      endif;
    else:
      $data['warning']='Tidak terhubung Database';
    endif;

    $config['base_url']=base_url().'publisher/index/';
    $config['total_rows']=$this->Publisher_md->get_publisher()->num_rows();
    $config['per_page']='10';
    $config['num_links']='6';

    $this->pagination->initialize($config);
    $offset=$this->uri->segment(3);

    $data['get_list']=$this->Publisher_md->get_publisher($config['per_page'],$offset);
    $data['pagination']=$this->pagination->create_links();

    $data['title']='Publisher';
    $data['content']='administrator/content';
    $data['main']='administrator/publisher/main';

    $this->load->view('index',$data);

  }

  function delete($kode){
    $this->Publisher_md->delete_publisher($kode);
    redirect('Publisher');
  }

  function update($kode){
    $data['title']='Update Publisher';
    $data['content']='administrator/content';
    $data['main']='administrator/publisher/update';
    $data['read']=$this->Publisher_md->read($kode);
    if($this->input->post('submit')):
      $this->Publisher_md->update_publisher($kode);
      redirect('Publisher');
    endif;
    $this->load->view('index',$data);
  }
}


?>
