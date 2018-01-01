<?php  

/**
 * Sirkulasi Peminjaman dan Pengembalian Buku
 * Joko Purwanto
 */
class Circulation_md extends CI_Model
{

  function set_circulation($tgl_harus_kembali=''){
    $this->db->set('simpus_anggota_anggota_kd',$this->input->post('anggota_kd'));
    $this->db->set('simpus_koleksi_koleksi_kd',$this->input->post('koleksi_kd'));
    $this->db->set('sirkulasi_tgl_pinjam',date('Y-m-d'));
    $this->db->set('sirkulasi_tgl_harus_kembali',$tgl_harus_kembali);
    $this->db->set('sirkulasi_status',$this->input->post('status_pinjam'));

  }

  function get_kode_transaksi(){
    $this->db->select_max('sirkulasi_pinjam_kd');
    return $this->db->get('simpus_sirkulasi');
  }


}

?>
