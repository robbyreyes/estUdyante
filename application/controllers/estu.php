<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estu extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
		// echo "CI and Bootstrap";
		if($this->session->userdata('email') != '')
		{
				redirect(site_url('estu/homepage'), 'refresh');
		}
		else
		{
			$header_data['title'] = "estUdyante";

			$data['name'] = $this->session->userdata('email');

			$condition=null;

			$this->load->view('include/header',$header_data);
			$this->load->view('estUdyante/dashboard', $data);
			$this->load->view('include/footer');
		}
	}

	public function homepage(){
		$header_data['title'] = "estUdyante";
		$data['name'] = $data['name'] = $this->session->userdata('email');
		$condition=null;
		$this->load->view('include/headerpage', $data);
		$this->load->view('estUdyante/homepage', $data);
	}

	public function bookcatalog(){
		$header_data['title'] = "estUdyante";
		$data['name'] = $data['name'] = $this->session->userdata('email');
		$condition=null;
		$this->load->view('include/headerpage', $data);
		$this->load->view('estUdyante/bookcatalog', $data);
	}

	public function notecatalog(){
		$header_data['title'] = "estUdyante";
		$data['name'] = $data['name'] = $this->session->userdata('email');
		$condition=null;
		$this->load->view('include/headerpage', $data);
		$this->load->view('estUdyante/notecatalog', $data);
	}

	public function friendlist(){
		$header_data['title'] = "estUdyante";
		$data['name'] = $data['name'] = $this->session->userdata('email');
		$condition=null;
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/friendlist', $data);
	}

	public function profile(){
		$data['name'] = $this->session->userdata('email');
		$data['user_name'] = "Robby Reyes";
		$data['user_birthday'] = "November 15, 1999";
		$data['user_address'] = "Binakayan Kawit Cavite";
		$data['user_contact'] = "09******";
		$data['user_friend'] = "45";
		$data['user_school'] = "Technological University of the Philippines";
		$header_data['title'] = $data['user_name'];
		$condition=null;
		$this->load->view('include/headerpage',$data);
		$this->load->view('estUdyante/profile', $data);
	}

	public function modal(){
		$header_data['title'] = "Add New Student";
		$this->load->view('include/header',$header_data);
		$this->load->view('students/modal');
		$this->load->view('include/footer');
	}

	public function signup(){
		$header_data['title'] = "Sign Up";
		$data['name'] = "User";
		$condition=null;
		$data = array();
		if( $_SERVER['REQUEST_METHOD']=='POST'){
			$userrecord = array(
							'firstname'=>$_POST['fname'],
							'lastname'=>$_POST['lname'],
							'email'=>$_POST['email'],
							// 'password'=>password_hash($_POST['password'], PASSWORD_DEFAULT),
							'password'=>$_POST['password'],
						);
			$insert_id = $this->estudyante->create_user($userrecord);
			$data['saved'] = TRUE;
		}

		$this->load->view('include/header',$header_data);
		$this->load->view('estUdyante/signup', $data);

	}

	public function validate(){
		$this->form_validation->set_rules('email', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$this->load->model('estu_model');

				if ($this->estu_model->can_login($email, $password))
				{
					$session_data = array (
							'email' => $email,
							'password' => $password
							);
				  	// echo 'hash = '.password_hash($session_data['password'], PASSWORD_DEFAULT);
						$this->session->set_userdata($session_data);
						redirect(site_url('estu/homepage'), 'refresh');
						// $cstrong = TRUE;
						// $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
						// echo '    '.$token;
						//
						// $this->estu_model->tokens($token);
				}
				else
				{
					$this->session->set_flashdata('error', 'Invalid Email or Password');
					redirect(site_url('estu/index'), 'refresh');
				}
		}
		else
		{

		 	 $this->session->set_userdata('email',username);
			 $this->index();
		}
	}

	public function enter(){
		if($this->session->userdata('email') != '')
		{
			echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';
			echo '<label><a href="logout">Logout</a></label>';

		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
		redirect(site_url('estu/'), 'refresh');
	}
}
