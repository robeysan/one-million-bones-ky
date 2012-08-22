<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Model {

	public function __construct(){

		parent::__construct();
		$this->load->database();
	}

	public function add_contact($reg) {
		var_dump($reg);
	}


}