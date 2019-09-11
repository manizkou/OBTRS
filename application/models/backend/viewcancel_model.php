<?php
Class Viewcancel_model extends CI_Model{
	function viewcancel(){
		$sel=$this->db->query("SELECT DISTINCT(ticket_id),phone,depart_date,cancel_date,bus_name,amount,status FROM cancel_details INNER JOIN add_bus ON cancel_details.bus_id=add_bus.bus_id ORDER BY id DESC");
		return $sel->result();
	}

	function upstatus($id,$status){
		$this->db->query("UPDATE cancel_details SET status='$status' WHERE ticket_id='$id'");
		return TRUE;
	}
}
?>