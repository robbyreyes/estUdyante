<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){		
		if (isset($_POST['post'])) {
	        $this->status();
	    }
	    elseif (isset($_POST['delete'])) {
	        $this->delete();
	    }
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
		$data['title'] = $info['firstname'].' '.$info['lastname'];


		$data['headername'] = $this->session->userdata('headername');

		$mate[]=null;
		$follow = $this->estudyante->read_follow($info['id']);
	  	foreach($follow as $i){
			array_push($mate, $i['mate_ID']);
		}
		$this->load->library('pagination');
		if($mate!=null)
		{
			array_push($mate, $info['id']);
			$config['total_rows']=$this->estudyante->count_post($mate);
			$config['per_page'] = 5;
			$config['base_url'] = base_url().'homepage/index';
			$config['first_url'] = '0';
			$config['full_tag_open'] = "<ul class='pagination'>";
		    $config['full_tag_close'] = '</ul>';
		    $config['num_tag_open'] = '<li>';
		    $config['num_tag_close'] = '</li>';
		    $config['cur_tag_open'] = '<li class="active"><a href="#">';
		    $config['cur_tag_close'] = '</a></li>';
		    $config['prev_tag_open'] = '<li>';
		    $config['prev_tag_close'] = '</li>';
		    $config['first_tag_open'] = '<li>';
		    $config['first_tag_close'] = '</li>';
		    $config['last_tag_open'] = '<li>';
		    $config['last_tag_close'] = '</li>';



		    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
		    $config['prev_tag_open'] = '<li>';
		    $config['prev_tag_close'] = '</li>';


		    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
		    $config['next_tag_open'] = '<li>';
		    $config['next_tag_close'] = '</li>';
             
			$this->pagination->initialize($config);
			$a = $this->estudyante->read_post($mate,$config['per_page'],$this->uri->segment(3));
		}
		else
		{
			$a = $this->estudyante->read_post($info['id']);
		}
		$this->load->helper('date');
		$now = time();
		$units = 2;
		foreach($a as $c){
			
			if($this->estudyante->read_like($this->session->userdata('logged_user'),$c['id']))
			{
				$info = array(
				'id' => $c['id'],
				'user_id' => $c['user_id'],
				'user_name' => $c['user_name'],
				'body' => $c['body'],
				'postdate' => $c['postdate'],
				'total_likes' => $c['total_likes'],
				'avatar' => $c['avatar'],
				'like' => "TRUE"
				);
			}
			
			else
			{
				$info = array(
				'id' => $c['id'],
				'user_id' => $c['user_id'],
				'user_name' => $c['user_name'],
				'body' => $c['body'],
				'postdate' => $c['postdate'],
				'total_likes' => $c['total_likes'],
				'avatar' => $c['avatar'],	
				'like' => "FALSE"
				);
			}
			$post[] = $info;
		}

		if($a!=null)
		{
			$data['post'] = $post;
		}
		else
		{
			$data['post'] = null;
		}
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

				'user_name' => $info['firstname'].' '.$info['lastname'],

				'body' => $this->input->post('body'),

				'postdate' => $today->format('Y-m-d H:i:sP')
					 );
			$this->load->model('estu_model');
			$insert_post = $this->estu_model->create_post($b);
	}

	redirect(base_url('homepage'), 'refresh');
	$this->load->view('estUdyante/homepage', $b);
	}

  	public function time_elapsed_string($datetime, $full = false) {
	    $now = new DateTime;
	    $ago = new DateTime($datetime);
	    $diff = $now->diff($ago);

	    $diff->w = floor($diff->d / 7);
	    $diff->d -= $diff->w * 7;

	    $string = array(
	        'y' => 'year',
	        'm' => 'month',
	        'w' => 'week',
	        'd' => 'day',
	        'h' => 'hour',
	        'i' => 'minute',
	        's' => 'second',
	    );
	    foreach ($string as $k => &$v) {
	        if ($diff->$k) {
	            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
	        } else {
	            unset($string[$k]);
	        }
	    }

	    if (!$full) $string = array_slice($string, 0, 1);
	    return $string ? implode(', ', $string) . ' ago' : 'just now';
	}

	public function search(){
		$data['title'] = "Search Results";

		$data['name'] = $this->session->userdata('email');

		if(isset($_POST))
		{

			$k = $this->input->post('search');

			$this->load->model('estu_model');
			if(!empty($k))
			{
				$result = $this->estu_model->search($k);
			}
			else {
				$result = null;
			}

			if($result!=null){
				$data['res'] = $result;
			}
			else
			{
				$data['res'] = null;
			}
		}



		$data['keyword'] = $this->input->post('search');
		$this->load->view('include/header', $data);
		$this->load->view('estUdyante/search', $data);

		}

	public function delete($id){
    $userinfo = $this->estudyante->read_infobyid($id);
    foreach($userinfo as $i){
      $info = array(
        'id' => $i['id'],
        'firstname' => $i['firstname'],
        'lastname' => $i['lastname'],
        'email' => $i['email'],
      );
    }

    $a = $this->estudyante->read_post($info['id']);
    foreach($a as $c){
    $info = array(
      'user_id' => $c['user_id'],
      'name' => $c['user_name'],
      'body' => $c['body'],
      'postdate' => $c['postdate']
    );
    }
    if(isset($_POST['delete']))
    {
      $this->load->model('estu_model');
      echo "delete";
      //$this->estu_model->delete_post($info['body'], $info['postdate']);
    }
    // redirect(base_url('profile/id/'.$id), 'refresh');
    redirect($_SERVER['HTTP_REFERER']);
	}
	public function test(){
		$this->load->view('estUdyante/test');
	}

	public function like(){
		$record = array(
			'post_id' => $_GET['id'],
			'user_id' => $this->session->userdata('logged_user')
		);		
		$insert_id = $this->estudyante->like($record);

		$userinfo = $this->estudyante->read_infobyid($this->session->userdata('logged_user'));
	    foreach($userinfo as $i){
	      $info = array(
	        'id' => $i['id'],
	        'firstname' => $i['firstname'],
	        'lastname' => $i['lastname'],
	        'email' => $i['email'],
	      );
	    }
	    $postinfo = $this->estudyante->read_postsbyid($record['post_id']);
	    foreach($postinfo as $b){
	      $post = array(
	        'user_id' => $b['user_id'],
	        'body' => $b['body']
	      );
	    }	    
		$this->notif($info['firstname'],$post['body'],$post['user_id']);			
		//redirect($_SERVER['HTTP_REFERER']);
	}

	public function notif($info=null,$text=null,$user=null){
		$notif = array(
			'user_id' => $this->session->userdata('logged_user'),			
			'notif_subject' => $info." liked your post",
			'notif_text' => $text.'',
			'notif_user' => $user.'',
			'type' => "LIKE"
		);
		if($user!=$this->session->userdata('logged_user'))
			$this->estudyante->notif($notif);
	}
	
}

?>
