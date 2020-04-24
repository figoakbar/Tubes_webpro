<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class DataPesanObatController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelObat');
        $this->load->helper('form');
        $this->load->helper('url');
    }
 
    public function index(){
        $this->load->view('DataPesanObat');
    }

    public function ambilData(){
        $dataObat = $this->modelObat->getAllPesananObat2('pesanobat')->result();
        echo json_encode($dataObat);
    }

}