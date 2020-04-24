<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ImunisasiController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelImunisasiJadwal');
     
    }
 
    public function index(){
        $data['data_jadwal'] = $this->modelImunisasiJadwal->getAllJadwalImunisasi();
        $this->load->view('imunisasi',$data);
        
    }
}