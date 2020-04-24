<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class deleteModel extends CI_Model{
    function __construct (){
        parent::__construct();
    }

    public function deleteImunisasiRS($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->delete('imunisasijadwal');
    }

    public function deleteImunisasi($id){
        $this->db->where('id_imunisasi',$id);
        return $this->db->delete('imunisasi');
    }

    public function deleteRS($id){
        $this->db->where('id_rumahsakit',$id);
        return $this->db->delete('rumahsakit');
    }

    public function deleteRumahSakitJadwal($id){
        $this->db->where('id_rs',$id);
        return $this->db->delete('imunisasijadwal');
    }

    public function deleteObat($id){
        $this->db->where('id_obat',$id);
        return $this->db->delete('obat');
    }

    public function deleteImunisasiJadwal($id){
        $this->db->where('id_jadwal',$id);
        return $this->db->delete('imunisasijadwal');
    }

    public function deletePesanObat($id){
        $this->db->where('id_pesanobat',$id);
        return $this->db->delete('pesanobat');
    }

    public function deletePesanJadwal($id){
        $this->db->where('id_pesan',$id);
        return $this->db->delete('imunisasipesan');
    }
}