<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Soal - Pegas Belajar';
        $data['contents'] = 'admin/soal/index';
        $data['soal'] = $this->db->get('soal', 0, 12)->result();
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('soal', 'Soal', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Soal - Pegas Belajar';
            $data['contents'] = 'admin/soal/index';
            $this->load->view('admin/index', $data);
        } else {
            $data = [
                'soal' => $this->input->post('soal'),
                'jawab_a' => $this->input->post('jawab_a'),
                'jawab_b' => $this->input->post('jawab_b'),
                'jawab_c' => $this->input->post('jawab_c'),
                'jawab_d' => $this->input->post('jawab_d')
            ];

            $this->db->insert('soal', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Soal baru telah ditambahkan!</div>');
            redirect('admin/soal');
        }
    }

    public function edit($id_soal)
    {
        $data['title'] = 'Edit Soal';
        $data['contents'] = 'admin/soal/edit';
        $where = array('id_soal' => $id_soal);
        $data['soal'] = $this->my_model->edit_soal($where, 'soal')->result();

        // $data['soal'] = $this->my_model->edit_soal($where, 'soal')->results();
        $this->load->view('admin/index', $data);
    }

    public function update()
    {
        $id_soal        = $this->input->post('id_soal');
        $soal           = $this->input->post('soal');
        $jawab_a        = $this->input->post('jawab_a');
        $jawab_b        = $this->input->post('jawab_b');
        $jawab_c        = $this->input->post('jawab_c');
        $jawab_d        = $this->input->post('jawab_d');


        $data = array(
            'soal'             => $soal,
            'jawab_a'          => $jawab_a,
            'jawab_b'          => $jawab_b,
            'jawab_c'          => $jawab_c,
            'jawab_d'          => $jawab_d
        );
        $where = array(
            'id_soal'          => $id_soal
        );
        $this->my_model->update_soal($where, $data, 'soal');


        redirect('admin/soal');
    }
}
