<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Imunisasi extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        //Do your magic
     
    }
 
    public function index()
    {
        //Load page_header and page_index from views
        $this->load->view('Home');
    }
}