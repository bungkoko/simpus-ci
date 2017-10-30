<?php
/**
 *
 */
class Genres_md extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function set_genres(){
    $this->db->set('genre_judul',$this->input->post('genre_judul'));
    $this->db->set('genre_singkatan',$this->input->post('genre_singkatan'));
  }

  function add_genres(){
    $this->set_genres();
    $this->db->insert('simpus_genre');
  }

  function all_genre($num='',$offset=''){
    $this->db->limit($num,$offset);
    $this->db->order_by('genre_kd','ASC');
    return $this->db->get('simpus_genre');
  }

  function delete_genre($kd){
    $this->db->where('genre_kd',$kd);
    return $this->db->delete('simpus_genre');
  }

  function read($kode){
    $this->db->where('genre_kd',$kode);
    return $this->db->get('simpus_genre')->row();
  }

  function update($kode){
    $this->set_genres();
    $this->db->where('genre_kd',$kode);
    $this->db->update('simpus_genre');
  }

}

?>
