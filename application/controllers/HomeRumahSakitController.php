<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class HomeRumahSakitController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('modelRS');    
    }
 
    public function index()
    {
        $data['data_rumahsakit'] = $this->modelRS->getAllData();
        $this->load->view('HomeRumahSakit.php',$data);
    }

}