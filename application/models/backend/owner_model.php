<?php
Class Owner_model extends CI_Model{
	function inowner($name,$addr,$email,$pass){
		$this->db->query("INSERT INTO owner_info(name,address,email,password) VALUES ('$name','$addr','$email','$pass')");
		return TRUE;
	}

	function viewown(){
		$select=$this->db->query("SELECT * FROM owner_info ORDER BY owner_id DESC");
		return $select->result();
	}

	function delowner($id){
		$del=$this->db->query("DELETE * FROM owner_info WHERE owner_id='$id'");
		return TRUE;
	}
}
?>