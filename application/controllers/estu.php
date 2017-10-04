<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estu extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
		// echo "CI and Bootstrap";
		if($this->session->userdata('logged_in'))
		{
				redirect(('homepage'), 'refresh');
		}
		else
		{
			$header_data['title'] = "Welcome to estUdyante";

			$data['name'] = $this->session->userdata('email');

			$condition=null;

			$this->load->view('include/header',$header_data);
			$this->load->view('estUdyante/dashboard', $data);
			$this->load->view('include/footer');
		}
	}

	public function modal(){
		$header_data['title'] = "Add New Student";
		$this->load->view('include/header',$header_data);
		$this->load->view('students/modal');
		$this->load->view('include/footer');
	}


	public function enter(){
		if($this->session->userdata('email') != '')
		{
			echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';
			echo '<label><a href="logout">Logout</a></label>';

		}
	}

	// public function logout(){
	// 	echo 'x';
	// 	// $this->session->sess_destroy();
 // 	// 	redirect('estudyante');
	// }
}
