<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class imunisasiModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    
    //fungsi mengambil data Pesan Obat (R)
    //Fungsi untuk mendapatkan satu baris pesanan obat dicari dengan id-nya
    public function getPesananObat($id){
        $this->db->where('id_pesanobat',$id);
        return $this->db->get('pesanobat')->result_array();
    }


    //Fungsi untuk mendapatkan semua data pesanan obat
    public function getAllPesananObat(){
        return $this->db->get('pesanobat')->result_array();
    }


    //Fungsi untuk mendapatkan nama obat yang dipesan
    public function getNamaObat($nama){
        $this->db->where('nama_obat',$nama);
        return $this->db->get('obat')->row_array();
    }

    //Fungsi untuk mendapatkan data user yang memesan
    //By Id
    public function getUser($id){
        $this->db->where('id_user',$id);
        return $this->db->get('user')->row_array();
    }

    //By Email
    public function getUser($email){
        $this->db->where('email',$email);
        return $this->db->get('user')->row_array();
    }
   

    // CUD Data Pesan Obat
    public function insertDataPesananObat($data){
        return $this->db->insert('pesanobat',$data);
    }

    public function updatePesananObat($id,$data){
        $this->db->where('id_pesanobat',$id);
        $this->db->update('pesanobat',$data);
    }

    public function deletePesananObat($id){
        $this->db->where('id_pesanobat',$id);
        return $this->db->delete('pesanobat');
    }
    
}