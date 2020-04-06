<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class modelAdmin extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //basic function
    public function getAllData(){
        return $this->db->get('admin')->result_array();
    }

    public function getAdmin($id){
        $this->db->where('id_admin',$id);
        return $this->db->get('admin')->row_array();
    }

    public function insertAdmin($data){
        return $this->db->insert('admin',$data);
    }

    public function updateAdmin($id,$data){
        $this->db->where('id_admin',$id);
        return $this->db->update('admin',$data);
    }

}