<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estu extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
		if($this->session->userdata('logged_in'))
		{
			redirect('homepage', 'refresh');
		}

	}

	public function index(){
			$header_data['title'] = "Welcome to estUdyante";

			$data['name'] = $this->session->userdata('email');

			$condition=null;

			$this->load->view('include/header',$header_data);
			$this->load->view('estUdyante/dashboard', $data);
			$this->load->view('include/footer');
		}

}
