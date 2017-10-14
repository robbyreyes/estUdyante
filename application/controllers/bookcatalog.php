<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bookcatalog extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){

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
		$data['book'] = $studs;
		$header_data['name'] = $data['name'] = $this->session->userdata('email');
		$this->load->view('include/headerpage',$header_data);
		$this->load->view('estUdyante/bookcatalog',$data);
  }
  
  public function addbook()
  {
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
  		$header_data['title'] = "estUdyante";
		$data['name'] = $data['name'] = $this->session->userdata('email');
		$condition=null;
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/addbook', $data);
  } 

	public function bookinfo(){
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
		$data['book'] = $studs;
		$header_data['name'] = $data['name'] = $this->session->userdata('email');
		$this->load->view('include/headerpage',$header_data);
		$this->load->view('estUdyante/bookinfo',$data);
	}

}
