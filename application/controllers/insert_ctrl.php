<?php

class insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
}
	function index() {
	//Including validation library
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Email Field
		$this->form_validation->set_rules('demail', 'email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
		$this->load->view('index');
		} else {
		//Setting values for tabel columns
		$data = array(
		'email' => $this->input->post('demail')
		);
		//Transfering data to Model
		$this->insert_model->form_insert('subscribe',$data);
		$data['message'] = 'Data Inserted Successfully';
		//Loading View
		$this->load->view('index', $data);
	}
}

function comment() {
//Including validation library
	$this->load->library('form_validation');

	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

	//Validating Email Field
	$this->form_validation->set_rules('dname', 'name', 'required|valid_name');
	$this->form_validation->set_rules('dtitle', 'title', 'required|valid_title');
	$this->form_validation->set_rules('dcomment', 'comment', 'required|valid_comment');


	if ($this->form_validation->run() == FALSE) {
	$this->load->view('index');
	} else {
	//Setting values for tabel columns
	$data = array(
		'name' => $this->input->post('dname'),
		'title' => $this->input->post('dtitle'),
		'comment' => $this->input->post('dcomment')
	);
	//Transfering data to Model
	$this->insert_model->form_insert('comment',$data);
	$data['message'] = 'Data Inserted Successfully';
	//Loading View
	$this->load->view('index', $data);
		}
	}

}

?>