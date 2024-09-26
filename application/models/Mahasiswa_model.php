<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Muat model lainnya atau library jika diperlukan
    }

    // Contoh metode untuk mendapatkan semua data mahasiswa
    public function getAllMahasiswa()
    {
        // Gantilah dengan query yang sesuai dengan struktur database Anda
        $query = $this->db->get('tbradit'); // 'mahasiswa' adalah nama tabel
        return $query->result(); // Mengembalikan hasil sebagai array objek
    }

    // Tambahkan metode lainnya sesuai kebutuhan, misalnya untuk menambah, mengedit, atau menghapus mahasiswa
}
