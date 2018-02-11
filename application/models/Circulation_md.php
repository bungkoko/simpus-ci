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

    public function add_borrow($transaction_id, $date_return, $date_borrow)
    {
        $collection_id = $this->input->post('simpus_koleksi_koleksi_kd');
        $member_id     = $this->session->userdata('member_id');
        $count         = count($collection_id);

        $result = array();

        for ($i = 0; $i < $count; $i++):
            $result[] = array(
                'simpus_koleksi_koleksi_kd'   => $collection_id[$i],
                'simpus_anggota_anggota_kd'   => $member_id,
                'sirkulasi_pinjam_kd'         => $transaction_id,
                'sirkulasi_tgl_pinjam'        => $date_borrow,
                'sirkulasi_tgl_harus_kembali' => $date_return,
                'sirkulasi_status_pinjam'     => 'pinjam',
            );
        endfor;

        return $this->db->insert_batch('simpus_sirkulasi', $result);

    }

    public function get_circulationByStatus($transaction_id)
    {
        $this->db->select('*');
        $this->db->from('simpus_sirkulasi');
        $this->db->join('simpus_koleksi', 'simpus_sirkulasi.simpus_koleksi_koleksi_kd=simpus_koleksi.koleksi_kd', 'inner');
        $this->db->join('simpus_anggota', 'simpus_sirkulasi.simpus_anggota_anggota_kd=simpus_anggota.anggota_kd', 'inner');
        $this->db->where('simpus_sirkulasi.sirkulasi_pinjam_kd', $transaction_id);
        $this->db->where('sirkulasi_statuspinjam', 'pinjam');
        return $this->db->get()->result();
    }

    public function searchBorrow($keyword)
    {

        $query = "
                SELECT sirkulasi_pinjam_kd, koleksi_kd, koleksi_judul, koleksi_isbn,
                    anggota_kd, anggota_nm , penerbit_nm, GROUP_CONCAT(simpus_penulis.penulis_nm) AS nama_penulis,
                    sirkulasi_tgl_pinjam, sirkulasi_tgl_harus_kembali, sirkulasi_tgl_dikembalikan,
                    sirkulasi_keterlambatan, sirkulasi_denda,
                    sirkulasi_jumlah_pinjam
                FROM
                    simpus_sirkulasi,simpus_penulis_has_simpus_koleksi,simpus_koleksi,simpus_penulis,simpus_anggota,simpus_penerbit
                WHERE
                    simpus_penulis_has_simpus_koleksi.simpus_penulis_penulis_kd=simpus_penulis.penulis_kd
                AND
                    simpus_penulis_has_simpus_koleksi.simpus_koleksi_koleksi_kd=simpus_koleksi.koleksi_kd
                AND
                    simpus_sirkulasi.simpus_koleksi_koleksi_kd=simpus_koleksi.koleksi_kd
                AND
                    simpus_sirkulasi.simpus_anggota_anggota_kd=simpus_anggota.anggota_kd
                AND
                    simpus_penerbit.penerbit_kd=simpus_koleksi.simpus_penerbit_penerbit_kd
                AND
                    simpus_sirkulasi.sirkulasi_pinjam_kd like '$keyword'
                GROUP BY koleksi_kd
                ";

        return $this->db->query($query);

    }

    public function getAnggotaByKeyword($keyword)
    {
        $this->db->select('anggota_kd, anggota_nm, sirkulasi_pinjam_kd');
        $this->db->from('simpus_sirkulasi');
        $this->db->join('simpus_anggota', 'simpus_sirkulasi.simpus_anggota_anggota_kd=simpus_anggota.anggota_kd', 'inner');
        $this->db->where('simpus_sirkulasi.sirkulasi_pinjam_kd', $keyword);
        $this->db->where('sirkulasi_status_pinjam', 'pinjam');
        $this->db->GROUP_BY('sirkulasi_pinjam_kd');
        return $this->db->get()->row();
    }

    public function update_status($transaction_id)
    {

        $this->db->where('sirkulasi_pinjam_kd', $transaction_id);
        $this->db->set('sirkulasi_status_pinjam', 'kembali');
        return $this->db->update('simpus_sirkulasi');
    }

    /*select anggota_kd, anggota_nm, sirkulasi_pinjam_kd
from simpus_sirkulasi
INNER JOIN
simpus_anggota on simpus_sirkulasi.simpus_anggota_anggota_kd=simpus_anggota.anggota_kd
WHERE
sirkulasi_pinjam_kd = '0003/01/2018'
GROUP BY sirkulasi_pinjam_kd
 */

}
