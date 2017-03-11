<?php
/**
 *
 */
class Collection_md extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function set_collection(){
    $this->db->set('koleksi_judul',$this->input->post('koleksi_judul'));
    $this->db->set('koleksi_tebal',$this->input->post('koleksi_tebal'));
    $this->db->set('koleksi_isbn',$this->input->post('koleksi_isbn'));
    $this->db->set('koleksi_deskripsi',$this->input->post('koleksi_deskripsi'));
    $this->db->set('koleksi_lokasi_rak',$this->input->post('koleksi_lokasi_rak'));
    $this->db->set('koleksi_stok',$this->input->post('koleksi_stok'));
    $this->db->set('simpus_genre_genre_kd',$this->input->post('simpus_genre_genre_kd'));
    $this->db->set('simpus_penerbit_penerbit_kd',$this->input->post('simpus_penerbit_penerbit_kd'));
    $this->db->set('simpus_penulis_penulis_kd',$this->input->post('simpus_penulis_penulis_kd'));
  }

  function add_collection($cover){
    $this->set_collection();
    $this->db->set('koleksi_cover',$this->config->item('upload_path_koleksi').$cover);
    return $this->db->insert('simpus_koleksi');
  }

  function get_all_collection($num='',$offset=''){
    $this->db->limit($num,$offset);
    $this->db->join('simpus_genre','simpus_genre.genre_kd=simpus_koleksi.simpus_genre_genre_kd');
    $this->db->join('simpus_penulis','simpus_penulis.penulis_kd=simpus_koleksi.simpus_penulis_penulis_kd');
    $this->db->join('simpus_penerbit','simpus_penerbit.penerbit_kd=simpus_koleksi.simpus_penerbit_penerbit_kd');
    return $this->db->get('simpus_koleksi');
  }

  function get_kode_koleksi(){
    $this->db->select_max('koleksi_kd');
    return $this->db->get('simpus_koleksi');
  }
}

?>
