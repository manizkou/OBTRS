<?php
Class Schedule_model extends CI_MODEL{
	function getbusname(){
		$select=$this->db->query("SELECT * FROM add_bus ORDER BY bus_id DESC");
		return $select->result();
	}
	function getroute(){
		$select=$this->db->query("SELECT * FROM route_details ORDER BY route_id DESC");
		return $select->result();
	}
	function fromname($busid){
		$select=$this->db->query("SELECT * FROM add_bus 
									INNER JOIN route_details ON add_bus.route_id=route_details.route_id WHERE bus_id='$busid'");
		return $select->result();
	}
	function inschedule($busid,$routeid,$onward,$return){
		$this->db->query("INSERT INTO add_schedule(bus_id,route_id,onward,returndate,status) VALUES('$busid','$routeid','$onward','$return','active') ");
		return TRUE;
	}

	function viewsched(){
		$select=$this->db->query("SELECT * FROM add_schedule
							INNER JOIN add_bus ON add_schedule.bus_id = add_bus.bus_id
							INNER JOIN route_details ON add_schedule.route_id = route_details.route_id 
							ORDER BY add_schedule.schedule_id DESC");
		return $select->result();
	}
	function upstatus($id,$status){
		$this->db->query("UPDATE add_schedule SET status='$status' WHERE schedule_id='$id'");
		return TRUE;
	}
	function editschedule($id){
		$select=$this->db->query("SELECT * FROM add_schedule 
								INNER JOIN add_bus ON add_schedule.bus_id=add_bus.bus_id
								INNER JOIN route_details ON add_schedule.route_id = route_details.route_id
								WHERE schedule_id='$id'");
		return $select->result();
	}

	function upschedule($id,$busid,$route,$onward,$return){
		$this->db->query("UPDATE add_schedule SET bus_id='$busid',route_id='$route',onward='$onward',returndate='$return'
			WHERE schedule_id='$id'");
		return TRUE;
	}

	function delschedule($id){
		$this->db->query("DELETE FROM add_schedule WHERE schedule_id='$id'");
		return TRUE;
	}


}

?>