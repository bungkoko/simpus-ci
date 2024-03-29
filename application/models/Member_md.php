<?php

/**
 *Model Member
 *Joko Purwanto
 */
class Member_md extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function set_member()
    {
        $this->db->set('anggota_username', $this->input->post('anggota_username'));
        $this->db->set('anggota_password', md5($this->input->post('anggota_password')));
        $this->db->set('anggota_email', $this->input->post('anggota_email'));
        $this->db->set('anggota_nm', $this->input->post('anggota_nm'));
        $this->db->set('anggota_tmplahir', $this->input->post('anggota_tmplahir'));
        $this->db->set('anggota_tgllahir', $this->input->post('anggota_tgllahir'));
        $this->db->set('anggota_tgldaftar', date('Y-m-d'));
        $this->db->set('anggota_jeniskelamin', $this->input->post('anggota_jeniskelamin'));
        $this->db->set('anggota_alamat_identitas', $this->input->post('anggota_alamat_identitas'));
        $this->db->set('anggota_alamat_sekarang', $this->input->post('anggota_alamat_sekarang'));
        $this->db->set('anggota_status_kawin', $this->input->post('anggota_status_kawin'));
        $this->db->set('anggota_notelpon', $this->input->post('anggota_notelpon'));
        $this->db->set('anggota_pendidikan', $this->input->post('anggota_pendidikan'));
        $this->db->set('anggota_pekerjaan', $this->input->post('anggota_pekerjaan'));
        $this->db->set('anggota_status', 'block');
    }


    public function signup()
    {
        $this->set_member();
        return $this->db->insert('simpus_anggota');
    }

    /*function profiling($anggota_kd){
        $this->set_profiling();
        $this->db->where('anggota_kd',$anggota_kd);
        return $this->db->update('simpus_anggota');
    }

    function readprofil($anggota_kd){
        $this->db->where('anggota_kd',$anggota_kd);
        return $this->db->get('simpus_anggota')->row();
    }*/

    public function add_member($avatar)
    {
        $this->set_member();
        $this->db->set('anggota_avatar', $this->config->item('upload_path_avatar') . $avatar);
        return $this->db->insert('simpus_anggota');
    }

    public function get_kode_anggota()
    {
        $this->db->select_max('anggota_kd');
        return $this->db->get('simpus_anggota');
    }

    public function get_detail_anggota($kode)
    {
        $this->db->where('anggota_kd', $kode);
        return $this->db->get('simpus_anggota')->row();
    }

    public function get_anggota($num = '', $limit = '')
    {
        $this->db->order_by('anggota_tgldaftar', 'desc');
        $this->db->where($num, $limit);
        return $this->db->get('simpus_anggota');
    }

    public function member_auth($user, $password)
    {
        $this->db->where('anggota_username', $user);
        $this->db->where('anggota_password', $password);
        return $this->db->get('simpus_anggota')->row();
    }

    public function count_new_member_today()
    {
        $this->db->like('anggota_tgldaftar', date('Y-m-d'));
        return $this->db->count_all_results('simpus_anggota');
        //$this->db->select(select anggota_tgldaftar, count(anggota_tgldaftar) as Total_Anggota);
        //$this->db->where('anggota_tgldaftar',date('Y-m-d'));
    }

    public function count_all()
    {
        return $this->db->count_all('simpus_anggota');
    }

    public function list_member($num = '', $offset = '')
    {
        $this->db->where('anggota_tgldaftar', date('Y-m-d'));
        $this->db->group_by('anggota_kd');
        $this->db->limit($num, $offset);
        return $this->db->get('simpus_anggota');
    }

    public function get_all($num = '', $offset = '')
    {
        $this->db->limit($num, $offset);
        return $this->db->get('simpus_anggota');
    }

    public function viewByMemberId($member_id)
    {
        $this->db->where('anggota_kd', $member_id);
        return $this->db->get('simpus_anggota')->row();
    }

    public function getMemberById($member_id)
    {
        $this->db->order_by('anggota_kd', 'ASC');
        $this->db->like('anggota_kd', $member_id);
        return $this->db->get('simpus_anggota');
    }
}
