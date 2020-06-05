<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->database();
		//$this->load->helper('url'); //agar link nya ga kacau
		//$this->load->helper('form');
		$this->load->model('Nasabah_model');
		$this->load->library('session');
		$this->load->library('session');
    }

	public function index()
	{
		//data model
		$query = $this->Nasabah_model->getNasabahs();
		
		//menampilkan semua data nasabah
		$data['nasabahs'] = $query -> result_array();
        //print_r($data);
    
        $this->load->view('nasabahview', $data);
	}

	public function detail($id){
		$query = $this->Nasabah_model->getSingleNasabah('id',$id);

		$data['nasabah'] = $query->row_array(); //row array mengambil satu data saja
		//print_r($data);
		$this->load->view('detailnasabah', $data);
	}

	//input data nasabah
	public function add(){

		if($this->input->post()){		
		//ambil data dari form tambah nasabah
		$data['id'] = $this->input->post('id');
		$data['nama'] = $this->input->post('nama');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['kode_group1'] = $this->input->post('kode_group1');
		$data['kode_group2'] = $this->input->post('kode_group2');
		$data['kode_group3'] = $this->input->post('kode_group3');
		$data['tgl_register'] = $this->input->post('tgl_register');
		$data['kode_kantor'] = $this->input->post('kode_kantor');
		$data['potongan_sp'] = $this->input->post('potongan_sp');
		$data['potongan_sw'] = $this->input->post('potongan_sw');
		$data['bunga_tabungan'] = $this->input->post('bunga_tabungan');
		$data['bunga_deposito'] = $this->input->post('bunga_deposito');
		//print_r($data);
		//belum bisa jalan karena pada tabel belum ada primary key 
		$id = $this->Nasabah_model->insertNasabah($data);
		if($id){
			$this->session->set_flashdata("message",'<div class="alert alert-success">Data berhasil disimpan</div>');
			redirect('/');
		}
		else{
			$this->session->set_flashdata("message",'<div class="alert alert-warning">Data gagal disimpan</div>' );
			redirect('/');
		}
		
	}
		$this->load->view('form_add_nasabah');

	}

	public function edit($id){
		$query = $this->Nasabah_model->getSingleNasabah('id',$id);
		$data['nasabah'] = $query->row_array();

		if($this->input->post()){		
			//ambil data dari form tambah nasabah
			$datapost['id'] = $this->input->post('id');
			$datapost['nama'] = $this->input->post('nama');
			$datapost['tgl_lahir'] = $this->input->post('tgl_lahir');
			$datapost['kode_group1'] = $this->input->post('kode_group1');
			$datapost['kode_group2'] = $this->input->post('kode_group2');
			$datapost['kode_group3'] = $this->input->post('kode_group3');
			$datapost['tgl_register'] = $this->input->post('tgl_register');
			$datapost['kode_kantor'] = $this->input->post('kode_kantor');
			$datapost['potongan_sp'] = $this->input->post('potongan_sp');
			$datapost['potongan_sw'] = $this->input->post('potongan_sw');
			$datapost['bunga_tabungan'] = $this->input->post('bunga_tabungan');
			$datapost['bunga_deposito'] = $this->input->post('bunga_deposito');
			//print_r($data);
			//yg update bisa jalan
			$id = $this->Nasabah_model->updateNasabah($id,$datapost);
			if($id){
				$this->session->set_flashdata("message",'<div class="alert alert-success">Data berhasil diperbarui</div>');
				redirect('/');
			}
			else{
				$this->session->set_flashdata("message",'<div class="alert alert-warning">Data gagal diperbarui</div>' );
				redirect('/');
			}
		}

		$this->load->view('form_edit_nasabah', $data);
	}
	public function delete($id){

		$result = $this->Nasabah_model->deleteNasabah($id);
		if($result){
			$this->session->set_flashdata("message",'<div class="alert alert-success">Data berhasil dihapus</div>');
			redirect('/');
		}
		else{
			$this->session->set_flashdata("message",'<div class="alert alert-warning">Data gagal dihapus</div>' );
			redirect('/');
		}

	}
	public function login(){
		if($this->input->post())
		{
			$username   = $this->input->post('username');
			$password   = $this->input->post('password');
			if($username=='admin' && $password=='admin')
			{
				$_SESSION['username']='admin';
				redirect('/');
			}
			else
			{
				$this->session->set_flashdata('message','<div class="alert alert-warning">Username atau Password Anda tidak valid!</div>');
				redirect('nasabah/login');
			}
		}
		$this->load->view('login');

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('nasabah/login');
	}

}
