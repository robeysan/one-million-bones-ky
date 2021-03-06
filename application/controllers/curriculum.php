<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curriculum extends CI_Controller {

	public function index()
	{
		$args['title'] = 'Curriculum resources for One Million Bones Ky';
		$args['active_page'] = 'curriculum';
		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('curriculum');
		$this->load->view('foot');
	}

	public function download($file_name)
	{
		$this->load->helper('file');
		$this->load->helper('download');


		if (read_file('files/curriculum_guidelines/'.$file_name)) {
			$file = 'files/curriculum_guidelines/'.$file_name;
			$data = file_get_contents($file); // Read the file's contents
			force_download($file_name, $data);
		}else{
			$this->load->view('err.php');
		}
	}
}
