<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notecatalog extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
    $data['name'] = $this->session->userdata('email');
    $books=null;
      $rs = $this->estudyante->read_note();
    foreach($rs as $r)
    {
      $info = array(
            'note_desc' => $r['note_desc'],
            'note_name' => $r['note_name'],
            );
      $note[] = $info;
    }
    if ($note!=null)
    {
      $data['note'] = $note;
    }
    else
    {
      $data['note'] = null;
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
    $this->load->view('estUdyante/notecatalog',$data);
    }

public function noteinfo(){
    $data['name'] = $this->session->userdata('email');
    $rs = $this->estudyante->read_note();
    foreach($rs as $r)
    {
      $info = array(

            'note_desc' => $r['note_desc'],
            'note_name' => $r['note_name']
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
    $data['note'] = $studs;
    $this->load->view('include/headerpage',$data);
    $this->load->view('estUdyante/noteinfo',$data);
  }
public function addnote()
  {
      $data['name'] = $this->session->userdata('email');
       $userinfo = $this->estudyante->read_info($data['name']);
      $data = array();
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
              $record = array(
                      'note_name' => $_POST['note_name'],
                      'note_desc' => $_POST['note_desc']

                    );
              $insert_id = $this->estudyante->create_note($record);
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
    $this->load->view('estUdyante/addnote', $data);
  }

}