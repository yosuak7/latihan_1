<?php
class Quiz extends CI_Controller
{
    public function index()
    {
    $this->load->view('V_quiz');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('Nim', 'Nim','required|min_length[8]|numeric');
        $this->form_validation->set_rules('Nama', 'Nama', 'required|alpha');
        $this->form_validation->set_rules('Kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('Tlahir', 'Tempat Lahir', 'required|alpha');
        $this->form_validation->set_rules('TgLahir', 'Tanggal Lahir', 'required|numeric');
        $this->form_validation->set_rules('Alamat', 'Alamat', 'required');



        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong');
        $this->form_validation->set_message('min_length', '%s Minimal 8 karakter');
        $this->form_validation->set_message('numeric', '%s Harus di isi dengan angka');
        $this->form_validation->set_message('alpha', '%s Harus di isi dengan huruf');
        


        if ($this->form_validation->run() != TRUE) {
        $this->load->view('V_quiz');
        } else {
        $data = [
            'Nim' => $this->input->post('Nim'),
            'Nama' => $this->input->post('Nama'),
            'Kelas' => $this->input->post('Kelas'),
            'Tlahir' => $this->input->post('Tlahir'),
            'TgLahir' => $this->input->post('TgLahir'),
            'Alamat' => $this->input->post('Alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'Agama' => $this->input->post('Agama')
        ];
            $this->load->view('DataQuiz', $data);
        }
    }
}