<?php

use GuzzleHttp\Client;

class My_model extends CI_Model
{
    // public function edit_gaya($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }

    public function detail_gaya($id_gaya)
    {
        $result = $this->db->where('id_gaya_belajar', $id_gaya)->get('gaya_belajar');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function edit_gaya($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_gaya($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // edit testimoni
    public function edit_testimoni($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_testimoni($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // end edit testimoni


    // edit soal
    public function edit_soal($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_soal($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // end edit soal

    // model hapus
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function listKelas($id_guru, $id)
    {
        $this->db->select('kelas.kode_kelas, kelas.id_guru, siswa.nama AS nama, siswa.tempat_lahir, siswa.tanggal_lahir AS ttl, siswa.id_siswa, siswa.email, siswa.nis, siswa.asal_sekolah, siswa.no_hp, kelas.id_kelas ')
            ->where("kelas.id_kelas = $id AND kelas.id_guru = $id_guru ")
            ->join('siswa', 'siswa.kode_kelas = kelas.kode_kelas')
            // ->join('guru', 'siswa.kode_kelas = kelas.kode_kelas')
            ->from('kelas');
        return $this->db->get();
    }

    public function get_hasil_by_id($id_siswa)
    {
        $this->db->select('*')
            ->where('id_siswa', $id_siswa)
            ->from('jawaban');
        return $this->db->get();
    }

    public function get_nilai_max()
    {
        $this->db->select('max("kunciF, kunciO, kunciD, kunciT") ')
            ->FROM('jawaban');
        return $this->db->get();
    }

    public function get_total_kelas($id_guru)
    {
        $this->db->select('siswa.id_siswa, siswa.nama, siswa.kode_kelas, kelas.id_guru')
                 ->where("id_guru = $id_guru")
                 ->from('siswa')
                 ->join('kelas', 'siswa.kode_kelas = kelas.kode_kelas');
        return $this->db->get();
    }

  
}
