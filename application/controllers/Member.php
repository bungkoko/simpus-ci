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

    public function signup()
    {
        $data['title']='Pendaftaran Keanggotaan Perpustakaan';
        $data['content']='member/signup';
        $this->load->view('page',$data);
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
