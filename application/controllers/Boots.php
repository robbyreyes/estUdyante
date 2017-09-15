<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boots extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('students_model','Students');
	}
	
	public function index(){	
		// echo "CI and Bootstrap";
		
		$header_data['title'] = "estUdyante";
		$data['name'] = "User";
		$condition=null;		
		
		$this->load->view('include/header',$header_data);
		$this->load->view('estUdyante/contents', $data);
		$this->load->view('include/footer');		
	}	
	
	public function modal(){
		$header_data['title'] = "Add New Student";	
		$this->load->view('include/header',$header_data);	
		$this->load->view('students/modal');
		$this->load->view('include/footer');		
	}
}
