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

				'postdate' => $today->format('Y-m-d H:i:sP')
					 );
			$this->load->model('estu_model');
			$insert_post = $this->estu_model->create_post($b);
	}

	redirect(base_url('homepage'), 'refresh');
	$this->load->view('estUdyante/homepage', $b);
	}


	public function search(){
		$header_data['title'] = "Search Results";

		$data['name'] = $this->session->userdata('email');

		if(isset($_POST))
		{

			 $k = $this->input->post('search');

			$this->load->model('estu_model');
			$result = $this->estu_model->search($k);



		if($result!=null)
			$data['res'] = $result;
		else
			$data['res'] = null;

		$data['keyword'] = $this->input->post('search');
		$this->load->view('include/header', $header_data);
		$this->load->view('estUdyante/search', $data);
		}

		}
	}
?>
