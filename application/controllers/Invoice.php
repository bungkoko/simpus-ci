<?php defined('BASEPATH') or exit('No direct script access allowed');
/*
Source by : Joko Purwanto
 */

/**
 *
 */
class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged') == false) :
            redirect('administrator');
            exit();
        endif;
    }

    public function index()
    {
    }

    public function borrow($transaction_id)
    {
        $data['title']          = 'Nota Peminjaman';
        $data['transaction_id'] = $transaction_id;
        $data['borrowBook']     = $this->Circulation_md->searchBorrow($transaction_id)->result();
        $data['gt_date']        = $this->Circulation_md->getDatebyTransactionId($transaction_id);
        $data['member']         = $this->Circulation_md->getAnggotaByKeyword($transaction_id);
        $data['content']        = 'invoice/borrow/invoice_borrow';

        $this->load->view('administrator/index', $data);
    }

    public function returnbook($transaction_id)
    {
        $data['title']          = 'Nota Pengembalian';
        $data['transaction_id'] = $transaction_id;
        $data['returnbook']     = $this->Circulation_md->getReturnBook($transaction_id)->result();
        $data['gt_date']        = $this->Circulation_md->getDatebyTransactionId($transaction_id);
        $data['member']         = $this->Circulation_md->getAnggotaByKeyword($transaction_id);
        $data['content']        = 'invoice/return/invoice_return';

        $this->load->view('administrator/index', $data);
    }

    public function printed($page, $transaction_id)
    {
        $page = $this->uri->segment(3);

        if ($page == "borrow") :
            $data['page_title']     = 'Nota Peminjaman - No Invoice #' . $transaction_id;
            $data['title']          = 'Nota Peminjaman';
            $data['transaction_id'] = $transaction_id;
            $data['borrowBook']     = $this->Circulation_md->searchBorrow($transaction_id)->result();
            $data['gt_date']        = $this->Circulation_md->getDatebyTransactionId($transaction_id);
            $data['member']         = $this->Circulation_md->getAnggotaByKeyword($transaction_id);
            $data['content']        = 'invoice/borrow/invoice_borrow';

            $this->load->view('administrator/printout', $data);
        elseif ($page == "returnbook") :
            $data['page_title']     = 'Nota Pengembalian - No Invoice #' . $transaction_id;
            $data['title']          = 'Nota Pengembalian';
            $data['transaction_id'] = $transaction_id;
            $data['returnbook']     = $this->Circulation_md->getReturnBook($transaction_id)->result();
            $data['gt_date']        = $this->Circulation_md->getDatebyTransactionId($transaction_id);
            $data['member']         = $this->Circulation_md->getAnggotaByKeyword($transaction_id);
            $data['content']        = 'invoice/return/invoice_return';

            $this->load->view('administrator/printout', $data);
        endif;
    }
}
