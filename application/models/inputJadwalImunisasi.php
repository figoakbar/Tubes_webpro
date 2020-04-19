<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class imunisasiModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //fungsi lihat jadwal 

    public function getJadwalImunisasi($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->get('imunisasiJadwal')->result_array();
    }

    public function getAllJadwalImunisasi(){
        return $this->db->get('imunisasiJadwal')->result_array();
    }

    public function getImunisasi($nama){
        $this->db->where('nama_imunisasi',$nama);
        return $this->db->get('imunisasi')->row_array();
    }

    public function getRS($nama){
        $this->db->where('nama_rs',$nama);
        return $this->db->get('rumahsakit')->row_array();
    }
   

    // menambahkan jadwal imunisasi ini juga lupa PKnya nanti di perbaiki hehe
    public function insertDataImunisasiRS($data){
        return $this->db->insert('imunisasijadwal',$data);
    }

    public function updateImunisasiJadwal($id,$data){
        $this->db->where('id_jadwal',$id);
        $this->db->update('imunisasijadwal',$data);
    }

    public function deleteImunisasiRS($id){
        $this->db->where('id_jadwal',$id);
        return $this->db->delete('imunisasijadwal');
    }
}