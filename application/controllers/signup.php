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

  $this->load->view('include/header',$header_data);
  $this->load->view('estUdyante/signup', $data);
  }
}
