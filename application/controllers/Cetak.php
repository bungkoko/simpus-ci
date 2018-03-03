<?php
/**
 *
 */
class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('session');
        if ($this->session->userdata('logged') == false):
            redirect('administrator');
            exit();
        endif;
       // require_once('Circulation.php');
    }

    public function index()
    {

    }

    public function borrow()
    {
        
        //$circulation=new Circulation();
       // $return=Circulation::date_return();

        $data['title']          = "Nota Peminjaman";
        $data['transaction_id'] = $this->session->userdata('transaction_id');

        $data['borrowBook']  = $this->Circulation_md->searchBorrow($data['transaction_id'])->result();
        $data['date_return'] = $this->session->userdata('date_return');
        //$data['date_return']=(new Circulation)->date_return();
        $data['member']      = $this->Circulation_md->getAnggotaByKeyword($data['transaction_id']);

        $data['content'] = 'cetak_borrow';
        $this->load->view('administrator/cetak/cetak', $data);
    }

    
}
