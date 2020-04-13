<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class LoginController extends CI_Controller{
 
    function __construct(){
        parent::__construct();
        $this->load->model('modelUser');
        $this->load->helper('url');
     
    }

    public function index(){
        $this->load->view('Login');
    }

    public function aksi_login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if($cek = $this->modelUser->loginUser($email,$password)){
            $data_session = array(
                'nama' => $email,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('HomeController');
        }else{
            $this->session->set_flashdata('error_messages','Email atau Password tidak valid'); 
            redirect(base_url());
        }
    }
    
}