<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        // pengecekan session user
        // apabila sdah login jika kembali ke halaman login akan diarahkan ke halaman dashboard
        if ($this->session->userdata('email')) {
            redirect('admin/dashboard');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "User Login";
            $this->load->view('admin/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['email' => $email])->row_array();
        $guru = $this->db->get_where('guru', ['email' => $email])->row_array();

        if ($user) {
            // jika email aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin/dashboard');
                    } else {
                        redirect('admin/auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('admin/auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not been activated!</div>');
                redirect('admin/auth');
            }
        } else if ($guru) {
            if ($guru['is_active'] == 1) {
                // cek password
                if (password_verify($password, $guru['password'])) {
                    $data = [
                        'email' => $guru['email'],
                        'id_guru' => $guru['id_guru'],
                        'role_id' => $guru['role_id']
                    ];
                    

                    $this->session->set_userdata($data);
                    if ($guru['role_id'] == 2) {
                        redirect('guru/profile');
                    } else {
                        redirect('admin/auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('admin/auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not been activated!</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('admin/auth');
    }
}
