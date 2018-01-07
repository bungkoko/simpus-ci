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
        $this->borrow();
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

        return $transaction_id;
    }

    public function borrow()
    {
        $data['warning'] = '';
        $data['title']   = 'Peminjaman';

        //$data['get_koleksi'] = $this->Collection_md->get_all_collection();

        $data['transaction_id'] = $this->get_transaction_id();
        $data['limit_book']     = $this->Setting_md->read()->pengaturan_limit_pinjam;
        $data['date_return']    = $this->date_return();
        $data['date_now']       = date('Y-m-d');

        $data['content'] = 'circulation/borrow';

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

}
