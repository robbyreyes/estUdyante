<?php

class estu_model extends CI_Model {

	private $book = "book";
	private $friend = "friend";
	private $note = "note";
	private $profile = "profile";
	private $user = "user";

	public function create_user($data){
	   $this->db->insert($this->user, $data);
	return TRUE;
	}


	public function can_login($email, $password){

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		// $pass = password_hash($password, PASSWORD_DEFAULT);
		$query = $this->db->get('user');
		if($query->num_rows() > 0 )
		{
			return true;
				// if(password_verify($password, $pass))
       // 	{
        //       return true;
       // 	}
				// 	else
				// 	{
				//  	return false;
				// 	}
		}
		else
		{
			return false;
		}
	}

	// public function tokens(){
	// 	$this->db-where('id', '');
	// 	$query = $this->db->get('user');
	//
	// 	$this->db->insert($this->tokens, ('', $token,));
	// }

	public function create_book($data){
		$this->db->insert($this->book,$data);
		return TRUE;
	}

	public function read_book($condition=null){


	if(isset($condition))
		{
		$this->db->where($condition);
		}

	$query=$this->db->get($this->book);
	return $query->result_array();

	}

	public function delete_book($data){
		$this->db->where($data);
		$this->db->delete($this->book);
		return TRUE;
	}




	public function read_friend($condition=null){


	if(isset($condition))
		{
		$this->db->where($condition);
		}

	$query=$this->db->get($this->friend);
	return $query->result_array();

	}

	public function delete_friend($data){
		$this->db->where($data);
		$this->db->delete($this->friend);
		return TRUE;
	}



	public function create_note($data){
		$this->db->insert($this->note, $data);
		return TRUE;
	}

	public function read_note($condition=null){


	if(isset($condition))
		{
		$this->db->where($condition);
		}

	$query=$this->db->get($this->note);
	return $query->result_array();

	}

	public function delete_note($data){
		$this->db->where($data);
		$this->db->delete($this->note);
		return TRUE;
	}




	public function create_profile($data){
		$this->db->insert($this->profile, $data);
		return TRUE;
	}

	public function read_profile($condition=null){


	if(isset($condition))
		{
		$this->db->where($condition);
		}

	$query=$this->db->get($this->profile);
	return $query->result_array();

	}

	public function delete_profile($data){
		$this->db->where($data);
		$this->db->delete($this->profile);
		return TRUE;
	}

	public function delete_user($data){
		$this->db->where($data);
		$this->db->delete($this->user);
		return TRUE;
	}

	public function update_user($data){
		$this->db->where($data);
		$this->db->update($this->user, $data);
		return TRUE;
	}
}

?>
