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
  	if( $_SERVER['REQUEST_METHOD']=='POST'){
    	$userrecord = array(
            	'firstname'=>$_POST['fname'],
            	'lastname'=>$_POST['lname'],
            	'email'=>$_POST['email'],
            	'password'=>password_hash($_POST['password'], PASSWORD_BCRYPT),
            	//'password'=>$_POST['password'],
          		);
    	$insert_id = $this->estudyante->create_user($userrecord);
    	$data['saved'] = TRUE;
			}
  }
	else {
		$data['errors'] = validation_errors();
	}

  $this->load->view('include/header',$header_data);
  $this->load->view('estUdyante/signup', $data);
  }
}
