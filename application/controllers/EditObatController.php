<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class EditObatController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelObat');
     
    }
 
    public function index(){
        $this->load->view('EditObat.php');
    }

    public function editMedicine($id){
        $nama = $this->input->post('namaobat');
        $jenis = $this->input->post('jenisobat');
        $data = array(
            'nama_obat' => $nama,
            'jenis_obat' => $jenis
        );
        $this->imunisasiModel->updateObat($id,$data)
        redirect('HomeObatController')
    }
}