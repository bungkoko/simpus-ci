<?php

/**
 *
 */
class Author_md extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function set_author()
  {
    $this->db->set('penulis_kd', $this->input->post('penulis_kd'));
    $this->db->set('penulis_nm', $this->input->post('penulis_nm'));
    $this->db->set('penulis_email', $this->input->post('penulis_email'));
  }

  function add_author()
  {
    $this->set_author();
    return $this->db->insert('simpus_penulis');
  }

  function get_kode_author()
  {
    $this->db->select_max('penulis_kd');
    return $this->db->get('simpus_penulis');
  }

  function get_all($num = '', $offset = '')
  {
    $this->db->limit($num, $offset);
    return $this->db->get('simpus_penulis');
  }

  function delete_author($kode)
  {
    $this->db->where('penulis_kd', $kode);
    return $this->db->delete('simpus_penulis');
  }

  function update_author($kode)
  {
    $this->set_author();
    $this->db->where('penulis_kd', $kode);
    $this->db->update('simpus_penulis');
  }

  function read($kode)
  {
    $this->db->where('penulis_kd', $kode);
    return $this->db->get('simpus_penulis')->row();
  }
}
