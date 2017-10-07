<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){

  	$header_data['title'] = "estUdyante";
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
  	$this->load->view('estUdyante/homepage', $data);
  	}

	public function status(){
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
		$today = new DateTime(null, new DateTimeZone('Asia/Manila'));
	if(isset($_POST))
	{
			$b = array(

				'user_id' => $info['id'],

				'body' => $this->input->post('body'),
				// 'postdate' => date('Y-m-d H:i:s')
				'postdate' => $today->format('Y-m-d H:i:sP')
					 );
			$this->load->model('estu_model');
			$insert_post = $this->estu_model->create_post($b);
	}
	else {
		echo 'xx';
	}
	redirect(base_url('homepage'), 'refresh');
	$this->load->view('estUdyante/homepage', $b);
	}

}
?>