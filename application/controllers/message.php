<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class message extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
    	id();
  	}

	public function id($id){	
		$userinfo = $this->estudyante->read_infobyid($id);
		foreach($userinfo as $i){
			$info = array(
				'id' => $i['id'],
				'firstname' => $i['firstname'],
				'lastname' => $i['lastname'],
				'email' => $i['email'],
				'avatar' => $i['avatar']
			);
			$data['u'] = $info['firstname'].' '.$info['lastname'];
			$data['m'] = $info['id'];
			$data['mateavatar']= $info['avatar'];
		}

		$message = $this->estudyante->read_message($id, $this->session->userdata('logged_user'));
		foreach($message as $j)
		{
			$messageinfo = array(
			// 'message_id' => $j['message_id'],
			'mate_ID' => $j['mate_ID'],
		  	'mate_name' => $j['mate_name'],
		  	'messagebody' => $j['messagebody'],
		  	'messagedate' => $j['messagedate'],
		  	'user_id' => $j['user_id'],
			'sender' => $j['sender']
			);
			$messageinfo;
			$mes[] = $messageinfo;
		}
		$data['mate']=$id;
		$userinfo = $this->estudyante->read_infobyid($this->session->userdata('logged_user'));
		foreach($userinfo as $i){
			$info = array(
				'id' => $i['id'],
				'firstname' => $i['firstname'],
				'lastname' => $i['lastname'],
				'email' => $i['email'],
				'avatar' => $i['avatar']
			);
			$data['youravatar']= $info['avatar'];
		}
	$data['headername']=$this->session->userdata('headername');
    if($message!=null)
      $data['mes'] = $mes;
    else
      $data['mes'] = null;

		$this->load->view('include/headerpage', $data);
		$this->load->view('estUdyante/message', $data);
	}

	public function send($id){
		$userinfo = $this->estudyante->read_infobyid($id);
		foreach($userinfo as $i){
			$info = array(
				'id' => $i['id'],
				'firstname' => $i['firstname'],
				'lastname' => $i['lastname'],
				'email' => $i['email'],
			);
		}

		$data['name'] = $this->session->userdata('email');

		$senderinfo = $this->estudyante->read_info($data['name']);
		foreach($senderinfo as $i){
		$s = array(
			'id' => $i['id'],
			'firstname' => $i['firstname'],
			'lastname' => $i['lastname'],
			'email' => $i['email'],
		);
		$s;
	}

		$today = new DateTime(null, new DateTimeZone('Asia/Manila'));

		$rand = "2223";
    if(isset($_POST['send']))
    {

        $m = array(
          	'mate_ID' => $info['id'],
          	'mate_name' => $info['firstname'].' '.$info['lastname'],
          	'messagebody' => $this->input->post('send'),
          	'messagedate' => $today->format('Y-m-d H:i:sP'),
          	'user_id' => $this->session->userdata('logged_user'),
			'sender' => $s['firstname'].' '.$s['lastname']
          );
        $this->load->model('estu_model');
        $insert_post = $this->estu_model->create_message($m);
    }

 	redirect($_SERVER['HTTP_REFERER']);
	}
	}
?>
