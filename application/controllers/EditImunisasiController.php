<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
<<<<<<< Updated upstream
class EditImunisasiController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
    }
 
    public function index()
    {
        $this->load->view('Editimunisasi.php');
    }

    function logout()  
      {  
           $this->session->sess_destroy();  
           redirect('LoginController');  
      }  
=======
class EditImunisasiController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('imunisasiModel');
     
    }
 
    public function index(){
        $this->load->view('EditImunisasi.php');
    }

    
    public function editImunization($id){
        $nama = $this->input->post('namaimunisasi');
        $jenis = $this->input->post('jenisimunisasi');
        $data = array(
            'nama_imunisasi' => $nama,
            'jenis_imunisasi' => $jenis
        );
        $this->imunisasiModel->updateImunisasi($id,$data)
        redirect('HomeImunisasiController')
    }

>>>>>>> Stashed changes
}