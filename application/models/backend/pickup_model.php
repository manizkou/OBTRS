<?php
class Pickup_model extends CI_MODEL{
	function getroute(){
		$select=$this->db->query("SELECT * FROM route_details ORDER BY route_id DESC");
		return $select->result();
	}

	function pickinsert($rid,$ppoint,$ptime){
		$this->db->query("INSERT INTO pickup_details(route_id,pickup_point,pickup_time) VALUES ('$rid','$ppoint','$ptime')");
		return TRUE;
	}
	function viewpick(){
		$sel=$this->db->query("SELECT * FROM pickup_details INNER JOIN route_details ON pickup_details.route_id=route_details.route_id ORDER BY id DESC");
		return $sel->result();
	}
	function deletepick($id){
		$this->db->query("DELETE FROM pickup_details WHERE id='$id'");
		return TRUE;
	}
}


?>