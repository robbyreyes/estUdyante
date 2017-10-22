<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
    	$this->load->view('estUdyante/test');
  	}
  	
  	public function showPost(){
    	$result = $this->estudyante->readpost();
    	echo json_encode($result);
  	}
}
