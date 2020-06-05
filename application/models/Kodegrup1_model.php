<?php

class Kodegrup1_model extends CI_Model {
    public function getKodeGrup1s(){
        //ambil data artikel dengan kunci tertentu
        $filter = $this->input->get('find');
        $this->db->like('nama',$filter);
        return $this->db->get("kode_group1"); 

    }
    public function getSingleKodegrup1($field,$value){
       //$this->db->query('SELECT * FROM nasabah WHERE id="'.$id.'"');
        $this->db->where($field,$value);
		return $this->db->get("kode_group1"); 

    }
   
}