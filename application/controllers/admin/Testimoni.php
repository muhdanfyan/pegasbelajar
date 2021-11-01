<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('my_model');
    }

    public function index()
    {
        $data['title'] = 'Testimoni - Pegas Belajar';
        $data['contents'] = 'admin/testimoni/index';
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('testimoni', 'Testimoni', 'required|trim');

        if ($this->form_validation->run() === false) {
            $data['title'] = 'Testimoni - Pegas Belajar';
            $data['contents'] = 'admin/testimoni/index';
            $data['testimoni'] = $this->db->get('testimoni')->result();
            $this->load->view('admin/index', $data);
        } else {
            $config['upload_path']         = './assets/upload/testimoni/';
            $config['allowed_types']     = 'gif|jpg|png|jpeg';
            $config['max_size']          = '2400'; //dalam KB
            $config['max_width']          = '2024';
            $config['max_height']          = '2024';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {

                $data['title'] = 'testimoni - Pegas Belajar';
                $data['contents'] = 'admin/testimoni/index';
                $data['testimoni'] = $this->db->get('testimoni')->result();
                $this->load->view('admin/index', $data);
                // $error = array('error' => $this->upload->display_errors());
            } else {
                $data_gambar = array('upload_data' => $this->upload->data());
                // thumbnail gambar
                $config['image_library']     = 'gd2';
                $config['source_image']     = './assets/upload/testimoni/' . $data_gambar['upload_data']['file_name'];
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']     = TRUE;
                $config['width']             = 5000;
                $config['height']           = 5000;

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'testimoni' => $this->input->post('testimoni'),
                    'foto' => $data_gambar['upload_data']['file_name'],
                    'date_created' => time("Y/m/d H:iP")
                ];

                $this->db->insert('testimoni', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Testimoni baru telah ditambahkan!</div>');
                redirect('admin/testimoni');
            }
        }
    }

    public function edit($id_testimoni)
    {
        $data['title'] = 'Edit Testimoni';
        $data['contents'] = 'admin/testimoni/edit';
        $where = array('id_testimoni' => $id_testimoni);
        $data['testimoni'] = $this->my_model->edit_testimoni($where, 'testimoni')->result();
        $this->load->view('admin/index', $data);
    }

    public function update()
    {
        $id_testimoni   = $this->input->post('id_testimoni');
        $nama           = $this->input->post('nama');
        $jabatan        = $this->input->post('jabatan');
        $testimoni      = $this->input->post('testimoni');
        // $foto           = $this->input->post('foto');


        $data = array(
            'nama'          => $nama,
            'jabatan'       => $jabatan,
            'testimoni'     => $testimoni,
            // 'foto'          => $foto        
        );
        $where = array(
            'id_testimoni' => $id_testimoni
        );
        $this->my_model->update_testimoni($where, $data, 'testimoni');

        redirect('admin/testimoni');
    }

    public function hapus($id_testimoni)
    {
        $where = array('id_testimoni' => $id_testimoni);
        $this->my_model->hapus_data($where, 'testimoni');

        redirect('admin/testimoni');
    }
}
