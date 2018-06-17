<?php
/**
 * Source by : Joko Purwanto
 */
class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->signup();
    }

    public function get_kode_anggota()
    {
        $gt_kode   = $this->Member_md->get_kode_anggota();
        $member_kd = '';
        $date      = getdate();
        $gtYear    = $date['year'];
        $sub_year  = substr($gtYear, 2, 4);

        foreach ($gt_kode->result() as $gtKode):
            if ($gtKode->anggota_kd == null):
                $member_kd = $sub_year . '0001';
                //else:
            else:
                $substr_member_kd = (int) substr($gtKode->anggota_kd, 2, 6);
                $tmp              = $substr_member_kd + 1;
                $member_kd        = $sub_year . sprintf("%04s", $tmp);
            endif;
        endforeach;

        return $member_kd;
    }

    public function signup()
    {
        $data['title']   = 'Registrasi Anggota';
        $data['content'] = 'member/signup';

        if ($this->input->post('submit') == true):
            $this->db->set('anggota_kd', $this->get_kode_anggota());
            $this->session->set_userdata('anggota_kd',$this->get_kode_anggota());
            $this->Member_md->signup();
            
            redirect('member/profiling');
        endif;

        $this->load->view('page', $data);
    }

    public function signin()
    {
        $data['title']='Sign In Anggota';
        $data['content']='member/signin';

        $this->load->view('page',$data);
    }

    public function profiling()
    {
        $anggota_kd=$this->session->userdata('anggota_kd');
        $data['title']   = "Lengkapi Profil";
        $data['content'] = "member/profiling";

        //$data['read']=$this->Member_md->readprofil($data['anggota_kd']);
        //testing read with data static 
        $data['read']=$this->Member_md->readprofil($anggota_kd);
 
        if($this->input->post('submit')):
            $this->Member_md->profiling($anggota_kd);
            redirect('member/signin');
            $this->session->unset_userdata('anggota_kd');
        endif;

        $this->load->view('page', $data);
    }

    public function search_member()
    {
        $member_id = $this->input->post('anggota_kd');
        //$member_id='160001';
        $member = $this->Member_md->viewByMemberId($member_id);

        if (!empty($member)):
            $callback = array(
                'status'     => 'success',
                'anggota_nm' => $member->anggota_nm,
            );
        else:
            $callback = array(
                'status' => 'failed');
        endif;

        echo json_encode($callback);
    }

    public function getMemberbyId()
    {
        $member_id = $this->input->post('anggota_kd');
        $member    = $this->Member_md->getMemberById($member_id);

        foreach ($member->result() as $mbr):
            $data[] = $mbr->anggota_kd;
        endforeach;
        echo json_encode($data);
    }

}
