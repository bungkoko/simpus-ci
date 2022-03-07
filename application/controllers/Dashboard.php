<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Source by : Joko Purwanto
 */
class Dashboard extends CI_Controller
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
        $data['title']              = 'Sistem Managemen Perpustakaan - Dashboard';
        $data['content']            = 'dashboard';
        $data['counter_genre']      = $this->Genres_md->all_genre()->num_rows();
        $data['counter_collection'] = $this->Collection_md->get_all_collection()->num_rows();
        $data['counter_author']     = $this->Author_md->get_all()->num_rows();
        $data['counter_publisher']  = $this->Publisher_md->get_publisher()->num_rows();

        $this->load->view('administrator/index', $data);
    }
}
