<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class HomeAdminController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
    }
 
    public function index()
    {
        $this->load->view('PesananUser.php');
    }

    function logout()  
      {  
           $this->session->sess_destroy();  
           redirect('LoginController');  
      }  
}