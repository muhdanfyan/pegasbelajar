<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
    }

    public function index()
    {
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Register Guru - Pegas Belajar';
            // $data['contents'] = 'auth/register-guru';
            // $data['guru'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
            // $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
            $this->session->set_userdata($data);
            $this->load->view('auth/register-guru', $data);
        } else {
            $data = [
                'nama_guru' => $this->input->post('nama_guru'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'no_hp' => $this->input->post('no_hp'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'nip' => $this->input->post('nip'),
                'is_active' => 1,
                'role_id' => 2,
                'date_created' => time("Y/m/d H:iP")
            ];

            $this->db->insert('guru', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Guru baru telah ditambahkan!</div>');
            redirect('front');
        }
    }
}
