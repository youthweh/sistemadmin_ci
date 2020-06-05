<?php

class Kodekantor_model extends CI_Model {
    public function getKodeKantors(){
        //ambil data artikel dengan kunci tertentu
        $filter = $this->input->get('findkodekantor');
        $this->db->like('nama',$filter);
        return $this->db->get("kode_kantor"); 

    }
    public function getSingleKodekantor($field,$value){
       //$this->db->query('SELECT * FROM nasabah WHERE id="'.$id.'"');
        $this->db->where($field,$value);
		return $this->db->get("kode_kantor"); 

    }
   
}