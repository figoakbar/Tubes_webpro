<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class HomeImunisasiController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('imunisasiModel');    
    }
 
    public function index()
    {
        $data['data_imunisasi'] = $this->imunisasiModel->getAllData();
        $this->load->view('HomeInputImunisasi.php',$data);
    }

}