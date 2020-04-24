<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class PesanJadwalController extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('PesanImunisasiModel');
     
    }
 
    public function index()
    {
        $data['data_imunisasi'] = $this->PesanImunisasiModel->getAllData();
        $dataUser = $this->session->userdata('nama');
        $user = $this->PesanImunisasiModel->getUser($dataUser);
        $data['data_modal_imunisasi'] = $this->PesanImunisasiModel->getPesan($user['id_user']);
        $this->load->view('imunisasi',$data);
    }

    public function addJadwal($id){
        $data = $this->PesanImunisasiModel->getJadwal($id);
        $dataUser = $this->session->userdata('nama');
        $user = $this->PesanImunisasiModel->getUser($dataUser);
        $input = array(
            'id_user' => $user['id_user'],
            'id_jadwal' => $id,
            'nama_user' => $user['nama_user'],
            'nama_rs' => $data['nama_rs'],
            'jadwal_imunisasi' => $data['jadwal_imunisasi'],
            'jenis_imunisasi' => $data['jenis_imunisasi'],
            'harga' => $data['harga']
        );
        $this->PesanImunisasiModel-> insertPesan($input);
        redirect('ImunisasiController');
    }
}