<?php  

/**
 * Sirkulasi Peminjaman dan Pengembalian Buku
 * Joko Purwanto
 */
class Circulation_md extends CI_Model
{

  function set_circulation(){
    $this->db->set('simpus_anggota_anggota_kd',$this->input->post('anggota_kd'));
    $this->db->set('simpus_koleksi_koleksi_kd',$this->input->post('koleksi_kd'));
    $this->db->set('tgl_pinjam',date('Y-m-d'));
    //$this->db->set('tgl_kembali');
    $this->db->set('tgl_dikembalikan');
  }



  /*function set_date_return(){
  	$get_setting=$this->db->get('simpus_setting')->result();
  	$lama_pinjam=$get_setting->lama_pinjam;

  	$date_return= date('Y-m-d',strtotime('+$lama_pinjam days'))

  	$
  }*/


}

?>
