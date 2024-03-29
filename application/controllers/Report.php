<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source by : Joko Purwanto
 */

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Circulation_md');
        if ($this->session->userdata('logged') == false) :
            redirect('administrator');
            exit();
        endif;
    }

    public function index()
    {
        /*
         if (isset($this->input->get('filter'))&& !empty($this->input->get('filter'))) {
             $filter=$this->input->get('filter');

             if ($filter=='1') {
                 $tgl_dikembalikan=$this->input->get('tgl_dikembalikan');

                 $ket='Data Sirkulasi Tanggal'.date('d-m-y', strtotime($tgl_dikembalikan));
                 $url_cetak='report/cetak?filter=1&tanggal='.$tgl_dikembalikan;
                 $sirkulasi=$this->Circulation_md->filter_view_by_date($tgl_dikembalikan);
             } elseif ($filter=='2') {
                 $bulan=$this->input->get('bulan');
                 $tahun=$this->input->get('tahun');
                 $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                 $ket='Data Sirkulasi Bulan'.$nama_bulan[$bulan].' '.$tahun;
                 $url_cetak='report/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                 $sirkulasi=$this->Circulation_md->filter_view_by_month($bulan, $tahun);
             } else {
                 $tahun=$this->input->get('tahun');

                 $ket='Data Sirkulasi Tahun'.$tahun;
                 $url_cetak='report/cetak?filter=3&tahun'.$tahun;
                 $sirkulasi=$this->Circulation_md->filter_view_by_year($tahun);
             }
         } else {
             $ket='Semua Data Sirkulasi';
             $url_cetak='report/cetak';
             $sirkulasi=$this->Circulation_md->filter_view_all();
         }
         $data['ket']=$ket;
         $data['url_cetak']=base_url('index.php/'.$url_cetak);
         $data['sirkulasi']=$sirkulasi;
         $data['option_tahun']=$this->Circulation_md->filter_option_year();
         */
        $data['title'] = 'Report';
        $data['content'] = 'report/report';
        $this->load->view('administrator/index', $data);
    }
}
