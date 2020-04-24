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
            $this->session->set_flashdata('succes_messages','<div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Regis Success!</h4>   
          </div>');
        }else {
            $this->session->set_flashdata('error_messages','<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hello!</strong> Username dan Password Tidak Sesuai.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            $this->index();
        }

    }
}