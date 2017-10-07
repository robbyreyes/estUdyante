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

	$a = $this->estudyante->read_post();

	foreach($a as $c){
		$info = array(
			'body' => $c['body'],
			'postdate' => $c['postdate']
		);
		$post[] = $info;
	}
	$data['post'] = $post;
  $this->load->view('include/headerpage', $data);
  $this->load->view('estUdyante/homepage', $data);
  }

	public function status(){
		$today = new DateTime(null, new DateTimeZone('Asia/Manila'));
	if(isset($_POST))
	{
			$b = array(
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