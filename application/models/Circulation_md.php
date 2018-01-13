<?php

/**
 * Sirkulasi Peminjaman dan Pengembalian Buku
 * Joko Purwanto
 */
class Circulation_md extends CI_Model
{


    public function get_kode_transaksi()
    {
        $this->db->select_max('sirkulasi_pinjam_kd');
        return $this->db->get('simpus_sirkulasi');
    }

    public function add_borrow($transaction_id,$date_return,$date_borrow)
    {
        $collection_id=$this->input->post('simpus_koleksi_koleksi_kd');
        $member_id=$this->session->userdata('member_id');
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
