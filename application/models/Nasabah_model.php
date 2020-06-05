<?php

class Nasabah_model extends CI_Model {
    public function getNasabahs(){
        //ambil data artikel dengan kunci tertentu
        $filter = $this->input->get('find');
        $this->db->like('nama',$filter);
        return $this->db->get("nasabah"); 

    }
    public function getSingleNasabah($field,$value){
       //$this->db->query('SELECT * FROM nasabah WHERE id="'.$id.'"');
        $this->db->where($field,$value);
		return $this->db->get("nasabah"); 

    }
    public function insertNasabah($data){
        	//menyimpan data ke database
        $this->db->insert('nasabah', $data);
        //pengecekan dan menangkap id terakhir
        return $this->db->insert_id();
    }
    public function updateNasabah($id,$datapost){

        $this->db->where('id', $id);
        //menyimpan data update ke database
        $this->db->update('nasabah', $datapost);
        //mengambil jumlah baris yang diubah bila data berhasil di update
        return $this->db->affected_rows();
    }   
    public function deleteNasabah($id){
        $this->db->where('id', $id);
        $this->db->delete('nasabah');
        //mengecek berapa bnyk data dihapus
        return $this->db->affected_rows();
    }
}