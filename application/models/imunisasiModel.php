<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class imunisasiModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //basic function
    public function getAllData(){
        return $this->db->get('imunisasi')->result_array();
    }

    public function getImunisasi($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->get('imunisasi')->row_array();
    }

    public function cekImunisasi($nama){
        $this->db->where('nama_imunisasi',$nama);
        $query = $this->db->get('imunisasi');
        if($query->num_rows() >= 0){  
            return true;  
        }  
        else{  
            return false;       
        }  
    }

    public function insertImunisasi($data){
        return $this->db->insert('imunisasi',$data);
    }

    public function updateImunisasi($id,$data){
        $this->db->where('id_imunisasi',$id);
        return $this->db->update('imunisasi',$data);
    }

    public function deleteImunisasi($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->delete('imunisasi');
    }
    //fungsi lihat jadwal 

    public function getJadwalImunisasi($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->get('imunisasiJadwal')->result_array();
    }

    public function getAllJadwalImunisasi(){
        return $this->db->get('imunisasiJadwal')->result_array();
    }

    // menambahkan jadwal imunisasi ini juga lupa PKnya nanti di perbaiki hehe
    public function insertDataImunisasiRS($data){
        return $this->db->insert('imunisasijadwal',$data);
    }

    public function updateImunisasiRS($id,$data){
        $this->db->where('id_imunisasijadwal',$id);
        $this->db->update('imunisasijadwal',$data);
    }

    public function deleteImunisasiRS($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->delete('imunisasijadwal');
    }
}