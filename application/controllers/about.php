<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$args['title'] = 'Curriculum resources for One Million Bones Ky';
		$args['active_page'] = 'curriculum';
		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('curriculum');
		$this->load->view('foot');
	}

	public function omb()
	{
		$args['title'] = 'About One Million Bones';
		$args['active_page'] = 'about';
		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('about_omb');
		$this->load->view('foot');
	}

	public function partners()
	{
		$args['title'] = 'Partners One Million Bones Ky';
		$args['active_page'] = 'about';
		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('partners');
		$this->load->view('foot');
	}

	public function contacts()
	{
		$args['title'] = 'Contacts at One Million Bones Ky';
		$args['active_page'] = 'about';
		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('contacts');
		$this->load->view('foot');
	}
}