<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class InputRSController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('modelRS');    
    }
 
    public function index()
    {
        $this->load->view('InputRumahSakit.php');
    }

    public function addHospital(){
        $nama = $this->input->post('namaRS');
        if(!$this->modelRS->cekRS($nama)){
            $data = array(
                'nama_rs' => $nama
            );
            $this->modelRS->insertRS($data);
            $this->session->set_flashdata('good_messages','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data rumah sakit berhasil disimpan.
         </div>');
         redirect('InputRSController');
        }else{
            $this->session->set_flashdata('error_messages','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data rumah sakit sudah ada.
         </div>');
         redirect('InputRSController');
        }
        redirect('HomeRumahSakitController');
    }

    public function addHospitalFinal(){
        $nama = $this->input->post('namaRS');
        $config['upload_path']          = './assets/image/'; 
        $config['allowed_types']        =  'jpg|png';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_rs')){
            $config['info'] = $this->upload->display_errors();
        }else{
            $config['info'] = 'Upload Berhasil';
            $cek = array('upload_data' => $this->upload->data());
        }
        
        if(!$this->modelRS->cekRS($nama)){
            $uploadData = array('upload_data' => $this->upload->data());
            $data = array(
                'nama_rs' => $nama,
                'picture_rs' => $uploadData['upload_data']['file_name']
            );
            $this->modelRS->insertRS($data);
        }else{
            $this->session->set_flashdata('error_messages','Data Obat Sudah Ada');
        }
        redirect('HomeRumahSakitController');
            
        
    }
}