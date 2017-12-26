<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source by : Joko Purwanto
 */
class Administrator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') == true):
            redirect('dashboard');
            exit();
        endif;
    }

    public function index()
    {
        $this->signin();
    }

    public function signin()
    {
        $data['warning'] = '';
        $data['error']   = '';

        $this->form_validation->set_rules('user_name', 'username', 'required');
        $this->form_validation->set_rules('user_password', 'password', 'required');

        if ($this->form_validation->run() == true):
            $username = $this->input->post('user_name');
            $password = md5($this->input->post('user_password'));

            //Check Administator Auth
            $this->db->where('user_name', $username);
            $this->db->where('user_password', $password);
            $query = $this->db->get('simpus_user')->row();
            if (count($query)):
                $admin_auth = array('username' => $query->user_name,
                    'fullname'                     => $query->user_namalengkap,
                    'email'                        => $query->user_email,
                    'user_role'                    => $query->user_role,
                    'logged'                       => true,
                );
                $this->session->set_userdata($admin_auth);
                redirect('dashboard');
            else:
                $data['warning'] = "Username atau password tidak sesuai";
            endif;
        else:
            $data['error'] = validation_errors();
        endif;
        $data['title'] = "Sign In Administator";
        //$data['content']='administrator/signin';
        $this->load->view('administrator/signin', $data);
    }

    public function signout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('fullname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_role');
        $this->session->unset_userdata('logged');
        redirect('administrator');
    }

}
