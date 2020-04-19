<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class EditJadwalController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelImunisasiJadwal');
     
    }
 
    public function index($id){
        $data['id'] = $id;
        $this->load->view('EditJadwalImunisasi.php',$data);
    }

    
    public function editJadwalImunisasi(){
        $id = $this->input->post('id');
        $idImunisasi = $this->input->post('idImunisasi');
        $idRS = $this->input->post('idRS');
        $jadwal = $this->input->post('JadwalImunisasi');
        $harga = $this->input->post('harga');
        $cekRS = $this->modelImunisasiJadwal->checkRS($idRS);
        $cekImunisasi = $this->modelImunisasiJadwal->checkImunisasi($idImunisasi);
        if($cekRS AND $cekImunisasi){
            $data = array(
                'jadwal_imunisasi' => $jadwal,
                'id_imunisasi' => $idImunisasi,
                'id_rs' => $idRS,    
                'harga' => $harga            
            );
            $this->modelImunisasiJadwal->updateJadwalImunisasi($id,$data);
            redirect('HomeImunisasiJadwalController');
        }else{
            $this->session->set_flashdata('error_messages','Data Tidak Ada');
            redirect('inputImunisasiJadwalController');
        }
    }

}