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
}
