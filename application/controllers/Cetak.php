<?php
/**
 *
 */
class Cetak extends CI_Controller
{

    public function __construct()
    {
        //$this->load->library('Pdf');
        parent::__construct();

        if ($this->session->userdata('logged') == false):
            redirect('administrator');
            exit();
        endif;

    }


    public function borrow()
    {

        $this->load->library('pdfgenerator');

        $data['title']          = "Nota Peminjaman";
        $data['transaction_id'] = $this->session->userdata('transaction_id');
        $data['borrowBook']     = $this->Circulation_md->searchBorrow($data['transaction_id'])->result();
        $data['date_return']    = $this->session->userdata('date_return');
        $data['member']         = $this->Circulation_md->getAnggotaByKeyword($data['transaction_id']);
        $data['content']        = 'borrow/borrow';

        //    $html=$this->load->view('administrator/cetak/cetak',$data,true);
        //$this->pdfgenerator->generate($html,'Nota Peminjaman-'.$this->session->userdata('transaction_id'));

        $this->pdfgenerator->setPaper('A4', 'portrait');
        $this->pdfgenerator->filename = "notapinjam-" . $this->session->userdata('transaction_id') . ".pdf";
        //$this->pdfgenerator->load_view('administrator/cetak/cetak', $data);

        $this->session->unset_userdata('transaction_id');
        $this->session->unset_userdata('date_return');

        $this->load->view('administrator/cetak', $data);

    }

}
