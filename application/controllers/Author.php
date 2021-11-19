<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 *Source by : Joko Purwanto
 */
class Author extends CI_Controller
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
        $data['warning'] = '';
        $data['title']   = "Pengarang/Penulis";
        $data['content'] = "author/author_main";

        if ($this->input->post('submit')):
            $this->form_validation->set_rules('penulis_nm', 'Nama Penulis', 'required');
            $this->form_validation->set_rules('penulis_email', 'Email Penulis', 'required');

            if ($this->form_validation->run() == true):
                $this->Author_md->add_author();
                redirect('author');
                exit();
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;

        $config['base_url']   = base_url() . 'index.php/author/index/';
        $config['total_rows'] = $this->Author_md->get_all()->num_rows();
        $config['per_page']   = '5';
        $config['num_links']  = '6';

        $this->pagination->initialize($config);
        $offset = $this->uri->segment(3);

        $data['get_list']   = $this->Author_md->get_all($config['per_page'], $offset);
        $data['pagination'] = $this->pagination->create_links();

        $data['gt_kode'] = $this->get_kode_author();
        $this->load->view('administrator/index', $data);
    }

    public function add_author_popup(){

            return $this->Author_md->add_author();
           
    }

    public function get_kode_author()
    {
        $gt_kode   = $this->Author_md->get_kode_author();
        $author_kd = '';
        $kar       = 'PNL-';
        foreach ($gt_kode->result() as $gtkode):
            if ($gtkode->penulis_kd == null):
                $author_kd = $kar . '0001';
            else:
                $substr_kd = (int) substr($gtkode->penulis_kd, 4, 8);
                $tmp       = $substr_kd + 1;
                $author_kd = $kar . sprintf("%04s", $tmp);
            endif;
        endforeach;
        return $author_kd;
        //print_r($author_kd);
    }

    public function delete($kode)
    {
        $this->Author_md->delete_author($kode);
        redirect('Author');
        exit();

    }

    public function update($kode)
    {
        $data['warning'] = '';
        $data['title']   = 'Pengarang/Penulis';
        $data['content'] = 'author/author_update';
        $data['read']    = $this->Author_md->read($kode);
        if ($this->input->post('submit')):
            $this->Author_md->update_author($kode);
            redirect('author');
            exit();
        endif;
        $this->load->view('administrator/index', $data);
    }

}
