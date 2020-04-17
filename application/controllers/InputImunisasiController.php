<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class InputImunisasiController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('imunisasiModel');
     
    }
 
    public function index(){
        $this->load->view('inputImunisasi');
    }

    public function addImunization(){
        $nama = $this->input->post('namaimunisasi');
        $jenis = $this->input->post('jenisimunisasi');
        if($nama != ''){
            if($this->imunisasiModel->cekImunisasi($nama)){
                $data = array(
                    'nama_imunisasi' => $nama,
                    'jenis_imunisasi' => $jenis
                );
                $this->imunisasiModel->insertImunisasi($data);
                redirect('HomeImunisasiController');
            }else{
                $this->session->set_flashdata('error_messages','Data Imunisasi Sudah Ada');
                redirect('InputImunisasiController');
            }
        }else {
            $this->session->set_flashdata('error_messages','Tidak Boleh Kosong');
            redirect('InputImunisasiController');
        }
       
    }

}