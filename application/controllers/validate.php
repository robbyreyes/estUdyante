<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class validate extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){
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
              'password' => $password,
							'logged_in' => TRUE
              );
            // echo 'hash = '.password_hash($session_data['password'], PASSWORD_DEFAULT);
            $this->session->set_userdata($session_data);
						// print_r($session_data);
            redirect('homepage', 'refresh');
            // $cstrong = TRUE;
            // $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
            // echo '    '.$token;
            //
            // $this->estu_model->tokens($token);
        }
        else
        {
          $this->session->set_flashdata('error', 'Invalid Email or Password');
          redirect('estu', 'refresh');
        }
    }
    else
    {

       $this->session->set_userdata('email',username);
       $this->index();
    }
  }

	public function logout(){
		// $sess_data = array (
		// 	'email' => '',
		// 	'password' => '',
		// 	'logged_in' => FALSE
		// );
			$this->session->unset_userdata('logged_in');
			redirect(base_url(), 'refresh');
	}
}
