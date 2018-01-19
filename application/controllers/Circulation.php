<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source by : Joko Purwanto
 */
class Circulation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') == false):
            redirect('administrator');
            exit();
        endif;
    }

    public function index()
    {
        $this->choose_member();
    }

    public function get_transaction_id()
    {
        $gt_transaction_id = $this->Circulation_md->get_kode_transaksi();
        $transaction_id    = '';
        $date              = getdate();
        $gtday             = sprintf("%02d", $date['mday']);
        $gtMonth           = sprintf("%02d", $date['mon']);
        $gtYear            = $date['year'];
        $trans             = $gtMonth . '/' . $gtYear;

        foreach ($gt_transaction_id->result() as $gtTrans):
            if (($gtTrans->sirkulasi_pinjam_kd == null) || (substr($gtTrans->sirkulasi_pinjam_kd, 5, 2) != $gtMonth)):
                $transaction_id = '0001' . '/' . $trans;
                //$transaction_id=substr($gtTrans->sirkulasi_pinjam_kd,6,2);
            else:
                $substr_id      = (int) substr($gtTrans->sirkulasi_pinjam_kd, 0, 4);
                $tmp            = $substr_id + 1;
                $transaction_id = sprintf("%04s", $tmp) . '/' . $trans;
            endif;
        endforeach;

        //return $transaction_id;
        return $transaction_id;
    }

    public function choose_member()
    {
        $data['warning'] = '';

        if ($this->input->post('submit')):
            $member_id  = $this->input->post('anggota_kd');
            $count_book = $this->input->post('sirkulasi_jumlah_pinjam');

            $this->session->set_userdata('member_id', $member_id);
            $this->session->set_userdata('count_book', $count_book);
            redirect('circulation/borrow');
        endif;

        $data['title']   = 'Anggota Yang Meminjam';
        $data['content'] = 'circulation/circulation_choose_member';
        $this->load->view('administrator/index', $data);
    }

    public function borrow()
    {
        $data['warning'] = '';
        $data['title']   = 'Peminjaman';

        if ($this->input->post('submit')):

            $this->Circulation_md->add_borrow($this->get_transaction_id(), $this->date_return(), date('Y-m-d'));
            $this->session->set_flashdata('message', 'Transaksi peminjaman telah berhasil');
            $this->session->unset_userdata('member_id');
            $this->session->unset_userdata('count_book');
            redirect('circulation');

        else:
            $data['warning'] = 'masalah pada database';

        endif;

        $data['transaction_id'] = $this->get_transaction_id();
        $data['limit_book']     = $this->Setting_md->read()->pengaturan_limit_pinjam;
        $data['date_return']    = $this->date_return();
        $data['date_now']       = date('Y-m-d');

        $data['content'] = 'circulation/circulation_borrow';

        $this->load->view('administrator/index', $data);

    }

    public function date_return()
    {
        $now         = date('Y-m-d');
        $get_setting = $this->Setting_md->get_setting();
        foreach ($get_setting->result() as $gtSetting):
            $lamapinjam = $gtSetting->pengaturan_lamapinjam;
        endforeach;
        $date_return = date('Y-m-d', strtotime('+' . $lamapinjam . 'day', strtotime($now)));

        return $date_return;

    }

    public function returnbook()
    {
        $data['warning'] = '';
        $data['title']   = 'Pengembalian';

        $transaction_id     = $this->input->post('sirkulasi_pinjam_kd');
        $data['borrowBook'] = '';
        $data['member']='';

        if ($this->input->post('go')):
            $data['borrowBook'] = $this->Circulation_md->searchBorrow($transaction_id)->result();
            $data['member']     = $this->Circulation_md->getAnggotaByKeyword($transaction_id);
        endif;
        //$transaction_id=$this->input->post('sirkulasi_pinjam_kd');
        //$data['count_borrow']=$this->Circulation_md->get_circulationByStatus($transaction_id)->num_rows();
        $data['content'] = 'circulation/circulation_return';
        $this->load->view('administrator/index', $data);
    }

    public function getAttributeCirculation()
    {
        $transaction_id = $this->input->post('sirkulasi_pinjam_kd');

        //$transaction_id = '0003/01/2018';
        $circulation = $this->Circulation_md->get_circulationByStatus($transaction_id);

        foreach ($circulation as $trans) {
            if (!empty($trans)):
                $callback[] = array(
                    'status'         => 'success',
                    'transaction_id' => $trans->sirkulasi_pinjam_kd,
                    'koleksi_kd'     => $trans->koleksi_kd,
                    'koleksi_judul'  => $trans->koleksi_judul,
                    'koleksi_isbn'   => $trans->koleksi_isbn,
                    'anggota_kd'     => $trans->anggota_kd,
                    'anggota_nm'     => $trans->anggota_nm,
                );
            else:
                $callback[] = array(
                    'status' => 'failed',
                );
            endif;

        }

        echo json_encode($callback);
    }

}
