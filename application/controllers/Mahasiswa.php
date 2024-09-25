<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Mahasiswa';

        // Definisikan data mahasiswa (data dummy sebagai contoh)
        $data['mahasiswa'] = [
            [
                'nim' => '2355201110',
                'nama' => 'Raditya Cahaya Putra',
                'prodi' => 'Teknik Informatika',
                'sks' => 20,
                'semester' => 3
            ],
            // Tambahkan data mahasiswa lainnya jika ada
        ];

        // Load views
        $this->load->view('Templates/header', $data);
        $this->load->view('Mahasiswa/index', $data); // Kirim data mahasiswa ke view
        $this->load->view('Templates/footer');
    }
}
