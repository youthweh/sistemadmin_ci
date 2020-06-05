<?php

class Kodegrup2_model extends CI_Model {
    public function getKodeGrup2s(){
        //ambil data artikel dengan kunci tertentu
        $filter = $this->input->get('find');
        $this->db->like('nama',$filter);
        return $this->db->get("kode_group2"); 

    }
    public function getSingleKodegrup2($field,$value){
       //$this->db->query('SELECT * FROM nasabah WHERE id="'.$id.'"');
        $this->db->where($field,$value);
		return $this->db->get("kode_group2"); 

    }
   
}