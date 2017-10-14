<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
  $data['name'] = $this->session->userdata('email');
  $data['user_name'] = "Robby Reyes";
  $data['user_birthday'] = "November 15, 1999";
  $data['user_address'] = "Binakayan Kawit Cavite";
  $data['user_contact'] = "09******";
  $data['user_friend'] = "45";
  $data['user_school'] = "Technological University of the Philippines";
  $header_data['title'] = $data['user_name'];
  $data['name'] = $this->session->userdata('email');

  $condition=null;

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
    $a = $this->estudyante->read_post($info['id']);



  foreach($a as $c){
		$info = array(
			'user_id' => $c['user_id'],
			'user_name' => $c['user_name'],
			'body' => $c['body'],
			'postdate' => $c['postdate']
		);
    $post[] = $info;
  }

  if($a!=null)
    $data['post'] = $post;
  else
    $data['post'] = null;
    $this->load->view('include/headerpage', $data);
    $this->load->view('estUdyante/profile', $data);
  }
}
