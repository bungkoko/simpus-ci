<?php

/**
 * Sirkulasi Peminjaman dan Pengembalian Buku
 * Joko Purwanto
 */
class Circulation_md extends CI_Model
{

    public function set_borrow()
    {
        //$count = count($this->input->post('simpus_koleksi_koleksi_kd'));

        //for ($i = 0; $i < $count; $i++):
        $this->db->set('simpus_koleksi_koleksi_kd', $this->input->post('simpus_koleksi_koleksi_kd'));
        $this->db->set('simpus_anggota_anggota_kd', $this->input->post('anggota_kd'));
        $this->db->set('sirkulasi_pinjam_kd', $this->input->post('sirkulasi_pinjam_kd'));
        $this->db->set('sirkulasi_tgl_pinjam', $this->input->post('sirkulasi_tgl_pinjam'));
        $this->db->set('sirkulasi_tgl_harus_kembali', $this->input->post('sirkulasi_tgl_harus_kembali'));
        $this->db->set('sirkulasi_status_pinjam', 'pinjam');
        //endfor;
    }

    public function get_kode_transaksi()
    {
        $this->db->select_max('sirkulasi_pinjam_kd');
        return $this->db->get('simpus_sirkulasi');
    }

    public function add_borrow($transaction_id,$date_return,$date_borrow)
    {
        $collection_id=$this->input->post('simpus_koleksi_koleksi_kd');
        $member_id=$this->input->post('anggota_kd');
        $count=count($collection_id);
        
        $result=array();

        for($i=0;$i<$count;$i++):
          $result[]=array(
                'simpus_koleksi_koleksi_kd'=>$collection_id[$i],
                'simpus_anggota_anggota_kd'=>$member_id,
                'sirkulasi_pinjam_kd'=>$transaction_id,
                'sirkulasi_tgl_pinjam'=>$date_borrow,
                'sirkulasi_tgl_harus_kembali'=>$date_return,
          );
        endfor;

        return $this->db->insert_batch('simpus_sirkulasi',$result);

    }

}
