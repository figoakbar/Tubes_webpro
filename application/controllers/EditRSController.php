<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class EditRSController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelRS');
     
    }
 
    public function index($id){
        $data['id'] = $id;
        $this->load->view('EditRumahSakit.php',$data);
    }

    //belum fitur update picture juga hehe :) 
    public function editHospital(){
        $nama = $this->input->post('namaRS');
        $id = $this->input->post('idRS');
        $data = array(
            'nama_rs' => $nama,
        );
        $this->ModelRS->updateRS($id,$data);
        $cek = $this->ModelRS->getJadwalRS($id);
        foreach($cek as $c){
            $file = array(
                'jadwal_imunisasi' => $c['jadwal_imunisasi'],
                'id_imunisasi' => $c['id_imunisasi'],
                'id_rs' => $c['id_rs'],   
                'nama_rs' => $nama                     
            );
            $this->ModelRS->updateNamaRS($id,$file);
        };
        redirect('HomeRumahSakitController');
    }
}