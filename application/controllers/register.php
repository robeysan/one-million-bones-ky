<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$args['active_page'] = 'register';
		$args['title'] = 'Registration - One Million Bones Ky';
		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('register');
		$this->load->view('foot');
	}

	public function complete() {
		if(isset($_POST)) {
			$reg = $_POST;
			$this->load->model('Register');
			$this->Register->add_contact($reg);
		}else{
			$this->load->view('head',$args);
			$this->load->view('menu');
			$this->load->view('register');
			$this->load->view('foot');
		}
	}
}