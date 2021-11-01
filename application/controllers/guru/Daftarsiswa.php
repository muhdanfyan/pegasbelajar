<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarsiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
    
            
            $this->load->model('my_model');
     
        
    }

    public function index()
    {
        $id_kelas = $this->uri->segment('4');

        $id_guru = $this->session->userdata('id_guru');
        // $id_guru =7;
        // var_dump($id_guru);
        // die;
        // $kode_kelas = $this->db->get('kelas')->
        $data['title'] = 'Daftar Siswa - Pegas Belajar';
        $data['siswa'] = $this->my_model->listKelas($id_guru,$id_kelas)->result();
        ;

        



        $data['guru'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row();
        $data['kelas'] = $this->db->get_where('kelas', ['id_guru' => $id_guru])->result();
        // $data['siswa'] = $this->db->get_where('siswa', ['kode_kelas' => ])->result();
        $data['contents'] = 'admin/guru/daftar-siswa';
        $data['total_kelas'] = $this->db->get_where('kelas', ['id_guru' => $id_guru])->num_rows();

        $this->load->view('admin/guru/index', $data);
    }
}

