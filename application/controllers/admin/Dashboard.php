<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Dashboard - Pegas Belajar';
        $data['contents'] = 'admin/dashboard';
        $data['admin'] = $this->db->get('admin')->num_rows();
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $this->load->view('admin/index', $data);
    }
}
