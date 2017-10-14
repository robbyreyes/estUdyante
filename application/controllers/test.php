<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
  $header_data['title'] = "estUdyante";
    $data['email'] = $this->session->userdata('email');
    $condition=null;

    $userinfo = $this->estudyante->read_info($data['email']);
    foreach($userinfo as $i){
    $info = array(
      'id' => $i['id'],
      'firstname' => $i['firstname'],
      'lastname' => $i['lastname'],
      'email' => $i['email'],
    );
    $info;
  }
  $data['info']=$info;

  $following = $this->estudyante->read_following($info['id']);
  
  foreach($following as $i){
    $mate = array(
      'mate_ID' => $i['mate_ID'],
    );
    $mate;
  }
  
    $this->load->view('estUdyante/test', $data);
  }
}
