<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profilepic extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
  $data['title']="Profile Picture";
  $this->load->view('include/headerpage');
  $this->load->view('estUdyante/profilepic', $data);
  }
}