<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class modelUser extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    //basic function
    public function getAllData(){
        return $this->db->get('user')->result_array();
    }

    public function getUser($id){
        $this->db->where('id_user',$id);
        return $this->db->get('user')->row_array();
    }

    public function insertUser($data){
        return $this->db->insert('user',$data);
    }

    public function updateUser($id,$data){
        $this->db->where('id_user',$id);
        return $this->db->update('user',$data);
    }

}