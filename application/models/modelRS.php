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
        $this->db->where('id_rs',$id);
        return $this->db->get('rumahsakit')->row_array();
    }

    public function insertRSt($data){
        return $this->db->insert('rumahsakit',$data);
    }

    public function updateRS($id,$data){
        $this->db->where('id_rs',$id);
        return $this->db->update('rumahsakit',$data);
    }

}