<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

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
        $data['m'] = $info['id'];
        $data['avatar'] = $info['avatar'];
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

    $this->load->library('pagination');
    $config['total_rows']=$this->estudyante->count_post($info['id']);
    $config['per_page'] = 3;
    $config['base_url'] = base_url().'profile/id/'.$info['id'].'/index';

    $this->pagination->initialize($config);

    $a = $this->estudyante->read_profile_post($info['id']);

    foreach($a as $c){
      $info = array(
        'user_id' => $c['user_id'],
        'name' => $c['user_name'],
        'body' => $c['body'],
        'postdate' => $c['postdate'],
        'avatar' => $c['avatar'], 
      );
      $post[] = $info;
    }

    if($a!=null)
      $data['post'] = $post;
    else
      $data['post'] = null;

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
}
