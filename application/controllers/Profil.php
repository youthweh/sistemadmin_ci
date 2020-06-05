<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->database();
		//$this->load->helper('url'); //agar link nya ga kacau
		//$this->load->helper('form');
		$this->load->model('Profil_model');
    }

	public function index()
	{
		//data model
		$query = $this->Profil_model->getNasabahs();
		
		//menampilkan semua data nasabah
		$data['nasabahs'] = $query -> result_array();
        //print_r($data);
    
        $this->load->view('profilview', $data);
	}

	public function detail($id){
		$query = $this->Nasabah_model->getSingleNasabah('id',$id);

		$data['nasabah'] = $query->row_array(); //row array mengambil satu data saja
		print_r($data);
		$this->load->view('detailnasabah', $data);
	}

	//input data nasabah
	public function add(){

	

	}

	public function edit($id){
	
		
	}
	public function delete($id){


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
