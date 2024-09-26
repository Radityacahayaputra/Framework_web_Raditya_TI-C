<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation'); 
    }

    public function index()
    {
        $data['judul'] = 'Halaman Mahasiswa';
        $data['Mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

        // Aturan validasi
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');
        $this->form_validation->set_rules('semester', 'Semester', 'required|numeric');

        // Jika validasi gagal, kembali ke tampilan
        if ($this->form_validation->run() == FALSE) {
            // Load views
            $this->load->view('Templates/header', $data);
            $this->load->view('Mahasiswa/index', $data); // Kirim data mahasiswa ke view
            $this->load->view('Templates/footer');
        } else {
            // Jika validasi berhasil, proses data
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'prodi' => $this->input->post('prodi'),
                'sks' => (int)$this->input->post('sks'),
                'semester' => (int)$this->input->post('semester'),
            ];

            // Panggil model untuk menyimpan data mahasiswa
            $this->Mahasiswa_model->insertMahasiswa($data);

            // Redirect atau tampilkan pesan sukses
            redirect('Mahasiswa/index'); // Atau ganti dengan nama method yang sesuai
        }
    }
}
