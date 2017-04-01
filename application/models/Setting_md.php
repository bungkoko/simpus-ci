<?php
/**
 * Pengaturan Denda dan Lama Denda
 * Joko Purwanto
 */
class Setting_md extends CI_Model
{
  function set_setting(){
    $this->db->set('pengaturan_lamapinjam',$this->input->post('pengaturan_lamapinjam'));
    $this->db->set('pengaturan_dendaperhari',$this->input->post('pengaturan_dendaperhari'));
  }

  function setting(){
    $this->set_setting();
    $this->db->where('pengaturan_kd',1);
    $this->db->update('simpus_pengaturan');
  }

  function read(){
    $this->db->where('pengaturan_kd',1);
    return $this->db->get('simpus_pengaturan')->row();
  }




}

?>
