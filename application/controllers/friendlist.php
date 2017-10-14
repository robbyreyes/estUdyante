<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class friendlist extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
  $data['title'] = "estUdyante";
  $data['name'] = $this->session->userdata('email');
  $condition=null;

  $data['name'] = $this->session->userdata('email');    

    $userinfo = $this->estudyante->read_info($data['name']);

    foreach($userinfo as $i){
    $info = array(
      'id' => $i['id'],
      'firstname' => $i['firstname'],
      'lastname' => $i['lastname'],
      'email' => $i['email'],
    );
    }

  $data['headername'] = $this->session->userdata('headername');
  $counter=null;
  $mate[]=null;

  $follow = $this->estudyante->read_follow($info['id']);
  foreach($follow as $i){    
    array_push($mate, $i['mate_ID']);       
    $counter=1+$counter; 
  }  

    $followinfo = $this->estudyante->read_info_follow($mate);
    foreach($followinfo as $i){
    $info = array(
      'user_id' => $i['id'],
      'firstname' => $i['firstname'],
      'lastname' => $i['lastname'],      
    );
    $matefollow[]=$info;
    }
    if($followinfo!=null)
      $data['matefollow'] = $matefollow;
    else
    {
      $counter=0;
      $data['matefollow'] = null;
    }

  $data['followingcounter']=$counter;

  $this->load->view('include/headerpage',$data);
  $this->load->view('estUdyante/friendlist', $data);
  }
}
