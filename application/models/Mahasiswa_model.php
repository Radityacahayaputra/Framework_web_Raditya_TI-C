<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // Mendapatkan semua data mahasiswa
    public function getAllMahasiswa()
    {
        $query = $this->db->get('tbradit'); // Ganti dengan nama tabel yang sesuai
        return $query->result(); // Mengembalikan hasil sebagai array objek
    }

    // Menyimpan data mahasiswa baru
    public function insertMahasiswa($data)
    {
        return $this->db->insert('tbradit', $data);
    }
       public function UbahDataMahasiswa($nim)
    {
       $data = [
        "nim" => $this->input->post('nim', true),
        "nama" => $this->input->post('nama', true),
        "prodi" => $this->input->post('prodi', true),
        "sks" => (int)$this->input->post('sks', true),
        "semester" => (int)$this->input->post('semester', true),
       ];
       $this->db->where('nim', $nim);
       $this->db->update('tbradit', $data);
    }
    public function hapusDataMahasiswa($nim)
    {
        // Hapus data dari tabel mahasiswa berdasarkan NIM
        $this->db->where('nim', $nim);
        $this->db->delete('tbradit'); // Ganti 'tbradit' dengan nama tabel yang sesuai
    }
    
}
