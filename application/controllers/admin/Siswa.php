<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Siswa - Pegas Belajar';
        $data['contents'] = 'admin/siswa/index';
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->load->view('admin/index', $data);
    }
}
