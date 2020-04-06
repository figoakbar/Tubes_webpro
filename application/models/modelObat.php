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
        return $this->db->get('Obat');
    }

    public function insertObat($data){
        return $this->db->insert('Obat',$data);
    }

    public function updateObat($id,$data){
        $this->db->where('id_obat',$id);
        return $this->db->update('Obat',$data);
    }

    public function deleteObat($id){
        $this->db->where('id_obat',$id);
        return $this->db->delete('obat');
    }

}