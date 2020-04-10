<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class homeController extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url("loginController"));
     
    }
 
    public function index()
    {
        $this->load->view('Home');
    }
}