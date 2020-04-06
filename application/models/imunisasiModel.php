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

    public function insertImunisasi($data){
        return $this->db->insert('imunisasi',$data);
    }

    public function updateImunisasi($id,$data){
        $this->db->where('id_imunisasi',$id);
        return $this->db->update('imunisasi',$data);
    }

    public function deleteImnunisasi($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->delete('imunisasi');
    }
    //fungsi lihat jadwal 

    public function getJadwalImunisasi($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->get('imunisasiJadwal')->result_array();
    }
}