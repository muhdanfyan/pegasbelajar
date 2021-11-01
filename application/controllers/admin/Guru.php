<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Guru - Pegas Belajar';
        $data['contents'] = 'admin/guru/daftar-guru';
        $data['guru'] = $this->db->get('guru')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Guru - Pegas Belajar';
            $data['contents'] = 'admin/guru/tambah';
            $data['guru'] = $this->db->get('guru')->result();
            $this->load->view('admin/index', $data);
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
            redirect('admin/guru');
        }
    }
}
