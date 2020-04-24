<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ImunisasiController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesanImunisasiModel');
     
    }
 
    public function index(){
        $data['data_jadwal'] = $this->PesanImunisasiModel->getAllData();
        $dataUser = $this->session->userdata('nama');
        $user = $this->PesanImunisasiModel->getUser($dataUser);
        $data['data_modal_imunisasi'] = $this->PesanImunisasiModel->getPesan($user['id_user']);
        $this->load->view('imunisasi',$data);
        
    }
}