<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estu extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
		if($this->session->userdata('logged_in'))
		{
			redirect('homepage', 'refresh');
		}

	}

	public function index(){
			$header_data['title'] = "Welcome to estUdyante";

			$data['name'] = $this->session->userdata('email');
	 if($_SERVER['REQUEST_METHOD']=='POST')
		 {
		 	$record = array(
                      'firstname' => $_POST['firstname'],
                      'lastname' => $_POST['lastname'],
                      'email'=>$_POST['email'],
                      'password'=>password_hash($_POST['password'], PASSWORD_BCRYPT),
                    );
              $insert_id = $this->estudyante->create_user($record);
              $data['saved'] = TRUE;
		 }

		   else
            {
             $data['saved']= FALSE;
            }
			$condition=null;

			$this->load->view('include/header',$header_data);
			$this->load->view('estUdyante/dashboard', $data);
			$this->load->view('include/footer');
		}

}
