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
            'note_ID'=>$r['note_ID'],
            'note_desc' => $r['note_desc'],
            'note_name' => $r['note_name'],
            'file'=>$r['file']
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
              $url = $this->do_upload();
              $record = array(
                      'note_name' => $_POST['note_name'],
                      'note_desc' => $_POST['note_desc'],
                      'file'=>$url
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

public function do_upload()
  {
    $type = explode('.', $_FILES["file"]["name"]);
    $type = strtolower($type[count($type)-1]);
    $url = "./assets/documents/".uniqid(rand()).'.'.$type;
    if(in_array($type, array("docx", "doc", "odt", "txt", "pdf", "ppt","pptx")))
      if(is_uploaded_file($_FILES["file"]["tmp_name"]))
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$url))
          return $url;
    return "";
  }

  public function download($id)
  {
    $this->load->helper('download');
    $rs=$this->estudyante->read_note($id);
    foreach($rs as $r)
    {
      $info = array(
            'note_ID'=>$r['note_ID'],
            'note_desc' => $r['note_desc'],
            'note_name' => $r['note_name'],
            'file'=>$r['file']
            );
    }
    $file = $info ['file'];
    force_download($file, NULL);
  }

}