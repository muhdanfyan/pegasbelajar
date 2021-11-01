<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        siswa_login();
        $this->load->model('My_model');
    }

    public function index()
    {
        $data['title'] = 'Profile Siswa - Pegasbelajar';
        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->load->view('profile-siswa', $data);
    }
}
