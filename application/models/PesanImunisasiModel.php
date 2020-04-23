<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PesanImunisasiModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //basic function
    public function getAllData(){
        return $this->db->get('pesanimunisasi')->result_array();
    }

    public function getPesan($id){
        $this->db->where('id_user',$id);
        return $this->db->get('pesanimunisasi')->result_array();
    }

    public function insertPesan($data){
        return $this->db->insert('pesanimunisasi',$data);
    }

    public function updatePesan($id,$data){
        $this->db->where('id_pesan',$id);
        return $this->db->update('pesanimunisasi',$data);
    }

    public function deletePesan($id){
        $this->db->where('id_pesan',$id);
        return $this->db->delete('pesanimunisasi');
    }

    public function getUser($nama){
        $this->db->where('email',$nama);
        return $this->db->get('user')->row_array();
    }

    public function getJadwal($id){
        $this->db->where('id_jadwal',$id);
        return $this->db->get('imunisasijadwal')->row_array();
    }

}