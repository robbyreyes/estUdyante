<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class newsfeed extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function newsfeed(){
  $header_data['title'] = "estUdyante";
  $data['name'] = $this->session->userdata('email');
  $condition=null;
  $this->load->view('include/headerpage',$data);
  $this->load->view('estUdyante/newsfeed', $data);
  }
}
