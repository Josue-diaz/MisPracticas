<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');;//aqui cargamos nuestro modelo
	}

	public function listar(){
		$data["preregistros"] = $this->welcome_model->readData();
		$this->load->view('welcome_lista');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function registrar(){
		#print_r($_POST);
		#var_dump($_POST);

		$datos = array(
		'nombre' => trim($this->input->post('nombre')),
		'apellidop' => $this->input->post('apellidop'),
		'apellidom' => $this->input->post('apellidom'),
		'email' => $this->input->post('email'),
		'password' => $this->input->post('pwd'));

		$result = $this->welcome_model->insert($datos);

		if($result == TRUE){
			echo 'registro exitoso';
			redirect('','welcome/listar');
			
		}else{
			echo 'Contacta soporte';
		}
	}

}