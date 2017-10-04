<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
  $data['name'] = $this->session->userdata('email');
  $data['user_name'] = "Robby Reyes";
  $data['user_birthday'] = "November 15, 1999";
  $data['user_address'] = "Binakayan Kawit Cavite";
  $data['user_contact'] = "09******";
  $data['user_friend'] = "45";
  $data['user_school'] = "Technological University of the Philippines";
  $header_data['title'] = $data['user_name'];
  $condition=null;
  $this->load->view('include/headerpage',$data);
  $this->load->view('estUdyante/profile', $data);
  }
}
