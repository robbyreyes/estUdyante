<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fetch extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('estu_model','estudyante');
	}

	public function index(){	
		$user=$this->session->userdata('logged_user');	
		if(isset($_POST["view"]))
		{
		   $connect=mysqli_connect("localhost","root", "","estudyante");
		   if($_POST["view"] != '')
		   {
		   	$user=$this->session->userdata('logged_user');
		    $update_query = "UPDATE notification SET notif_status=1 WHERE notif_status=0 AND notif_user=$user";
		    mysqli_query($connect, $update_query);
		   }
		   $query = "SELECT * FROM notification WHERE notif_user=$user ORDER BY notif_id DESC LIMIT 7";
		   $result = mysqli_query($connect, $query);
		   $output = '';
		   	
		   if(mysqli_num_rows($result) > 0)
		   {
		    while($row = mysqli_fetch_array($result))
		    {
		    	if($row['type']=="FOLLOW")
		    	{
				     $output .= '
				     <li>
				      <a href='.base_url('profile/id/'.$row['user_id'].'').'>
				       <strong>'.$row["notif_subject"].'</strong><br />
				       <small><em>'.$row["notif_text"].'</em></small>
				      </a>
				     </li>
				     <li class="divider"></li>
				     ';
		 		}	
		 		else
		 		{
		 			$output .= '
				     <li>
				      <a href=#>
				       <strong>'.$row["notif_subject"].'</strong><br />
				       <small><em>'.$row["notif_text"].'</em></small>
				      </a>
				     </li>
				     <li class="divider"></li>
				     ';
		 		}
		    }
		   }
		   else
		   {
		    $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
		   }
		   
		   $query_1 = "SELECT * FROM notification WHERE notif_status=0 AND  notif_user=$user";
		   $result_1 = mysqli_query($connect, $query_1);
		   $count = mysqli_num_rows($result_1);
		   $data = array(
		    'notification'   => $output,
		    'unseen_notification' => $count
		   );
		   echo json_encode($data);
		  }
	}
}

?>
