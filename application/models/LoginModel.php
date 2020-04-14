<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class LoginModel extends CI_Model{
    function __construct (){
        parent::__construct();
    }

    public function getUser($id){
        $this->db->where('id_user',$id);
        return $this->db->get('user')->row_array();
    }

    public function getAdmin($id){
        $this->db->where('id_admin',$id);
        return $this->db->get('admin')->row_array();
    }

    public function loginUser($email,$password){
        $this->db->where('email', $email);  
        $this->db->where('passwordUser', $password);  
        $query = $this->db->get('user');  
        if($query->num_rows() > 0){  
            return true;  
        }  
        else{  
            return false;       
        }  
    }

    public function loginAdmin($email,$password){
        $this->db->where('email', $email);  
        $this->db->where('password', $password);  
        $query = $this->db->get('admin');  
        if($query->num_rows() > 0){  
            return true;  
        }  
        else{  
            return false;       
        }  
    }

}