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
      $data['profile']=$id;
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

   $b = $this->estudyante->read_profile($info['id']);
    foreach($a as $c){
      $info = array(
        'id' => $c['id'],
        'user_id' => $c['user_id'],
        'name' => $c['user_name'],
        'body' => $c['body'],
        'postdate' => $c['postdate'],
        'total_likes' => $c['total_likes'],
        'avatar' => $c['avatar'], 

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
        'school' => $d['school'],
        'avatar'=>$d['avatar'],
        'cover'=>$d['cover']
      );
     $information[]=$info;
    }

    if($a!=null)
    {
      $data['post'] = $post;
    }
    else
    {
      $data['information']=null;
    }


    if($b!=null)
    {
      $data['information']=$information;
    }
    else
    {
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
      'email' => $i['email']
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
      $userinfo = $this->estudyante->read_infobyid($this->session->userdata('logged_user'));
      foreach($userinfo as $i){
        $info = array(
          'firstname' => $i['firstname'],
          'lastname' => $i['lastname'],        
        );
      }
      $notif = array(
        'user_id' => $this->session->userdata('logged_user'),     
        'notif_subject' => $info['firstname']." followed you",
        'notif_text' => 'Check her/his profile now',
        'type' => "FOLLOW",
        'notif_user' => $f['mate_ID'].''

      );
      $this->estudyante->notif($notif);

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
              $url = $this->do_upload();
              $cover= $this->do_upload2();
              $record = array(
                      'user_id'=>$data['m'],
                      'address' => $_POST['address'],
                      'school' => $_POST['school'],
                      'birthday' => $_POST['birthday'],
                      'contact' => $_POST['contact'],
                      'avatar'=>$url,
                      'cover'=>$cover
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
      foreach($userinfo as $i){
        $info = array(
          'id' => $i['id'],
          'firstname' => $i['firstname'],
          'lastname' => $i['lastname'],
          'email' => $i['email'],
        );
        $data['m'] = $info['id'];

      }
    $rs = $this->estudyante->read_profile();
    foreach($rs as $r)
    {
      $info = array(
               'user_id'=>$r['user_id'],
               'info_id'=>$r['info_id'],
              'address' => $r['address'],
              'school' => $r['school'],
              'birthday' => $r['birthday'],
              'contact' => $r['contact'],    
              'avatar'=>$r['avatar'],
              'cover'=>$r['cover'],  
            );
      $studs[] = $info;
    }
    $data['information'] = $studs;
    $data['z']=$info['info_id'];
       if($_SERVER['REQUEST_METHOD']=='POST')
            {
              $url = $this->do_upload();
              $cover=$this->do_upload2();
              $record = array(
                      'user_id'=>$data['m'],
                      'info_id'=>$data['z'],
                      'address' => $_POST['address'],
                      'school' => $_POST['school'],
                      'birthday' => $_POST['birthday'],
                      'contact' => $_POST['contact'],
                      'avatar'=>$url,  
                      'cover'=>$cover      
                    );
              $insert_id = $this->estudyante->update_profile($record,$data['z']);
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
    $this->load->view('estudyante/editinfo',$data);

  }
public function do_upload()
  {
    $type = explode('.', $_FILES["pic"]["name"]);
    $type = strtolower($type[count($type)-1]);
    $url = "./assets/images/profilepicture/".uniqid(rand()).'.'.$type;
    if(in_array($type, array("jpg", "jpeg", "gif", "png")))
      if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
        if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
          return $url;
    return null;
  }

  public function do_upload2()
  {
    $type = explode('.', $_FILES["cover"]["name"]);
    $type = strtolower($type[count($type)-1]);
    $url = "./assets/images/coverphoto/".uniqid(rand()).'.'.$type;
    if(in_array($type, array("jpg", "jpeg", "gif", "png")))
      if(is_uploaded_file($_FILES["cover"]["tmp_name"]))
        if(move_uploaded_file($_FILES["cover"]["tmp_name"],$url))
          return $url;
    return null;
  }
}
