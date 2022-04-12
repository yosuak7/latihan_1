<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
    $this->load->view('form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah','required|min_length[3]');

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]');

        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong');
        $this->form_validation->set_message('min_length', '%s Minimal 3 karakter');

        if ($this->form_validation->run() != TRUE) {
        $this->load->view('form-matakuliah');
        } else {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];
            $this->load->view('datamatakuliah', $data);
        }
    }
}