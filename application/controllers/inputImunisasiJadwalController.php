<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class InputImunisasiJadwalController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelImunisasiJadwal');
     
    }
 
    public function index(){
        $this->load->view('inputImunisasiJadwal');
    }

    public function addSchedule(){
        $idImunisasi = $this->input->post('idImunisasi');
        $idRS = $this->input->post('idRS');
        $jadwal = $this->input->post('JadwalImunisasi');
        $cekRS = $this->modelImunisasiJadwal->checkRS($idRS);
        $cekImunisasi = $this->modelImunisasiJadwal->checkImunisasi($idImunisasi);
        if($cekRS AND $cekImunisasi){
            $data = array(
                'jadwal_imunisasi' => $jadwal,
                'id_imunisasi' => $idImunisasi,
                'id_rs' => $idRS                
            );
            $this->modelImunisasiJadwal->insertJadwalImunisasi($data);
            redirect('HomeImunisasiJadwalController');
        }else{
            $this->session->set_flashdata('error_messages','Data Tidak Ada');
            redirect('inputImunisasiJadwalController');
        }
    }

}