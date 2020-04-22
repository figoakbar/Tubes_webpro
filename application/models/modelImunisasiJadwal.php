<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class modelImunisasiJadwal extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function getAllJadwalImunisasi(){
        return $this->db->get('imunisasiJadwal')->result_array();
    }

    public function insertJadwalImunisasi($data){
        return $this->db->insert('imunisasiJadwal',$data);
    }

    public function updateJadwalImunisasi($id,$data){
        $this->db->where('id_jadwal',$id);
        return $this->db->update('imunisasiJadwal',$data);
    }

    public function deleteJadwalImunisasi($id){
        $this->db->where('id_jadwal'.$id);
        return $this->db->delete('imunisasiJadwal');
    }

    public function checkRS($id){
        $this->db->where('id_rumahsakit',$id);
        $query = $this->db->get('rumahsakit');
        if($query->num_rows() > 0){  
            return true;  
        }  
        else{  
            return false;       
        }  
    }

    public function checkImunisasi($id){
        $this->db->where('id_imunisasi',$id);
        $query = $this->db->get('imunisasi');
        if($query->num_rows() > 0){  
            return true;  
        }  
        else{  
            return false;       
        }  
    }

    public function nameRS($id){
        $this->db->where('id_rumahsakit',$id);
        $query = $this->db->get('rumahsakit');
        return $query->row_array();
    }

    public function nameImunisasi($id){
        $this->db->where('id_imunisasi',$id);
        $query = $this->db->get('imunisasi');
        return $query->row_array();
    }

}