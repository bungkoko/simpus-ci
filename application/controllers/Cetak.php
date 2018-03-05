<?php
/**
 *
 */
class Cetak extends CI_Controller
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

    }

    public function borrow()
    {

      
        $data['title']          = "Nota Peminjaman";
        $data['transaction_id'] = $this->session->userdata('transaction_id');

        $data['borrowBook']  = $this->Circulation_md->searchBorrow($data['transaction_id'])->result();
        $data['date_return'] = $this->session->userdata('date_return');
  
        $data['member'] = $this->Circulation_md->getAnggotaByKeyword($data['transaction_id']);

        $data['content'] = 'cetak_borrow';

  		
  		$this->load->library('PdfGenerate');
  		$this->pdfGenerate->setPaper('A4', 'potrait');
  		$this->PdfGenerate->filename=$data['title'].' '.$this->session->userdata('transaction_id');
        $this->PdfGenerate->load_view($this->load->view('administrator/cetak/cetak', $data));

    }

}
