<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class loginController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct();
        $this->load->model('modelUser');
        $this->load->helper('url');
     
    }
    public function index()
    {
        $this->load->view('Login');
    }

    public function aksi_login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->helper('url');
        $data = array(
            'email' => $email,
            'passwordUser' => $password
        );
        $cek = $this->modelUser->loginUser('user',$data)->num_rows();
        if($cek > 0){
            $data_session = array(
                'nama' => $email,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("/homeController/index"));
        }else {
            $this->session->set_flashdata('error_messages','Email atau Password tidak valid');  
            redirect(base_url('/loginController/index'));
        }

    }
}