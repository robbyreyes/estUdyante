<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estu extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
<<<<<<< HEAD
		if($this->session->userdata('logged_in'))
		{
			redirect('homepage', 'refresh');
=======
	}

	public function index(){

		if($this->session->userdata('logged_in'))
		{
			redirect(('homepage'), 'refresh');

>>>>>>> 81e812380afc58629ae86eacdebc6fc59f0202ee
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
<<<<<<< HEAD
=======
	}



	public function enter(){
		if($this->session->userdata('email') != '')
		{
			echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';
			echo '<label><a href="logout">Logout</a></label>';

		}
	}
>>>>>>> 81e812380afc58629ae86eacdebc6fc59f0202ee

}
