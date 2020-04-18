<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InputObatModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function insertObat($data){
        return $this->db->insert('obat',$data);
    }

    public function cekObat($nama,$jenisObat){
        $this->db->where('nama_obat',$nama);
        $this->db->where('jenis_obat',$jenisObat);
        $query = $this->db->get('obat');
        if($query->num_rows() > 0){  
            return true;  
        }  
        else{  
            return false;       
        }  
    }

    //boleh dihapus nantinya
    public function getAllData(){
        return $this->db->get('Obat')->result_array();
    }

    public function getObat($id){
        $this->db->where('id_obat',$id);
        return $this->db->get('Obat');
    }

    
    public function updateDataObat($id,$data){
        $this->db->where('id_obat',$id);
        return $this->db->update('Obat',$data);
    }

    public function deleteObat($id){
        $this->db->where('id_obat',$id);
        return $this->db->delete('obat');
    }
}