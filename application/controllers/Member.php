<?php
  /**
   * Controller Member
   * Joko Purwanto
   */
  class Member extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('Member_md');
    }

    function index(){
      $this->register();
    }

    function get_kode_otomatis(){
      $thndaftar=date('Y');
      /*Ambil 2 karakter paling belakang*/
      $sub_thndaftar=substr($thndaftar,2);
      /*inisialisasi variabel $gt_kode*/
      $gt_kode=$this->Member_md->get_kode_anggota();
      $anggota_kd='';
      foreach($gt_kode->result() as $gtkode):
        if($gtkode->anggota_kd==NULL):
          $anggota_kd=$sub_thndaftar.'0001';
        else:
          $anggota_kd=$gtkode->anggota_kd+1;
        endif;
      endforeach;
      return $anggota_kd;
    }

    function register(){
      $data['title']="Register Member";
      $data['content']="member/register";
      $data['gt_kode']=$this->get_kode_otomatis();
      //$data['thn_lahir']=$this->dropdown_thnlahir();
      $this->load->view('index',$data);
    }

    function reg_process(){
      if($this->input->post('submit')):
        $this->load->library('form_validation');
        $this->form_validation->set_rules('anggota_nm','Nama Anggota','required');
        $this->form_validation->set_rules('anggota_tmplahir','Tempat Lahir','required');
        //$this->form_validation->set_rules('anggota_tgllahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('anggota_alamat','Alamat','required');
        $this->form_validation->set_rules('anggota_jeniskelamin','Jenis Kelamin','required');

        if($this->form_validation->run()==TRUE):
          $config['upload_path']='.'.$this->config->item('upload_path_avatar');
          $config['allowed_types']=$this->config->item('allowed_types');
          //$config['max_size']=$this->config->item('max_size');
          $config['encrypt_name']=TRUE;

          $this->load->library('image_lib');
          $this->load->library('upload');

          $this->upload->initialize($config);

          if(!$this->upload->do_upload('anggota_avatar')):
            echo $this->upload->display_errors();
          else:
            /*inisialisasi file avatar*/
            $dt_avatar=$this->upload->data();
            $avatar_nm=$dt_avatar['raw_name'];
            $avatar_ext=$dt_avatar['file_ext'];
            $avatar_path=$dt_avatar['file_name'];
            $avatar_fullpath=$dt_avatar['full_path'];

            /*Ubah Ukuran Image*/
            $config['image_library']=$this->config->item('image_library');
            $config['maintain_ratio']=$this->config->item('maintain_ratio');
            $config['width']='163';
            $config['height']='143';

            $config['source_image']=$avatar_fullpath;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            /*set kode Otomatis berdasarkan Tanggal Masuk*/
            //$kode=$this->input->post('')


            $this->db->set('anggota_kd',$this->get_kode_otomatis());
            $this->Member_md->add_member($avatar_path);
            redirect('Member/register_detail/'.$this->input->post('anggota_kd'));
          endif;
        else:
          echo "Data Anda Belum Lengkap. Silakan Melengkapi Data Anda Kembali";
        endif;
      else:
        echo "Data error";
      endif;
    }

    function register_detail($kode){
      $data['title']="Register Detail Member";
      $data['content']="member/register_detail";
      $data['gt_detail']=$this->Member_md->get_detail_anggota($kode);
      $this->load->view('index',$data);
    }



  }

?>
