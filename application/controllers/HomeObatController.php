<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class HomeObatController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('ModelObat');    
    }
 
    public function index()
    {
        $data['data_obat'] = $this->ModelObat->getAllData();
        $this->load->view('HomeObat.php',$data);
    }

}