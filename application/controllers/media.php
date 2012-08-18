<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media extends CI_Controller {

	public function index()
	{
		$args['title'] = 'Media resources for One Million Bones Ky';
		$args['scripts'][] = '<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>';
		$args['scripts'][] = '<script type="text/javascript" src="js/jquery.lightbox_me.js"></script>';

		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('media');
		$this->load->view('foot');
	}
}
