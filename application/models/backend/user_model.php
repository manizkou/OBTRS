<?php
Class User_model extends CI_Model{
	public function getuserinfo(){
		$select=$this->db->query("SELECT * FROM signup order by id DESC");
		return $select->result();
	}
}
?>