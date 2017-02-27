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
    return $this->db->insert('simpus_genre');
  }

  function all_genre($num='',$offset=''){
    $this->db->limit($num,$offset);
    return $this->db->get('simpus_genre');
  }

  function update(){
    $this->set_genres();
    return $this->db->update('simpus_genre');
  }

}

?>
