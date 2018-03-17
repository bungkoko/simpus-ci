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

        if ($this->session->userdata('logged') == false):
            redirect('administrator');
            exit();
        endif;
    }

    function index(){

    }

    function borrow($transaction_id){
    	$data['title']='Nota Peminjaman';

    	//$transaction_id=$this->session->userdata('transaction_id');

    	$data['transaction_id']=$transaction_id;


    	$data['borrowBook']=$this->Circulation_md->searchBorrow($transaction_id)->result();

    	$data['gt_date']=$this->Circulation_md->getDatebyTransactionId($transaction_id);

    	$data['member']=$this->Circulation_md->getAnggotaByKeyword($transaction_id);

    	$data['content']='invoice/invoice_borrow';

    	$this->load->view('administrator/index',$data);
    }


    function tanggal(){
    	$tanggal='2018-02-2';

    	print_r (tanggal_indo($tanggal));
    }
}
