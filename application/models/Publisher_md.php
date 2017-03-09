<?php
/**
 *
 */
class Publisher_md extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function set_publisher(){
    $this->db->set('penerbit_nm',$this->input->post('penerbit_nm'));
    $this->db->set('penerbit_notelp',$this->input->post('penerbit_notelp'));
    $this->db->set('penerbit_email',$this->input->post('penerbit_email'));
    $this->db->set('penerbit_alamat',$this->input->post('penerbit_alamat'));
  }

  function add_publisher(){
    $this->set_publisher();
    return $this->db->insert('simpus_penerbit');
  }

  function get_publisher($num='',$offset=''){
    $this->db->limit($num,$offset);
    return $this->db->get('simpus_penerbit');
  }

  function delete_publisher($kode){
    $this->db->where('penerbit_kd',$kode);
    return $this->db->delete('simpus_penerbit');
  }

  function update_publisher($kode){
    $this->set_publisher();
    $this->db->where('penerbit_kd',$kode);
    $this->db->update('simpus_penerbit');
  }

  function read($kode){
    $this->db->where('penerbit_kd',$kode);
    return $this->db->get('simpus_penerbit')->row();
  }
}



?>
