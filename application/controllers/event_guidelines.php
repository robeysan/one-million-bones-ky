<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_guidelines extends CI_Controller {

	public function index()
	{
		$args['title'] = 'Event guidelines for One Million Bones Ky';
		$args['active_page'] = 'event_guidelines';
		$this->load->view('head',$args);
		$this->load->view('menu');
		$this->load->view('Event_guidelines');
		$this->load->view('foot');
	}

	public function download($file_name)
	{
		$this->load->helper('file');
		$this->load->helper('download');


		if (read_file('files/event_guidelines/'.$file_name)) {
			$file = 'files/event_guidelines/'.$file_name;
			$data = file_get_contents($file); // Read the file's contents
			force_download($file_name, $data);
		}else{
			$this->load->view('err.php');
		}
	}
}
