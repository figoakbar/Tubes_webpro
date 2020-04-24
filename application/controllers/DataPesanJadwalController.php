<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class DataPesanJadwalController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesanImunisasiModel');
        $this->load->helper('form');
        $this->load->helper('url');
    }
 
    public function index(){
        $this->load->view('DataPesanJadwal');
    }

    public function ambilData(){
        $dataPesan = $this->PesanImunisasiModel->getAllData2('imunisasipesan')->result();
        echo json_encode($dataPesan);
    }

}