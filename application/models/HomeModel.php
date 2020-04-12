<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class HomeModel extends CI_Model{
    function __construct (){
        parent::__construct();
    }

    //get semua data dari sebuah tabel
    public function getAllData(){
        return $this->db->get('user')->result_array();
    }
}