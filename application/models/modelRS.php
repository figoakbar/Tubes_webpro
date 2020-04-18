<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class modelRS extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //basic function
    public function getAllData(){
        return $this->db->get('rumahsakit')->result_array();
    }

    public function getRS($id){
        $this->db->where('id_rumahsakit',$id);
        return $this->db->get('rumahsakit')->row_array();
    }

    public function cekRS($nama){
        $this->db->where('nama_rs',$nama);
        $query = $this->db->get('rumahsakit');
        if($query->num_rows() > 0){  
            return true;  
        }  
        else{  
            return false;       
        }  
    }

    public function insertRS($data){
        return $this->db->insert('rumahsakit',$data);
    }

    public function updateRS($id,$data){
        $this->db->where('id_rumahsakit',$id);
        return $this->db->update('rumahsakit',$data);
    }

    public function deleteRS($id){
        $this->db->where('id_rumahsakit',$id);
        return $this->db->delete('rumahsakit');
    }

    //fungsi menambahkan obat ke daftar obat rs  kalau dirasa tidak penting nanti boleh dihapus yaw
    public function insertDataObatRS($data){
        return $this->db->insert('daftarObat',$data);
    }

    public function updateDataObatRS($id,$data){
        $this->db->where('id_daftarObar',$id);
        $this->db->update('daftarObat',$data);
    }

    public function getDataObatRS($id){
        $this->db->where('id_daftarObat',$id);
        return $this->db->get('daftarObat')->result_array();
    }

    public function deleteObatRS($id){
        $this->db->where('id_daftarObat',$id);
        return $this->db->delete('daftarObat');
    }

    
}