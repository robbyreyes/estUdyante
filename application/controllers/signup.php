<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
  $header_data['title'] = "Sign Up";
  $data['name'] = "User";
  $condition=null;
  $data = array();

	$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[10]|alpha');
	$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]|max_length[20]|alpha');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|valid_email|is_unique[user1.email]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[32]');
	if($this->form_validation->run())
	{
		if(isset($_POST['signup'])){
			$userrecord = array(
							'firstname'=>$_POST['fname'],
							'lastname'=>$_POST['lname'],
							'email'=>$_POST['email'],
							'password'=>password_hash($_POST['password'], PASSWORD_BCRYPT),
							);
			$insert_id = $this->estudyante->create_user($userrecord);

			$data['saved'] = TRUE;

			$session_data = array (
					'email' => $_POST['email'],
					'logged_in' => TRUE
					);
					$this->session->set_userdata($session_data);
					$data['name'] = $this->session->userdata('email');

					$userinfo = $this->estudyante->read_info($data['name']);
					foreach($userinfo as $i){
					$info = array(
						'id' => $i['id'],
						'firstname' => $i['firstname'],
						'lastname' => $i['lastname'],
						'email' => $i['email'],
					);
					$info;
				}
				$this->session->set_userdata('logged_user',$info['id']);
				$this->session->set_userdata('headername',$info['firstname']);
				redirect(base_url('homepage'), 'refresh');
		}
	}
	else {
		$data['errors'] = validation_errors();
	}

  $this->load->view('include/header',$header_data);
  $this->load->view('estUdyante/signup', $data);
  }
}
