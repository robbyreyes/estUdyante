<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notecatalog extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
  $header_data['title'] = "estUdyante";
  $data['name'] = $this->session->userdata('email');
  $condition=null;
  $this->load->view('include/headerpage', $data);
  $this->load->view('estUdyante/notecatalog', $data);
  }
}
