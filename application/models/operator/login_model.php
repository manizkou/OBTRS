<?php
Class Login_model extends CI_MODEL{


	public function validatelogin($email,$password){
		$se=$this->db->query("SELECT * FROM owner_info WHERE email='$email' AND password='$password'");
		if($se->num_rows()){
			return $se->result();
			return TRUE;
		}else{
			return FALSE;
		}

	}
}
?>