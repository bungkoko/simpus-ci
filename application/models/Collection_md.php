<?php
/**
 *
 */
class Collection_md extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function set_collection()
    {
        $this->db->set('koleksi_judul', $this->input->post('koleksi_judul'));
        $this->db->set('koleksi_tebal', $this->input->post('koleksi_tebal'));
        $this->db->set('koleksi_isbn', $this->input->post('koleksi_isbn'));
        $this->db->set('koleksi_deskripsi', $this->input->post('koleksi_deskripsi'));
        $this->db->set('koleksi_lokasi_rak', $this->input->post('koleksi_lokasi_rak'));
        $this->db->set('koleksi_stok', $this->input->post('koleksi_stok'));
        $this->db->set('simpus_genre_genre_kd', $this->input->post('simpus_genre_genre_kd'));
        $this->db->set('simpus_penerbit_penerbit_kd', $this->input->post('simpus_penerbit_penerbit_kd'));
        $this->db->set('simpus_penulis_penulis_kd', $this->input->post('simpus_penulis_penulis_kd'));
    }

    public function add_collection($cover)
    {
        $this->set_collection();
        $this->db->set('koleksi_cover', $this->config->item('upload_path_koleksi') . $cover);
        return $this->db->insert('simpus_koleksi');
    }

    public function get_all_collection($num = '', $offset = '')
    {
        $this->db->limit($num, $offset);
        $this->db->join('simpus_genre', 'simpus_genre.genre_kd=simpus_koleksi.simpus_genre_genre_kd');
        $this->db->join('simpus_penulis', 'simpus_penulis.penulis_kd=simpus_koleksi.simpus_penulis_penulis_kd');
        $this->db->join('simpus_penerbit', 'simpus_penerbit.penerbit_kd=simpus_koleksi.simpus_penerbit_penerbit_kd');
        return $this->db->get('simpus_koleksi');
    }

    public function get_collection_code()
    {
        $this->db->select_max('koleksi_kd');
        return $this->db->get('simpus_koleksi');
    }

    public function getGenreList()
    {
        $this->db->order_by('genre_judul', 'ASC');
        return $this->db->get('simpus_genre');
    }

    public function getAuthorList()
    {
        $this->db->order_by('penulis_nm', 'ASC');
        return $this->db->get('simpus_penulis');
    }

    public function getPublisherList()
    {
        $this->db->order_by('penerbit_nm', 'ASC');
        return $this->db->get('simpus_penerbit');
    }

    public function delete_collection($collection_id)
    {
        $this->db->where('koleksi_kd', $collection_id);

        $gtData = $this->db->get('simpus_koleksi')->row();

        unlink(".$gtData->koleksi_cover");
        return $this->db->delete('simpus_koleksi', array('koleksi_kd' => $collection_id));
    }

    public function update($collection_id)
    {
        $this->set_collection();
        $this->db->where('koleksi_kd', $collection_id);
        $this->db->update('simpus_koleksi');
    }

    public function update_cover($collection_id, $image_path)
    {
        $this->db->set('koleksi_cover', $this->config->item('upload_path_koleksi') . $image_path);
        $this->db->where('koleksi_kd', $collection_id);
        return $this->db->update('simpus_koleksi');
    }

    public function unlink_collection($collection_id)
    {
        $this->db->where('koleksi_kd',$collection_id);
        $gtData=$this->db->get('simpus_koleksi')->row();

        unlink(".$gtData->koleksi_cover");
    }

    function read($collection_id){
      $this->db->where('koleksi_kd',$collection_id);
      return $this->db->get('simpus_koleksi')->row();
    }

}
