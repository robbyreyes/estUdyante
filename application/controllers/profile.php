<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->model('estu_model','estudyante');
  }

  public function index(){
    $this->id();
  }

  public function id($id){
      $userinfo = $this->estudyante->read_infobyid($id);
      foreach($userinfo as $i){
        $info = array(
          'id' => $i['id'],
          'firstname' => $i['firstname'],
          'lastname' => $i['lastname'],
          'email' => $i['email'],
        );
        $data['m'] = $info['id'];

      }

      if($this->session->userdata('logged_user')==$info["id"])
      {
        $data['mate_validate'] = "USER";
      }

      elseif($this->estudyante->if_mate($this->session->userdata('logged_user'),$info['id']))
      {
        $data['mate_validate'] = "FOLLOW";
      }

      else
      {
        $data['mate_validate'] = "UNFOLLOW";      
      }


      $data['title'] = $info['firstname'].' '.$info['lastname'];
      $data['name'] = $info['firstname'].' '.$info['lastname'];
      $data['headername'] = $this->session->userdata('headername');

    $a = $this->estudyante->read_post($info['id']);
    $b = $this->estudyante->read_profile($info['id']);
    foreach($a as $c){
      $info = array(
        'user_id' => $c['user_id'],
        'name' => $c['user_name'],
        'body' => $c['body'],
        'postdate' => $c['postdate'],
        'avatar' => $c['avatar']
      );
      $post[] = $info;
    }
    foreach($b as $d)
    {
     $info = array(
        'user_id' => $d['user_id'],
        'address' => $d['address'],
        'contact' => $d['contact'],
        'birthday' => $d['birthday'],
        'school' => $d['school']
      );
     $information[]=$info;
    }

    if($a!=null&&$b!=null)
    {
      $data['post'] = $post;
      $data['information']=$information;
    }

    else
    {
      $data['post'] = null;
      $data['information']=null;
    }

      $this->load->view('include/headerpage', $data);
      $this->load->view('estUdyante/profile', $data);
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


public function modify($id){
  $userinfo = $this->estudyante->read_infobyid($id);
  foreach($userinfo as $i){
    $info = array(
      'id' => $i['id'],
      'firstname' => $i['firstname'],
      'lastname' => $i['lastname'],
      'email' => $i['email'],
    );
  }

  if($this->session->userdata('logged_user')==$info["id"])
  {
    $data['mate_validate'] = "USER";
  }

  elseif($this->estudyante->if_mate($this->session->userdata('logged_user'),$info['id']))
  {
    $data['mate_validate'] = "FOLLOW";
    if(isset($_POST['unfollow']))
    {
    $this->load->model('estu_model');
    $this->estu_model->delete_follow($this->session->userdata('logged_user'),$info['id']);
    $data['mate_validate'] = "UNFOLLOW";
    }

  }

  else 
  {
    $data['mate_validate'] = "UNFOLLOW";
    if(isset($_POST['follow']))
    {
      $f = array(
        'user_id' => $this->session->userdata('logged_user'),
        'mate_ID' => $info['id']
      );
      $this->load->model('estu_model');
      $follow_user = $this->estu_model->create_follow($f);
      $data['mate_validate'] = "FOLLOW";
    }

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
    $this->estu_model->delete_post($info['body'], $info['postdate']);
  }
  // redirect(base_url('profile/id/'.$id), 'refresh');
  redirect($_SERVER['HTTP_REFERER']);
}

public function info($id)
{
      $userinfo = $this->estudyante->read_infobyid($id);
      foreach($userinfo as $i){
        $info = array(
          'id' => $i['id'],
          'firstname' => $i['firstname'],
          'lastname' => $i['lastname'],
          'email' => $i['email'],
        );
        $data['m'] = $info['id'];

      }

      if($_SERVER['REQUEST_METHOD']=='POST')
            {
              $record = array(
                      'user_id'=>$data['m'],
                      'address' => $_POST['address'],
                      'school' => $_POST['school'],
                      'birthday' => $_POST['birthday'],
                      'contact' => $_POST['contact'],
                    );
              $insert_id = $this->estudyante->create_profile($record);
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
    $this->load->view('estUdyante/addinfo', $data);
}


  public function editinfo($id)
  {
     $userinfo = $this->estudyante->read_infobyid($id);
  }
}
