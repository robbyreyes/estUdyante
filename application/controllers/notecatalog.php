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
    $this->load->library('pagination');
    $config['total_rows']=$this->estudyante->count_note();
    $config['per_page'] = 6;
    $config['base_url'] = base_url().'notecatalog/index';
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
      $note=null;
    $this->pagination->initialize($config);
      $rs = $this->estudyante->read_note(null,$config['per_page'],$this->uri->segment(3));
    foreach($rs as $r)
    {
      $info = array(
            'note_ID'=>$r['note_ID'],
            'note_desc' => $r['note_desc'],
            'note_name' => $r['note_name'],
            'image'=>$r['image']
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

public function noteinfo($id){
    $data['name'] = $this->session->userdata('email');
    $rs = $this->estudyante->read_note($id);
    foreach($rs as $r)
    {
      $info = array(
            'note_ID'=>$r['note_ID'],
            'note_desc' => $r['note_desc'],
            'note_name' => $r['note_name'],
            'file'=>$r['file']
            );
      $note[]=$info;
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
    $data['note'] = $note;
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
                $info = pathinfo($url);
                if ($info["extension"] == "docx"||$info["extension"] == "doc"||$info["extension"] == "odt") 
                {$image= "./assets/images/docx.png"; }

                else if ($info["extension"] == "pptx"||$info["extension"] == "ppt") 
                {$image= "./assets/images/pptx.png"; }
              
                else if ($info["extension"] == "pdf") 
                {$image= "./assets/images/pdf.png"; }
              
                else if ($info["extension"] == "txt") 
                {$image= "./assets/images/txt.png"; }
              $record = array(
                      'note_name' => $_POST['note_name'],
                      'note_desc' => $_POST['note_desc'],
                      'file'=>$url,
                      'image'=>$image
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