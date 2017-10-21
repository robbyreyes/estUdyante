<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class get extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
		echo "asd";
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
		if(isset($_POST['done'])){
			$body = mysql_escape_string($_POST['body']);
			$b = array(
				'user_id' => $info['id'],
				'user_name' => $info['firstname'].' '.$info['lastname'],
				'body' => $body,
				'postdate' => $today->format('Y-m-d H:i:sP')
			);
			$insert_post = $this->estu_model->create_post($b);
		}
		//exit();
	}
}

?>
