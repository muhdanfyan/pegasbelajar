<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Konfigurasi extends CI_Controller
{
    public function index()
    {
        # code...
    }

    public function slider()
    {
        $data['title'] = 'Slider - Pegas Belajar';
        $data['contents'] = 'admin/slider/index';
        $data['slider'] = $this->db->get('slider')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambahSlider()
    {
        $this->form_validation->set_rules('nama_slider', 'Nama Slider', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Slider - Pegas Belajar';
            $data['contents'] = 'admin/slider/index';
            $data['slider'] = $this->db->get('slider')->result();
            $this->load->view('admin/index', $data);
        } else {

            $config['upload_path']         = './assets/upload/slider/';
            $config['allowed_types']     = 'gif|jpg|png|jpeg';
            $config['max_size']          = '2400'; //dalam KB
            $config['max_width']          = '2024';
            $config['max_height']          = '2024';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {

                $data['title'] = 'Slider - Pegas Belajar';
                $data['contents'] = 'admin/slider/index';
                $data['slider'] = $this->db->get('slider')->result();
                $this->load->view('admin/index', $data);
                // $error = array('error' => $this->upload->display_errors());
            } else {
                $data_gambar = array('upload_data' => $this->upload->data());
                // thumbnail gambar
                $config['image_library']     = 'gd2';
                $config['source_image']     = './assets/upload/slider/' . $data_gambar['upload_data']['file_name'];
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']     = TRUE;
                $config['width']             = 5000;
                $config['height']           = 5000;

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                $data = [
                    'nama_slider' => $this->input->post('nama_slider'),
                    'text' => $this->input->post('text'),
                    'gambar' => $data_gambar['upload_data']['file_name'],
                    'status' => $this->input->post('status')
                ];

                $this->db->insert('slider', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Slider baru berhasil ditambahkan!</div>');
                redirect('admin/konfigurasi/slider');
            }
        }
    }
}
