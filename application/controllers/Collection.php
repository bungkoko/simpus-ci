<?php defined('BASEPATH') or exit('No direct script access allowed');
require_once('Author.php');
//$author=new Author;
/**
 * source by : Joko Purwanto
 */
class Collection extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->controller('Author');
        //$author=new Author;
        if ($this->session->userdata('logged') == false):
            redirect('administrator');
            exit();
        endif;
    }

    public function index()
    {
       

        $data['warning'] = '';
        $data['title']   = "Daftar Koleksi";

        $data['get_koleksi'] = $this->Collection_md->get_all_collection();

        $data['content'] = 'collection/collection_list';
        $this->load->view('administrator/index', $data);
    }

    public function get_kode_koleksi()
    {
        $genre_kode = $this->input->post('simpus_genre_genre_kd');

        $read = $this->Genres_md->readById($genre_kode);

        $genre_singkatan = $read->genre_singkatan;

        $gt_kode = $this->Collection_md->get_collection_code();

        foreach ($gt_kode->result() as $gtKode):
            if (($gtKode->koleksi_kd == null) || (substr($gtKode->koleksi_kd, 0, 3) != $genre_singkatan)):
                $koleksi_kd = $genre_singkatan . '-' . '0001';
            else:
                $substr_kd  = (int) substr($gtKode->koleksi_kd, 5);
                $count_kd   = $substr_kd + 1;
                $koleksi_kd = $genre_singkatan . '-' . sprintf("%04s", $count_kd);
            endif;
        endforeach;

        return $koleksi_kd;

    }

    public function add()
    {
        $data['warning'] = '';
        if ($this->input->post('submit')):
            
            //$this->form_validation->set_rules('koleksi_judul', 'Judul Koleksi', 'required');
            //$this->form_validation->set_rules('koleksi_isbn', 'ISBN', 'required');
            //$this->form_validation->set_rules('koleksi_stok', 'Stok', 'required');
            $this->form_validation->set_rules('koleksi_stok','Stok','required');
           // $this->form_validation->set_rules('koleksi_lokasi_rak', 'Lokasi Rak', 'required');
           // $this->form_validation->set_rules('koleksi_tebal', 'Tebal Koleksi', 'required');
           // $this->form_validation->set_rules('koleksi_deskripsi', 'Deskripsi Koleksi', 'required');
           // $this->form_validation->set_rules('simpus_penulis_penulis_kd[]', 'Penulis', 'required');
           // $this->form_validation->set_rules('simpus_genre_genre_kd', 'Genre', 'required');
           // $this->form_validation->set_rules('simpus_penerbit_penerbit_kd', 'Penerbit', 'required');
            
            if ($this->form_validation->run() == true):
                
                $config['upload_path']   = '.' . $this->config->item('upload_path_koleksi');
                $config['allowed_types'] = $this->config->item('allowed_types');
                $config['encrypt_name']  = true;

                $this->load->library('image_lib');
                $this->load->library('upload');

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('koleksi_cover')):
                    $data['warning'] = $this->upload->display_errors();
                else:
                    $dt_cover       = $this->upload->data();
                    $cover_nm       = $dt_cover['raw_name'];
                    $cover_ext      = $dt_cover['file_ext'];
                    $cover_path     = $dt_cover['file_name'];
                    $cover_fullpath = $dt_cover['full_path'];

                    $config['image_library']  = $this->config->item('image_library');
                    $config['maintain_ratio'] = $this->config->item('maintain_ratio');
                    $config['width']          = '200';
                    $config['height']         = '180';

                    $config['source_image'] = $cover_fullpath;

                    $this->image_lib->initialize();
                    $this->image_lib->resize();
                    $this->image_lib->clear();

                    $this->db->set('koleksi_kd', $this->get_kode_koleksi());

                    $this->Collection_md->add_collection($cover_path, $this->get_kode_koleksi());

                    $this->session->set_flashdata('message', 'Koleksi berhasil ditambahkan');
                    redirect('collection'); 
                    exit();
                endif;
                
               
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;
        
        $data['title']          = 'Tambah Koleksi Buku';
        $data['content']        = 'collection/collection_main';
        $data['list_genre']     = $this->Collection_md->getGenreList();
        $data['list_author']    = $this->Collection_md->getAuthorList();
        
        $data['list_publisher'] = $this->Collection_md->getPublisherList();
        $data['gt_kode'] = $this->get_kode_author_collection();
        $this->load->view('administrator/index', $data);
    }

    public function get_printr(){
        //$data['printr']=print_r($this->input->post('koleksi_stok'));
        $data['content']        = 'collection/collection_main';
        $this->load->view('administrator/index', $data);
    }
    public function delete($collection_id)
    {
        $this->Collection_md->delete_collection($collection_id);
        $this->session->set_flashdata('message', 'Koleksi berhasil dihapus');
        redirect('collection');
        exit();
    }

    public function update($collection_id)
    {
        $data['warning']        = '';
        $data['title']          = 'Ubah Koleksi';
        $data['content']        = 'collection/collection_update';
        $data['read']           = $this->Collection_md->read($collection_id);
        $data['list_genre']     = $this->Collection_md->getGenreList();
        $data['list_author']    = $this->Collection_md->getAuthorList();
        $data['list_publisher'] = $this->Collection_md->getPublisherList();

        if ($this->input->post('submit')):
            $this->form_validation->set_rules('koleksi_judul', 'Judul Koleksi', 'required');
            $this->form_validation->set_rules('koleksi_isbn', 'ISBN', 'required');
            $this->form_validation->set_rules('koleksi_stok', 'Stok', 'required');
            $this->form_validation->set_rules('koleksi_lokasi_rak', 'Lokasi Rak', 'required');
            $this->form_validation->set_rules('koleksi_tebal', 'Tebal Koleksi', 'required');
            $this->form_validation->set_rules('koleksi_deskripsi', 'Deskripsi Koleksi', 'required');
            $this->form_validation->set_rules('simpus_penulis_penulis_kd', 'Penulis', 'required');
            $this->form_validation->set_rules('simpus_genre_genre_kd', 'Genre', 'required');
            $this->form_validation->set_rules('simpus_penerbit_penerbit_kd', 'Penerbit', 'required');

            if ($this->form_validation->run() == true):
                $this->Collection_md->update($collection_id);
                $this->session->set_flashdata('message', 'Koleksi berhasil diubah');
                redirect('collection');
                exit();
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;
        $this->load->view('administrator/index', $data);
    }

    public function update_cover($collection_id)
    {
        $data['warning'] = '';
        $data['read']    = $this->Collection_md->read($collection_id);
        $data['content'] = "collection/collection_cover_update";

        if ($this->input->post('submit')):
            $config['upload_path']   = '.' . $this->config->item('upload_path_koleksi');
            $config['allowed_types'] = $this->config->item('allowed_types');
            $config['encrypt_name']  = true;

            $this->load->library('image_lib');
            $this->load->library('upload');

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('koleksi_cover')):
                $data['warning'] = $this->upload->display_errors();
            else:
                $dt_img = $this->upload->data();

                $img_nm       = $dt_img['raw_name'];
                $img_ext      = $dt_img['file_ext'];
                $img_path     = $dt_img['file_name'];
                $img_fullpath = $dt_img['full_path'];

                $config['image_library']  = $this->config->item('image_library');
                $config['maintain_ratio'] = $this->config->item('maintain_ratio');
                $config['width']          = '300';
                $config['height']         = '240';

                $config['source_image'] = $img_fullpath;

                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();

                // $this->db->set('product_id', $this->get_kode_product());
                // $this->Product_model->add_product($img_path);
                //
                $this->Collection_md->unlink_collection($collection_id);
                $this->Collection_md->update_cover($collection_id, $img_path);
                $this->session->set_flashdata('message', 'Cover koleksi telah berhasil diubah');
                redirect('collection');
                exit();
            endif;
        endif;
        $this->load->view('administrator/index', $data);
    }

    public function getCollectionbyId()
    {
        $collection_id = $this->input->post('koleksi_kd');
        $collect       = $this->Collection_md->getCollectionById($collection_id);

        foreach ($collect->result() as $collection):
            $data[] = $collection->koleksi_kd;
        endforeach;
        echo json_encode($data);
    }

    public function getAttributeCollection()
    {
        $collection_id = $this->input->post('koleksi_kd');
        // $collection_id='FKS-0001';
        //$data=array();
        $collection = $this->Collection_md->getAttributeCollection($collection_id);

        if (!empty($collection)):
            $callback = array(
                'status'        => 'success',
                'koleksi_kd'    => $collection->koleksi_kd,
                'koleksi_judul' => $collection->koleksi_judul,
                'penulis_nm'    => $collection->nama_penulis,
                'penerbit_nm'   => $collection->penerbit_nm,
                'koleksi_isbn'  => $collection->koleksi_isbn,
                'jumlah_buku'   => 1,
            );
        else:
            $callback = array(
                'status' => 'failed'
            );
        endif;

        echo json_encode($callback);
    }

    public function get_kode_author_collection()
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

}
