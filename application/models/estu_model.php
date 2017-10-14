<?php

class estu_model extends CI_Model {

	private $book = "book";
	private $friend = "friend";
	private $note = "note";
	private $profile = "profile";
	private $user = "user1";
	private $posts = "posts";
	private $mate = "mate";



	public function users(){
		// $this->db->select('firstname', 'lastname');
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->result_array();
	}

	// public function get_username(){
	// 	$this->db->select(CONCAT('user1.firstname',' ','user1.lastname'));
	// 	$query = $this->db->get();
	// 	return $query->result_array();
	// }

	public function can_login($email, $password){

		$query = $this->db->get_where('user1', array('email' => $email));

		if($query->num_rows() > 0 )
		{
				$pass = $query->row();
				if(password_verify($password, $pass->password))
       	{
        	return true;
       	}
				else
				{
					return false;
				}
		}
		else
		{
			return false;
		}
	}


	public function search($k){
	 	$this->db->like('firstname', $k);
		$query = $this->db->get('user1');
		return $query->result_array();
	}


	public function read_follow($condition=null){

	if(isset($condition))
	{
		$this->db->where('user_id',$condition);
	}

	$query=$this->db->get($this->mate);
	return $query->result_array();
	}



	public function create_user($data){
		 $this->db->insert($this->user, $data);
		 return TRUE;
	}

	public function read_user($condition=null){

	if(isset($condition))
		{
			$this->db->where($condition);
		}

	$query=$this->db->get($this->user);
	return $query->result_array();
	}



	public function create_book($data){
		$this->db->insert($this->book, $data);
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



	public function create_post($b){
		$this->db->insert('posts', $b);
		return TRUE;
	}

	public function read_post($condition=null){

	if(isset($condition))
	{
		$this->db->where_in('user_id',$condition);
	}

	$query=$this->db->get($this->posts);
	return $query->result_array();
	}

	public function delete_post($data){
		$this->db->where($data);
		$this->db->delete($this->posts);
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




	public function read_info($condition=null){

	$this->db->select('*');
	$this->db->from('user1');
	if(isset($condition))
	{
		$this->db->where('email',$condition);
	}
	$query= $this->db->get();
	return $query->result_array();
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
