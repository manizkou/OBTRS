<?php
Class Login_model extends CI_MODEL{


	public function validatelogin($username,$password){
		$se=$this->db->query("SELECT * FROM login_info WHERE username='$username' AND password='$password'");
		if($se->num_rows()){
			return TRUE;
		}else{
			return FALSE;
		}

	}
}
?>