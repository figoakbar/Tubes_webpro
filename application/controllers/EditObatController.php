<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class EditObatController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inputObatModel');
     
    }
 
    public function index($id){
        $data['id'] = $id;
        $this->load->view('EditObat.php',$data);
    }

    public function editMedicine(){
        $nama = $this->input->post('namaobat');
        $jenis = $this->input->post('jenisobat');
        $id = $this->input->post('idobat');
        $data = array(
            'nama_obat' => $nama,
            'jenis_obat' => $jenis
        );
        $this->inputObatModel->updateDataObat($id,$data);
        $this->inputObatModel->updateObat($id,$data);
        redirect('HomeObatController');
    }
}