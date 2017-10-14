<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){    
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
    }
    $data['title'] = $info['firstname'].' '.$info['lastname'];
    $data['name'] = $info['firstname'].' '.$info['lastname'];
    $data['headername'] = $this->session->userdata('headername');

    $a = $this->estudyante->read_post($info['id']); 
  
  foreach($a as $c){
    $info = array(
      'name' => $c['user_name'],
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
