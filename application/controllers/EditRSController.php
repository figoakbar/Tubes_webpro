<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class EditRSController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelRS');
     
    }
 
    public function index(){
        $this->load->view('EditRumahSakit.php');
    }

    //belum fitur update picture juga hehe :) 
    public function editRS($id){
        $nama = $this->input->post('namaRS');
        $data = array(
            'namaRS' => $nama,
        );
        $this->imunisasiModel->updateRS($id,$data)
        redirect('HomeRumahSakitController')
    }
}