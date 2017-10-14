<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bookcatalog extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
  $data['headername'] = $this->session->userdata('headername');
  $data['name'] = $this->session->userdata('email');
  $condition=null;
  $this->load->view('include/headerpage', $data);
  $this->load->view('estUdyante/bookcatalog', $data);
  }

	public function bookinfo(){
		$header_data['title'] = "estUdyante";
		$data['name'] = $data['name'] = $this->session->userdata('email');
		$condition=null;
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/bookinfo', $data);
	}

	public function bookinfo2(){
		$header_data['title'] = "estUdyante";
		$data['name'] = $data['name'] = $this->session->userdata('email');
		$condition=null;
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/bookinfo2', $data);
	}

	public function bookinfo3(){
		$header_data['title'] = "estUdyante";
		$data['name'] = $data['name'] = $this->session->userdata('email');
		$condition=null;
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/bookinfo3', $data);
	}
}
