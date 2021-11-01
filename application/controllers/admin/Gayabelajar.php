<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gayabelajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('my_model');
    }

    public function index()
    {
        $data['title'] = 'Gaya Belajar - Pegas Belajar';
        $data['contents'] = 'admin/gayabelajar/index';
        $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_gaya_belajar', 'Nama Gaya Belajar', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('karakteristik', 'Karakteristik', 'trim|required');
        $this->form_validation->set_rules('icon', 'Icon', 'trim|required');
        $this->form_validation->set_rules('kekuatan', 'Kekuatan', 'trim|required');

        if ($this->form_validation->run()==FALSE) { 
            $data['title'] = 'Gaya Belajar - Pegas Belajar';
            $data['contents'] = 'admin/gayabelajar/tambah';
            $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
            
            $this->load->view('admin/index', $data);
        }else {
            
            $config['upload_path']      = './assets/upload/gayabelajar/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '5000';
            $config['max_width']        = '5000';
            $config['max_height']       = '5000';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('gambar')){
                $data['title']          = 'Gaya Belajar - Pegas Belajar';
                $data['contents']       = 'admin/gayabelajar/tambah';
                $data['gaya_belajar']   = $this->db->get('gaya_belajar')->result();
                
                $this->load->view('admin/index', $data);
            }
            else{
                $data_gambar = array('upload_data' => $this->upload->data());
                // thumbnail gambar
                $config['image_library']        = 'gd2';
                $config['source_image']         = './assets/upload/gayabelajar/thumbs/' . $data_gambar['upload_data']['file_name'];
                $config['create_thumb']         = TRUE;
                $config['maintain_ratio']       = TRUE;
                $config['width']                = 250;
                $config['height']               = 250;

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

            $data = [
                'nama_gaya_belajar'     => $this->input->post('nama_gaya_belajar'),
                'title'                 => $this->input->post('title'),
                'gambar'                => $data_gambar['upload_data']['file_name'],
                'karakteristik'         => $this->input->post('karakteristik'),
                'icon'                  => $this->input->post('icon'),
                'tipe_kepribadian'      => $this->input->post('tipe_kepribadian'),
                'tugas_yg_sesuai'       => $this->input->post('tugas_yg_sesuai'),
                'kemampuan_adaptif'     => $this->input->post('kemampuan_adaptif'),
                'kekuatan'              => $this->input->post('kekuatan'),
                'kelemahan'             => $this->input->post('kelemahan'),
                'cara_belajar'          => $this->input->post('cara_belajar'),
                'metode_guru'           => $this->input->post('metode_guru'),
                'date_created'          => time("Y/m/d H:iP")
            ];

            $this->db->insert('gaya_belajar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gaya belajar baru telah ditambahkan!</div>');
            redirect('admin/gayabelajar');
        }}

    }
    public function edit($id_gaya_belajar)
    {
        $data['title'] = 'Edit Gaya Belajar';
        $data['contents'] = 'admin/gayabelajar/edit';
        $where = array('id_gaya_belajar' => $id_gaya_belajar);
        $data['gaya'] = $this->my_model->edit_gaya($where, 'gaya_belajar')->result();
        $this->load->view('admin/index', $data);
    }

    public function update()
    {
        $id_gaya_belajar        = $this->input->post('id_gaya_belajar');
        $nama_gaya_belajar      = $this->input->post('nama_gaya_belajar');
        $title                  = $this->input->post('title');
        $karakteristik          = $this->input->post('karakteristik');
        $icon                   = $this->input->post('icon');
        $tipe_kepribadian       = $this->input->post('tipe_kepribadian');
        $tugas_yg_sesuai        = $this->input->post('tugas_yg_sesuai');
        $kemampuan_adaptif      = $this->input->post('kemampuan_adaptif');
        $kekuatan               = $this->input->post('kekuatan');
        $kelemahan              = $this->input->post('kelemahan');
        $cara_belajar           = $this->input->post('cara_belajar');
        $metode_guru            = $this->input->post('metode_guru');

        $data = array(
            'nama_gaya_belajar'    => $nama_gaya_belajar,
            'title'                => $title,
            'karakteristik'        => $karakteristik,
            'icon'                 => $icon,
            'tipe_kepribadian'     => $tipe_kepribadian,
            'tugas_yg_sesuai'      => $tugas_yg_sesuai,
            'kemampuan_adaptif'    => $kemampuan_adaptif,
            'kekuatan'             => $kekuatan,
            'kelemahan'            => $kelemahan,
            'cara_belajar'         => $cara_belajar,
            'metode_guru'          => $metode_guru
        );
        $where = array(
            'id_gaya_belajar' => $id_gaya_belajar
        );
        $this->my_model->update_gaya($where, $data, 'gaya_belajar');
        redirect('admin/gayabelajar');
    }

    public function hapus($id_gaya_belajar)
    {
        $where = array('id_gaya_belajar' => $id_gaya_belajar);
        $this->my_model->hapus_data($where, 'gaya_belajar');

        redirect('admin/gayabelajar');
    }
}
