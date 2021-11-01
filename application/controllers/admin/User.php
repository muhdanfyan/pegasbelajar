<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'User - Pegas Belajar';
        $data['admin'] = $this->db->get('admin')->result();
        $data['contents'] = 'admin/user/index';
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        # code...
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[admin.email]|valid_email');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() === false) {
            $data['title'] = 'User - Pegas Belajar';
            $data['contents'] = 'admin/user/index';
            $this->load->view('admin/index', $data);
        } else {

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)), //'true' untuk menghindari XSS (Cross-site scripting)
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time("Y/m/d H:iP")

            ];

            // menambahkan data ke tabel user
            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been registered!</div>');
            redirect('admin/user');
        }
    }
}
