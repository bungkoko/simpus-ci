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

    public function autocomplete_member()
    {
    	$keyword=$this->uri->segment(3);
        //$keyword = $this->input->post('anggota_kd');
    	//$keyword='160001';

        $member = $this->Member_md->get_autocomplete($keyword);

        foreach ($member->result() as $mbr):
            $data['query']     = $keyword;
            $data['suggest'][] = array(
            						'value'=>$mbr->anggota_kd,
            						'nama'=>$mbr->anggota_nm
            					);
        endforeach;

        echo json_encode($data);
    }
}
