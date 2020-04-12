<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class RegistrasiController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct();     
        $this->load->model('modelUser');
        $this->load->library('session');
    }
 
    public function index()
    {
        $this->load->view('registrasi');
    }

    public function user_registration(){
        $password = $this->input->post('password');
        $cekPassword =$this->input->post('confPass');
        if($password === $cekPassword){
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $data = array(
                'nama_user' => $name,
                'alamat' => $alamat,
                'email' => $email,
                'passwordUser' => $password
            );
            $this->modelUser->insertUser($data);
            redirect('LoginController');
        }else {
            $this->session->set_flashdata('error_messages','Password yang anda Masukan tidak sama');
            $this->index();
        }

    }
}