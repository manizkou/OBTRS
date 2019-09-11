<?php
class Call_bootstrap_model extends CI_Model{
	function getuser($id){
		$select=$this->db->query("SELECT * FROM add_bus INNER JOIN route_details ON route_details.route_id=add_bus.route_id WHERE bus_id='$id' ");
		return $select->result();
	}

	function detailschedule($id){
		$select=$this->db->query("SELECT * FROM add_schedule
							INNER JOIN add_bus ON add_schedule.bus_id = add_bus.bus_id
							INNER JOIN route_details ON add_schedule.route_id = route_details.route_id
							WHERE schedule_id ='$id'");
		return $select->result();
	}

	function getpassenger($id){
		$select=$this->db->query("SELECT * FROM passenger_details  WHERE ticket_id='$id' ");
		return $select->result();
	}
	function getcancelinfo($id){
		$sel=$this->db->query("SELECT * FROM cancel_details where ticket_id='$id'");
		return $sel->result();
	}

	function getratinginfo($id){
		$sel=$this->db->query("SELECT * FROM rating WHERE busid='$id'");
		return $sel->result();
	}



}
?>