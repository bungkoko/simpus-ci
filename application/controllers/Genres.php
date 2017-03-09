<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Genres extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Genres_md');
  }

  function index(){
    if($this->session->userdata('logged')==FALSE):
      redirect('administrator');
    endif;

    if($this->input->post('submit')):
      $this->form_validation->set_rules('genre_judul','Judul Genre','required');
      $this->form_validation->set_rules('genre_singkatan','Singkatan','required');

      if($this->form_validation->run()==TRUE):
        $this->Genres_md->add_genres();
        redirect('genres');
      else:
        $data['warning']=validation_errors();
      endif;
    else:
      $data['warning']="Tidak Terhubung di Database";
    endif;

    $config['base_url']=base_url().'genres/index/';
    $config['total_rows']=$this->Genres_md->all_genre()->num_rows();
    $config['per_page']='10';
    $config['num_links']='6';
    //initialize pagination
    $this->pagination->initialize($config);
    $offset=$this->uri->segment(3);
    //pagination
    $data['get_list']=$this->Genres_md->all_genre($config['per_page'],$offset);
    $data['pagination']=$this->pagination->create_links();
    //main
    $data['title']='Genre';
    $data['content']='administrator/content';
    $data['main']='administrator/genre/main';
    $this->load->view('index',$data);
  }

  function delete($kode){
    $this->Genres_md->delete_genre($kode);
    redirect('Genres');
  }

  function update($kode){
    $data['title']='Update Genre';
    $data['content']='administrator/content';
    $data['main']='administrator/genre/update';
    $data['read']=$this->Genres_md->read($kode);
    if($this->input->post('submit')):
      $this->Genres_md->update($kode);
      redirect('genres');
    endif;
    $this->load->view('index',$data);
  }

}


?>
