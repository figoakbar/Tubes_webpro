<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class DataPesanObatController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelObat');
    }
 
    public function index(){
        $data['data_pesan'] = $this->modelObat->getAllPesananObat();
        $this->load->view('DataPesanObat',$data);
    }

}