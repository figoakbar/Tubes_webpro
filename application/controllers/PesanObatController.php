<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class PesanObatController extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('modelObat');
     
    }
 
    public function index()
    {
        $data['data_jadwal'] = $this->modelObat->getAllData();
        $dataUser = $this->session->userdata('nama');
        $user = $this->modelObat->getUser($dataUser);
        $data['data_modal'] = $this->modelObat->getPesananObat($user['id_user']);
        $this->load->view('pesanObat',$data);
    }

    public function addMedicine($id){
        $data = $this->modelObat->getObat($id);
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