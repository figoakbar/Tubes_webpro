<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class InputObatController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('InputObatModel');    
    }
 
    public function index()
    {
        $this->load->view('InputObat.php');
    }

    public function addMedicine(){
        $nama = $this->input->post('namaobat');
        $jenis = $this->input->post('jenisobat');
        if(($nama != '') && ($jenis != '')){
            if($this->InputObatModel->cekObat($nama,$jenis)){
                $data = array(
                    'nama_obat' => $nama,
                    'jenis_obat' => $jenis
                );
                $this->InputObatModel->insertObat($data);
                redirect('InputObatController');
            }else{
                $this->session->set_flashdata('error_messages','Data Imunisasi Sudah Ada');
                redirect('InputObatController');
            }
        }else {
            $this->session->set_flashdata('error_messages','Tidak Boleh Kosong');
            redirect('InputObatController');
        }
    }


}