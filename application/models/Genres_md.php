<?php
/**
 *
 */
class Genres_md extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set_genres()
    {
        $this->db->set('genre_judul', $this->input->post('genre_judul'));
        $this->db->set('genre_singkatan', strtoupper($this->input->post('genre_singkatan')));
    }

    public function add_genres()
    {
        $this->set_genres();
        $this->db->insert('simpus_genre');
    }

    public function all_genre($num = '', $offset = '')
    {
        $this->db->limit($num, $offset);
        $this->db->order_by('genre_kd', 'ASC');
        return $this->db->get('simpus_genre');
    }

    public function delete_genre($abbrev)
    {
        $this->db->where('genre_singkatan', $abbrev);
        return $this->db->delete('simpus_genre');
    }

    public function read($abbrev)
    {
        $this->db->where('genre_singkatan', $abbrev);
        return $this->db->get('simpus_genre')->row();
    }

    public function readById($kode)
    {
        $this->db->where('genre_kd', $kode);
        return $this->db->get('simpus_genre')->row();
    }

    public function update($abbrev)
    {
        $this->set_genres();
        $this->db->where('genre_singkatan', $abbrev);
        $this->db->update('simpus_genre');
    }

}
