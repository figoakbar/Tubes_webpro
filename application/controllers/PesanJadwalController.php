<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class PesanJadwalController extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('PesanImunisasiModel');
     
    }
 
    public function index()
    {
        $data['data_jadwal'] = $this->PesanImunisasiModel->getAllData();
        $dataUser = $this->session->userdata('nama');
        $user = $this->PesanImunisasiModel->getUser($dataUser);
        $data['data_modal'] = $this->PesanImunisasiModel->getPesan($user['id_user']);
        $this->load->view('imunisasi',$data);
    }

    public function addMedicine($id){
        $data = $this->PesanImunisasiModel->getObat($id);
        $dataUser = $this->session->userdata('nama');
        $user = $this->modelObat->getUser($dataUser);
        $input = array(
            'id_user' => $user['id_user'],
            'id_obat' => $id,
            'nama_obat' => $data['nama_obat'],
            'nama_user' => $user['nama_user'],
            'jenis_obat' => $data['jenis_obat']
        );
        $this->modelObat->insertDataPesananObat($input);
        redirect('PesanObatController');
    }
}