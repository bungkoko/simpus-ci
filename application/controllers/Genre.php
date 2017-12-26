<?php
/**
 * Source by : Joko Purwanto
 */
class Genre extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged')==false):
            redirect('administrator/signin');
            exit();
        endif;
    }

    public function index()
    {
        $data['warning'] = '';

        if ($this->input->post('submit')):
            $this->form_validation->set_rules('genre_judul', 'Judul Genre', 'required');
            $this->form_validation->set_rules('genre_singkatan', 'Singkatan', 'required|max_length[3]');

            if ($this->form_validation->run() == true):
                $this->Genres_md->add_genres();
                $this->session->set_flashdata('message', 'Genre sudah ditambahkan');
                redirect('genre');
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;

        $config['base_url']   = base_url() . 'index.php/genre/index';
        $config['total_rows'] = $this->Genres_md->all_genre()->num_rows();
        $config['per_page']   = '5';
        $config['num_links']  = '6';

        $this->pagination->initialize($config);

        $data['get_list']   = $this->Genres_md->all_genre($config['per_page'], $this->uri->segment(3));
        $data['pagination'] = $this->pagination->create_links();

        $data['title']   = 'Genre Buku';
        $data['content'] = 'genre/genre_main';

        $this->load->view('administrator/index', $data);

    }

    public function delete($abbrev)
    {
        $this->Genres_md->delete_genre($abbrev);
        $this->session->set_flashdata('message', 'Genre berhasil dihapus');
        redirect('genre');
        exit();
    }

    public function update($abbrev)
    {
    	$data['warning']= '';
        $data['title']   = 'Genre Buku';
        $data['content'] = 'genre/genre_update';
        $data['read']    = $this->Genres_md->read($abbrev);
        if ($this->input->post('submit')):
            $this->Genres_md->update($abbrev);
            $this->session->set_flashdata('message', 'Genre berhasil diubah');
            redirect('genre');
        endif;

        $this->load->view('administrator/index', $data);
    }
}
