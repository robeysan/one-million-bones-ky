<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$args['active_page'] = 'home';
		$args['title'] = 'Welcome to One Million Bones Ky';
		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('main');
		$this->load->view('foot');
	}
}