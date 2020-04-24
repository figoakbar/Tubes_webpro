<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class modelObat extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //basic function
    public function getAllData(){
        return $this->db->get('Obat')->result_array();
    }

    public function getObat($id){
        $this->db->where('id_obat',$id);
        return $this->db->get('Obat')->row_array();
    }

    public function insertObat($data){
        return $this->db->insert('Obat',$data);
    }

    public function updateObat($id,$data){
        $this->db->where('id_obat',$id);
        return $this->db->update('pesanobat',$data);
    }

    public function deleteObat($id){
        $this->db->where('id_obat',$id);
        return $this->db->delete('obat');
    }

    public function getUser($nama){
        $this->db->where('email',$nama);
        return $this->db->get('user')->row_array();
    }

    public function insertDataPesananObat($data){
        return $this->db->insert('pesanobat',$data);
    }


    public function getPesananObat($id){
        $this->db->where('id_user',$id);
        return $this->db->get('pesanobat')->result_array();
    }

    public function getAllPesananObat(){
        return $this->db->get('pesanobat')->result_array();
    }

    public function getAllPesananObat2($table){
        return $this->db->get($table);
    }
}