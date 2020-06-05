<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kodegrup3 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->database();
		//$this->load->helper('url'); //agar link nya ga kacau
        $this->load->model('Kodegrup3_model');
        $this->load->library('session');
    }

	public function index()
	{
		//data model
		$query = $this->Kodegrup3_model->getKodeGrup3s();
		
		//menampilkan semua data nasabah
		$data['kodegrup3s'] = $query -> result_array();
        //print_r($data);
    
        $this->load->view('kodegrup3view', $data);
	}

	public function detail($id){
		$query = $this->Kodekantor_model->getSingleKodegrup3('id',$id);

		$data['kodegrup3'] = $query->row_array(); //row array mengambil satu data saja
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
