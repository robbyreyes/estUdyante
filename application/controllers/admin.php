<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){	
		$data['title']="Admin";
		$condition = array();
		$rs = $this->estudyante->read($condition);
		foreach($rs as $r){
			$info = array(
						'id' => $r['id'],
						'user_id' => $r['user_id'],
						'user_name' => $r['user_name'],
						'body' => $r['body'],
						'postdate' => $r['postdate'],
						'total_likes' => $r['total_likes']				
						);
			$posts[] = $info;
		}
		$data['posts'] = $posts;
		$this->load->view('include/adminheaderpage', $data);
		$this->load->view('admin/home', $data);	
		$this->load->view('include/footer');
	}

	public function delete_post($id){
		$posts = $this->estudyante->deletepost(array('id'=> $id));
		$header_data['title'] = "Delete posts";
		$data['posts']=$posts;
		$this->load->view('include/adminheaderpage',$header_data);
		if(!empty($_SERVER['HTTP_REFERER'])){
			redirect($_SERVER['HTTP_REFERER']);
		} else {
		}
	}

	public function reportedposts(){
		$data['title']="Reported Posts";
		$condition = array();
		$rs = $this->estudyante->read($condition);
		foreach($rs as $r){
			$info = array(
						'id' => $r['id'],
						'user_id' => $r['user_id'],
						'user_name' => $r['user_name'],
						'body' => $r['body'],
						'postdate' => $r['postdate'],
						'total_likes' => $r['total_likes']				
						);
			$posts[] = $info;
		}
		$data['posts'] = $posts;
		$this->load->view('include/adminheaderpage', $data);
		$this->load->view('admin/reportedposts', $data);	
		$this->load->view('include/footer');
	}

	public function reportedusers(){
		$data['title']="Reported Users";
		$condition = array();
		$rs = $this->estudyante->readusers($condition);
		foreach($rs as $r){
			$info = array(
						'id' => $r['id'],
						'password' => $r['password'],
						'firstname' => $r['firstname'],
						'lastname' => $r['lastname'],
						'email' => $r['email'],
						'avatar' => $r['avatar']				
						);
			$user1[] = $info;
		}
		$data['user1'] = $user1;
		$this->load->view('include/adminheaderpage', $data);
		$this->load->view('admin/reportedusers', $data);	
		$this->load->view('include/footer');
	}
	public function reportedbooks(){
		$data['title']="Reported Books";
		$condition = array();
		$rs = $this->estudyante->readbooks($condition);
		foreach($rs as $r){
			$info = array(
						'book_ID' => $r['book_ID'],
						'book_name' => $r['book_name'],
						'book_desc' => $r['book_desc'],
						'book_author' => $r['book_author'],
						'image' => $r['image'],
						'user_id' => $r['user_id']				
						);
			$book[] = $info;
		}
		$data['book'] = $book;
		$this->load->view('include/adminheaderpage', $data);
		$this->load->view('admin/reportedbooks', $data);	
		$this->load->view('include/footer');
	}
	public function reportednotes(){
		$data['title']="Reported Notes";
		$condition = array();
		$rs = $this->estudyante->readnotes($condition);
		foreach($rs as $r){
			$info = array(
						'note_ID' => $r['note_ID'],
						'note_name' => $r['note_name'],
						'note_desc' => $r['note_desc'],
						'file' => $r['file']			
						);
			$note[] = $info;
		}
		$data['note'] = $note;
		$this->load->view('include/adminheaderpage', $data);
		$this->load->view('admin/reportednotes', $data);	
		$this->load->view('include/footer');
	}
}
?>
