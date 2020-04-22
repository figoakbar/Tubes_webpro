<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class EditImunisasiController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('imunisasiModel');
     
    }
 
    public function index($id){
        $data['id'] = $id;
        $this->load->view('EditImunisasi.php',$data);
    }

    
    public function editImunization(){
        $nama = $this->input->post('namaimunisasi');
        $jenis = $this->input->post('jenisimunisasi');
        $id = $this->input->post('idimunisasi');
        $data = array(
            'nama_imunisasi' => $nama,
            'jenis_imunisasi' => $jenis
        );
        $this->imunisasiModel->updateImunisasi($id,$data);
        $cek = $this->imunisasiModel->getJadwalImunisasi($id);
        foreach($cek as $c){
            $file = array(
                'jadwal_imunisasi' => $c['jadwal_imunisasi'],
                'id_imunisasi' => $c['id_imunisasi'],
                'id_rs' => $c['id_rs'],    
                'jenis_imunisasi' => $jenis,
                'nama_rs' => $c['nama_rs']                       
            );
            $this->imunisasiModel->updateImunisasiRS($id,$file);
        };
        redirect('HomeImunisasiController');
    }

}