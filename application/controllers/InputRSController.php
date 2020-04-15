<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class InputRSController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('modelRS');    
    }
 
    public function index()
    {
        $this->load->view('InputRumahSakit.php');
    }

    //sementara make yang ini dulu aja ya 
    public function addHospital(){
        $nama = $this->input->post('namaRS');
        if($nama != ''){
            if($this->modelRS->cekRS($nama)){
                $data = array(
                    'nama_rs' => $nama,
                );
                $this->modelRS->insertRS($data);
                redirect('InputRSController');
            }else{
                $this->session->set_flashdata('error_messages','Data Imunisasi Sudah Ada');
                redirect('InputRSController');
            }
        }else {
            $this->session->set_flashdata('error_messages','Tidak Boleh Kosong');
            redirect('InputRSController');
        }
    }

    public function addHospitalFinal(){
        $nama = $this->input->post('namaRS');
        $config['upload_path']          = './assets/uploads'; //isi dengan nama folder temoat menyimpan gambar
        $config['allowed_types']        =  'gif|jpg|png';//isi dengan format/tipe gambar yang diterima
        $config['max_size']             =  549;//isi dengan ukuran maksimum yang bisa di upload
        $config['max_width']            = '1024'; //isi dengan lebar maksimum gambar yang bisa di upload
        $config['mac_height']           = '768';//isi dengan panjang maksimum gambar yang bisa di upload

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
                {
                        $config['info'] = $this->upload->display_errors();
                        $this->load->view('V_Upload_form', array('error' => ' ' ));
                }
                else
                {
                    if($nama != ''){
                        if($this->modelRS->cekRS($nama)){
                            $config['info'] = 'Upload Berhasil';
                            $data = array('upload_data' => $this->upload->data());
                            $data = array(
                                'nama_rs' => $nama,
                                'picture' => $file['upload_data']['file_name']
                            );
                            $this->modelRS->insertRS($data);
                            redirect('InputRSController');
                        }else{
                            $this->session->set_flashdata('error_messages','Data Imunisasi Sudah Ada');
                            redirect('InputRSController');
                        }
                    }else {
                        $this->session->set_flashdata('error_messages','Tidak Boleh Kosong');
                        redirect('InputRSController');
                    }
                }
            
        
    }
}