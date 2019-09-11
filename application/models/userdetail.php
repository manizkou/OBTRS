<?php 
class Userdetail extends CI_Model
{
	
	public function signup($feild)
	{
		$this->db->insert('signup',$feild);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function login($email,$password)
	{
		$se=$this->db->query("SELECT * FROM signup WHERE email='$email' AND password='$password'");
		
		if($se->num_rows()){
			$this->session->set_userdata('membermail',$email);
			return $se->result();
			return TRUE;
		}else{
			return FALSE;

		}



	}

}
?>