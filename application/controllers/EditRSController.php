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
        redirect('HomeRumahSakitController');
    }
}