<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Collection extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Collection_md');
    $this->load->model('genres_md');
  }

  function index(){
    if($this->session->userdata('logged')==FALSE):
      redirect('administrator');
    endif;

    $data['title']="List Collection";

    $config['base_url']=base_url().'collection/index/';
    $config['total_rows']=$this->Collection_md->get_all_collection()->num_rows();
    $config['per_page']=10;
    $config['num_links']=6;

    $this->pagination->initialize($config);

    $offset=$this->uri->segment(3);

    $data['get_list']=$this->Collection_md->get_all_collection($config['per_page'],$offset);
    $data['pagination']=$this->pagination->create_links();


    $data['content']='administrator/content';
    $data['main']='administrator/collection/main';

    $this->load->view('index',$data);
  }

  function get_kode_koleksi(){
    $genre_kode=$this->input->post('simpus_genre_genre_kd');
    $read=$this->genres_md->read($genre_kode);
    $genre_singkatan=$read->genre_singkatan;


    $gt_kode=$this->Collection_md->get_kode_koleksi();
    $koleksi_kd='';

    foreach($gt_kode->result() as $gtkode):
      if(($gtkode->koleksi_kd==NULL)||(substr($gtkode->koleksi_kd,0,3)!=$genre_singkatan)):
        $koleksi_kd=$genre_singkatan.'-'.'0001';
      else:
        $substr_kd=(int)substr($gtkode->koleksi_kd,5);
        $count_kd=$substr_kd+1;
        $koleksi_kd=$genre_singkatan.'-'.sprintf("%04s",$count_kd);
      endif;
    endforeach;
    return $koleksi_kd;

  }

  function add(){
    if($this->input->post('submit')):
      $this->form_validation->set_rules('koleksi_kd','Kode Koleksi','required');
      $this->form_validation->set_rules('koleksi_judul','Judul Koleksi','required');
      $this->form_validation->set_rules('koleksi_isbn','ISBN','required');
      $this->form_validation->set_rules('koleksi_stok','Stok','required');
      $this->form_validation->set_rules('koleksi_lokasi_rak','Lokasi Rak','required');
      $this->form_validation->set_rules('koleksi_tebal','Tebal Koleksi','required');
      $this->form_validation->set_rules('koleksi_deskripsi','Deskripsi Koleksi','required');
      $this->form_validation->set_rules('simpus_penulis_penulis_kd','Penulis','required');
      $this->form_validation->set_rules('simpus_genre_genre_kd','Genre','required');
      $this->form_validation->set_rules('simpus_penerbit_penerbit_kd','Penerbit','required');

      if($this->form_validation->run()==TRUE):
        $config['upload_path']='.'.$this->config->item('upload_path_koleksi');
        $config['allowed_types']=$this->config->item('allowed_types');
        $config['encrypt_name']=TRUE;

        $this->load->library('image_lib');
        $this->load->library('upload');

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('koleksi_cover')):
          $data['warning']=$this->upload->display_errors();
        else:
          $dt_cover=$this->upload->data();
          $cover_nm=$dt_cover['raw_name'];
          $cover_ext=$dt_cover['file_ext'];
          $cover_path=$dt_cover['file_name'];
          $cover_fullpath=$dt_cover['full_path'];

          $config['image_library']=$this->config->item('image_library');
          $config['maintain_ratio']=$this->config->item('maintain_ratio');
          $config['width']='200';
          $config['height']='180';

          $config['source_image']=$avatar_fullpath;

          $this->image_lib->initialize($config);
          $this->image_lib->resize();
          $this->image_lib->clear();

          $this->db->set('koleksi_kd',$this->get_kode_koleksi());
          $this->Collection_md->add_collection($cover_path);
          redirect('Collection/list');
        endif;
      else:
        $data['warning']="Data belum lengkap";
      endif;
    else:
      $data['warning']="Database belum terhubung";
    endif;

    $data['kode_otomatis']=$this->get_kode_koleksi();
    $data['title']='Tambah Koleksi';
    $data['content']='administrator/content';
    $data['main']='administrator/collection/add';

    $this->load->view('index',$data);
  }
}


?>
