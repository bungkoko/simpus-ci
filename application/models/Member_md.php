<?php
  /**
   *Model Member
   *Joko Purwanto
   */
  class Member_md extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    function set_member(){
      $this->db->set('anggota_nm',$this->input->post('anggota_nm'));
      $this->db->set('anggota_email',$this->input->post('anggota_email'));
      $this->db->set('anggota_username',$this->input->post('anggota_username'));
      $this->db->set('anggota_password',md5($this->input->post('anggota_password')));
      $this->db->set('anggota_notelpon',$this->input->post('anggota_notelpon'));
      $this->db->set('anggota_tmplahir',$this->input->post('anggota_tmplahir'));
      $this->db->set('anggota_tgllahir',$this->input->post('tahun_lahir').'-'.$this->input->post('bulan_lahir').'-'.$this->input->post('tanggal_lahir'));
      $this->db->set('anggota_jeniskelamin',$this->input->post('anggota_jeniskelamin'));
      $this->db->set('anggota_tgldaftar',date('Y-m-d'));
      $this->db->set('anggota_alamat',$this->input->post('anggota_alamat'));
      $this->db->set('anggota_status',$this->input->post('anggota_status'));
    }

    function add_member($avatar){
      $this->set_member();
      $this->db->set('anggota_avatar',$this->config->item('upload_path_avatar').$avatar);
      return $this->db->insert('simpus_anggota');
    }

    function get_kode_anggota(){
      $this->db->select_max('anggota_kd');
      return $this->db->get('simpus_anggota');
    }

    function get_detail_anggota($kode){
      $this->db->where('anggota_kd',$kode);
      return $this->db->get('simpus_anggota')->row();
    }

    function get_anggota($num='',$limit=''){
      $this->db->order_by('anggota_tgldaftar','desc');
      $this->db->where($num,$limit);
      return $this->db->get('simpus_anggota');
    }

    function member_auth($user,$password){
      $this->db->where('anggota_username',$user);
      $this->db->where('anggota_password',$password);
      return $this->db->get('simpus_anggota')->row();
    }
  }

?>
