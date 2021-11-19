<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Source By : Joko Purwanto
 */
class Publisher extends CI_Controller
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
    	

        $config['base_url']   = base_url() . 'index.php/publisher/index/';
        $config['total_rows'] = $this->Publisher_md->get_publisher()->num_rows();
        $config['per_page']   = '10';
        $config['num_links']  = '6';

        $this->pagination->initialize($config);

        $data['get_publisher']   = $this->Publisher_md->get_publisher($config['per_page'], $this->uri->segment(3));
        $data['pagination'] = $this->pagination->create_links();

        $data['title']   = 'Penerbit';
        $data['content'] = 'publisher/publisher_list';
        
        $this->load->view('administrator/index', $data);
    }

    public function add(){
    	$data['warning']='';
        if ($this->input->post('submit')):
            $this->form_validation->set_rules('penerbit_nm', 'Penerbit', 'required');
            $this->form_validation->set_rules('penerbit_email', 'Email Penerbit', 'required|valid_email');
            $this->form_validation->set_rules('penerbit_alamat', 'Alamat Penerbit', 'required');
            $this->form_validation->set_rules('penerbit_notelp', 'Nomer Telepon Penerbit', 'required');

            if ($this->form_validation->run() == true):
                $this->Publisher_md->add_publisher();
                $this->session->set_flashdata('message','Penerbit telah ditambahkan');
                redirect('Publisher');
                exit();
            else:
                $data['warning'] = validation_errors();
            endif;
        endif;
        $data['title']='Penerbit';
        $data['content']='publisher/publisher_main';
        $this->load->view('administrator/index',$data);

    }

    public function add_publisher_popup(){
        return $this->Publisher_md->add_publisher();
    }

    public function delete($publisher_id){
    	$this->Publisher_md->delete_publisher($publisher_id);
    	$this->session->set_flashdata('message','Penerbit telah dihapus');
    	redirect('publisher');
    	exit();
    }

    public function update($publisher_id){
    	$data['warning']='';
    	$data['title']='Penerbit';
    	$data['content']='publisher/publisher_update';
    	$data['read']=$this->Publisher_md->read($publisher_id);

    	if($this->input->post('submit')):
    		$this->Publisher_md->update_publisher($publisher_id);
    		$this->session->set_flashdata('message','Penerbit telah diubah');
    		redirect('publisher');
    		exit();
    	endif;
    	$this->load->view('administrator/index',$data);
    }
}
