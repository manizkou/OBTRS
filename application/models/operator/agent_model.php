<?php
Class Agent_model extends CI_Model{
	function viewownerbusses($email){
		$select=$this->db->query("SELECT *FROM add_bus WHERE email='$email'");
		return $select->result();
	}

	function viewbooked($id){
		$select=$this->db->query("SELECT * FROM booking_details WHERE bus_id='$id' ORDER by booking_id DESC");
		return $select->result();
	}
	function getpassenger($id){
		$select=$this->db->query("SELECT * FROM passenger_details WHERE ticket_id='$id'");
		return $select->result();
	}
}



?>