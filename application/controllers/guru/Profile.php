<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('my_model');
    }

    public function index()
    {

        $id_guru = $this->session->userdata('id_guru');

        $data['title'] = 'Profile Guru - Pegas Belajar';
        $data['guru'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
        $data['contents'] = 'admin/guru/profile';
        $data['kelas'] = $this->db->get_where('kelas', ['id_guru' => $id_guru])->result();

        $data['total_kelas'] = $this->db->get_where('kelas', ['id_guru' => $id_guru])->num_rows();
        $data['total_siswa'] = $this->my_model->get_total_kelas($id_guru)->num_rows();
        // var_dump($id_guru); die;
        $this->load->view('admin/guru/index', $data);
    }
}
