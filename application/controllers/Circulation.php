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
        $data['title'] = 'Daftar Sirkulasi';

        $data['dt_circulation'] = $this->Circulation_md->get_all_circulation();
        // $data['dt_circulation']=$this->Collection_md->get_all_collection();
        $data['content'] = 'circulation/circulation_main';
        $this->load->view('administrator/index', $data);

    }

    public function get_transaction_id()
    {
        $gt_transaction_id = $this->Circulation_md->get_kode_transaksi();
        $transaction_id    = '';
        $date              = getdate();
        $gtday             = sprintf("%02d", $date['mday']);
        $gtMonth           = sprintf("%02d", $date['mon']);
        $gtYear            = $date['year'];
        $trans             = $gtMonth . '.' . $gtYear;

        foreach ($gt_transaction_id->result() as $gtTrans):
            if (($gtTrans->sirkulasi_pinjam_kd == null)):
                $transaction_id = '0001' . '.' . $trans;
                //$transaction_id=substr($gtTrans->sirkulasi_pinjam_kd,6,2);
            else:
                $substr_id      = (int) substr($gtTrans->sirkulasi_pinjam_kd, 0, 4);
                $tmp            = $substr_id + 1;
                $transaction_id = sprintf("%04s", $tmp) . '.' . $trans;
            endif;
        endforeach;

        //return $transaction_id;
        return $transaction_id;
        //print_r($transaction_id);
    }

    public function choose_member()
    {
        $data['warning'] = '';

        if ($this->input->post('submit')):
            $this->form_validation->set_rules('anggota_kd', 'Kode anggota', 'required');
            $this->form_validation->set_rules('sirkulasi_jumlah_pinjam', 'Jumlah pinjam', 'required');

            if ($this->form_validation->run() == true):

                $member_id  = $this->input->post('anggota_kd');
                $count_book = $this->input->post('sirkulasi_jumlah_pinjam');

                $this->session->set_userdata('member_id', $member_id);
                $this->session->set_userdata('count_book', $count_book);
                redirect('circulation/borrow');
                exit();
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;

        $data['title']   = 'Anggota Yang Meminjam';
        $data['content'] = 'circulation/circulation_choose_member';
        $this->load->view('administrator/index', $data);
    }

    public function borrow()
    {
        if (empty($this->session->userdata('member_id'))):
            redirect('circulation/choose_member');
        endif;
        $data['warning'] = '';
        $data['title']   = 'Peminjaman';

        if ($this->input->post('submit')):
            $this->session->set_userdata('transaction_id', $this->get_transaction_id());
            $this->session->set_userdata('date_return', $this->date_return());
            $this->Circulation_md->add_borrow($this->get_transaction_id(), $this->date_return(), date('Y-m-d'));
            $this->session->set_flashdata('message', 'Transaksi peminjaman telah berhasil');
            $this->session->unset_userdata('member_id');
            //$this->session->unset_userdata('date_return',$this->date_return());
            $this->session->unset_userdata('count_book');
            redirect('invoice/borrow');
            exit();

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
        //print_r($date_return);

    }

    public function intervaldays($tgl_harus_kembali, $tgl_kembali)
    {

        $tgl_kembali       = strtotime($tgl_kembali);
        $tgl_harus_kembali = strtotime($tgl_harus_kembali);

        $interval = ($tgl_kembali - $tgl_harus_kembali) / (3600 * 24);
        return $interval;

    }

    public function denda($transaction_id)
    {
        //$qty         = 1;
        $denda             = 0;
        $tgl_kembali       = '';
        $tgl_harus_kembali = '';

        $get_circulation = $this->Circulation_md->get_circulationByStatus($transaction_id);

        foreach ($get_circulation as $gtCirculation):
            $tgl_harus_kembali = $gtCirculation->sirkulasi_tgl_harus_kembali;
            $tgl_kembali       = date('Y-m-d');
        endforeach;
        $range = $this->intervaldays($tgl_harus_kembali, $tgl_kembali);

        $get_setting = $this->Setting_md->get_setting();
        foreach ($get_setting->result() as $gtSetting):
            $denda_perhari = $gtSetting->pengaturan_dendaperhari;
        endforeach;

        if ($range > 0):
            $denda = $range * $denda_perhari;
        else:
            $denda = 0;
        endif;

        return $denda;
        //print_r('range :'.$range);
        //print_r('denda :'.$denda);
    }

    public function returnbook()
    {
        $data['warning']     = '';
        $data['title']       = 'Pengembalian';
        $transaction_id      = $this->input->post('sirkulasi_pinjam_kd');
        $data['borrowBook']  = '';
        $data['member']      = '';
        $data['count_denda'] = '';
        //$status='pinjam';
        if ($this->input->post('submit')):
            $this->form_validation->set_rules('sirkulasi_pinjam_kd', 'Kode transaksi', 'required');

            if ($this->form_validation->run() == true):
                $data['borrowBook'] = $this->Circulation_md->getTransaction($transaction_id)->result();
                if (empty($data['borrowBook'])):
                    $data['warning'] = ' Transaksi yang anda lakukan tidak ditemukan atau sudah diproses';
                endif;
                $data['member'] = $this->Circulation_md->getAnggotaByKeyword($transaction_id);
                $data['denda']  = $this->denda($transaction_id);
                $this->session->set_userdata('transaction_id', $transaction_id);
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;

        $data['content'] = 'circulation/circulation_return';
        $this->load->view('administrator/index', $data);
    }

    public function statusbook()
    {
        $transaction_id = $this->session->userdata('transaction_id');
        if ($this->input->post('kembali') == true):
            //$this->db->set('sirkulasi_denda',$this->denda($transaction_id));
            $this->Circulation_md->returnbook($transaction_id, $this->denda($transaction_id));
            $this->session->set_flashdata('message', 'Koleksi telah dikembalikan');
            $this->session->unset_userdata('transaction_id');
            redirect('Circulation/returnbook');
        endif;
        if ($this->input->post('perpanjang') == true):
            $this->Circulation_md->extendsion($transaction_id, $this->date_return());
            $this->session->set_flashdata('message', 'Masa pinjam koleksi telah diperpanjang');
            $this->session->unset_userdata('transaction_id');
            redirect('Circulation/returnbook');
        endif;
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
