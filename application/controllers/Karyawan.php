<?php
defined('BASEPATH') or exit('No direct access allowed');


class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Karyawan';
        $data['Karyawan'] = $this->Karyawan_model->getAllKaryawan();
        
        $this->load->view('templets/header', $data);
        $this->load->view('Karyawan/index', $data);
        $this->load->view('templets/footer');
    }
    

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Karyawan';

        $this->form_validation->set_rules('id', 'NO Id', 'required');
        $this->form_validation->set_rules('Nama', 'Nama Karyawan', 'required');
         $this->form_validation->set_rules('Alamat', 'Alamat', 'required');
          $this->form_validation->set_rules('Agama', 'Agama', 'required');
           $this->form_validation->set_rules('TTL', 'Tempat Tanggal Lahir', 'required');
           $this->form_validation->set_rules('Lulusan', 'Lulusan', 'required');
            $this->form_validation->set_rules('Bagian', 'BAGIAN', 'required');
      


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templets/header', $data);
            $this->load->view('karyawan/tambah');
            $this->load->view('templets/footer');
        } else {
            $this->Karyawan_model->tambahDataKaryawan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('karyawan');
        }
    }
    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Karyawan';
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);

        $this->form_validation->set_rules('id', 'NO Id', 'required');
        $this->form_validation->set_rules('Nama', 'Nama Karyawan', 'required');
         $this->form_validation->set_rules('Alamat', 'Alamat', 'required');
          $this->form_validation->set_rules('Agama', 'Agama', 'required');
           $this->form_validation->set_rules('TTL', 'Tempat Tanggal Lahir', 'required');
           $this->form_validation->set_rules('Lulusan', 'Lulusan', 'required');
            $this->form_validation->set_rules('Bagian', 'BAGIAN', 'required');
       
     

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templets/header', $data);
            $this->load->view('karyawan/ubah', $data);
            $this->load->view('templets/footer');
        } else {
            $this->Karyawan_model->ubahDataKaryawan();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('Karyawan');
        }
    }

    public function hapus($id)
    {
        $this->Karyawan_model->hapusDataKaryawan($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('Karyawan');
    }
}
