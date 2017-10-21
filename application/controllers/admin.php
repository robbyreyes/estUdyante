<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){	
		$data['title']="Admin";
		$this->load->view('include/adminheaderpage', $data);
		$this->load->view('admin/home');	
		$this->load->view('include/footer');
	}

	public function posts(){
		$data['title']="Posts";
		$this->load->view('include/adminheaderpage', $data);
		$this->load->view('admin/posts');	
		$this->load->view('include/footer');
	}

	public function reportedposts(){
		$data['title']="Reported Posts";
		$this->load->view('include/adminheaderpage', $data);
		$this->load->view('admin/reportedposts');	
		$this->load->view('include/footer');
	}
}
?>
