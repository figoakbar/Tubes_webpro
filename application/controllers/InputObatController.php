<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class InputObatController extends CI_Controller{
 
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('InputObatModel');    
    }
 
    public function index()
    {
        $this->load->view('InputObat.php');
    }

    public function addMedicineFinal(){
        $nama = $this->input->post('namaobat');
        $jenis = $this->input->post('jenisobat');
        $config['upload_path']          = './assets/uploads'; //isi dengan nama folder temoat menyimpan gambar
        $config['allowed_types']        =  'jpg|png';//isi dengan format/tipe gambar yang diterima
        $config['max_size']             =  6024;//isi dengan ukuran maksimum yang bisa di upload
        $config['max_width']            = '1024'; //isi dengan lebar maksimum gambar yang bisa di upload
        $config['mac_height']           = '768';//isi dengan panjang maksimum gambar yang bisa di upload

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')){
            $config['info'] = $this->upload->display_errors();
        }
        else{
            $config['info'] = 'Upload Berhasil';
            $cek = array('upload_data' => $this->upload->data());
        }
        
        if(!$this->InputObatModel->cekObat($nama,$jenis)){
            $uploadData = array('upload_data' => $this->upload->data());
            $data = array(
                'nama_obat' => $nama,
                'jenis_obat' => $jenis,
                'picture' => $uploadData['upload_data']['file_name']
            );
            $this->InputObatModel->insertObat($data);
        }else{
            $this->session->set_flashdata('error_messages','Data Obat Sudah Ada');
        }
        redirect('InputObatController');
        
    }

}