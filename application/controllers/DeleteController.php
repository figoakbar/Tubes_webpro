<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class DeleteController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('deleteModel');
     
    }
 
    public function deleteImunization($id){
        $this->deleteModel->deleteImunisasi($id);
        $this->deleteModel->deleteImunisasiRS($id);
        redirect('HomeImunisasiController');
    }

    public function deleteHospital($id){
        $this->deleteModel->deleteRS($id);
        $this->deleteModel->deleteRumahSakitJadwal($id);
        redirect('HomeRumahSakitController');
    }

    public function deleteMedicine($id){
        $this->deleteModel->deleteObat($id);
        redirect('HomeObatController');
    }

    public function deleteSchedule($id){
        $this->deleteModel->deleteImunisasiJadwal($id);
        redirect('HomeImunisasiJadwalController');
    }

}