<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('insert_model');
		
	}
	public function index()
	{
		$this->load->view('index');
	}

	public function feedback(){
		$data = $this->insert_model->getData();
		$this->load->view('feedback', array('data' => $data));
	}


	public function insertCom(){
		$data = array(
			'name' => $this->input->post('dname'),
			'title' => $this->input->post('dtitle'),
			'comment' => $this->input->post('dcomment')
		);
		$res = $this->insert_model->form_insert('comment',$data);
		if($res>=1){
			redirect(base_url());
		}
	}
}
