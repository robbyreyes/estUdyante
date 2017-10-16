<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bookcatalog extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
		$data['name'] = $this->session->userdata('email');
		$books=null;
  		$rs = $this->estudyante->read_book();
		foreach($rs as $r)
		{
			$info = array(
						'book_desc' => $r['book_desc'],
						'book_name' => $r['book_name'],
						'book_author' => $r['book_author'],
						);
			$books[] = $info;
		}
		if ($books!=null)
		{
			$data['book'] = $books;
		}
		else
		{
			$data['book'] = null;
		}
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
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/bookcatalog',$data);
  }

  public function addbook()
  {
  		$data['name'] = $this->session->userdata('email');
  		 $userinfo = $this->estudyante->read_info($data['name']);
  		$data = array();
						if($_SERVER['REQUEST_METHOD']=='POST')
						{
							$record = array(
											'book_name' => $_POST['book_name'],
											'book_desc' => $_POST['book_desc'],
											'book_author' => $_POST['book_author'],

										);
							$insert_id = $this->estudyante->create_book($record);
							$data['saved'] = TRUE;
						}

						else
						{
						 $data['saved']= FALSE;
						}
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
		$condition=null;
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/addbook', $data);
  }

	public function bookinfo(){
		$data['name'] = $this->session->userdata('email');
		$rs = $this->estudyante->read_book();
		foreach($rs as $r)
		{
			$info = array(

						'book_desc' => $r['book_desc'],
						'book_name' => $r['book_name'],
						'book_author' => $r['book_author'],
						);
			$studs[] = $info;
		}
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
		$data['book'] = $studs;
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/bookinfo',$data);
	}

}
