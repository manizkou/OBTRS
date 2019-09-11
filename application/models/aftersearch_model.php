<?php
CLASS Aftersearch_model extends CI_Model{
	function aftersearch($from,$to,$onward,$return){
		$select=$this->db->query("SELECT * FROM add_schedule 
								INNER JOIN add_bus ON add_schedule.bus_id=add_bus.bus_id
								INNER JOIN route_details ON add_schedule.route_id=route_details.route_id
								INNER JOIN boarding_details ON add_schedule.route_id=boarding_details.route_id
								INNER JOIN seat_layout ON add_schedule.bus_id=seat_layout.bus_id
								INNER JOIN gallery ON add_bus.bus_id=gallery.bus_id
								WHERE onward='$onward' AND board='$from' AND drop_point='$to'");
		return $select->result();
	}
	function returnsearch($from,$to,$return){
		$select=$this->db->query("SELECT * FROM add_schedule 
								INNER JOIN add_bus ON add_schedule.bus_id=add_bus.bus_id
								INNER JOIN route_details ON add_schedule.route_id=route_details.route_id
								INNER JOIN boarding_details ON add_schedule.route_id=boarding_details.route_id
								INNER JOIN seat_layout ON add_schedule.bus_id=seat_layout.bus_id
								INNER JOIN gallery ON add_bus.bus_id=gallery.bus_id
								WHERE returndate='$return' AND drop_point='$from' AND board='$to'");
		return $select->result();
	}

	// function available($from,$onward,$to){
	// 	$select=$this->db->query("SELECT * FROM passenger_details
	// 							INNER JOIN add_bus ON passenger_details.bus_id=add_bus.bus_id
	// 							INNER JOIN route_details ON add_bus.bus_id=route_details.route_id
	// 							WHERE passenger_details.depart_date='$onward' AND route_details.fplace='$from' AND route_details.tplace='$to' AND passenger_details.bus_id=25");
	// 	return $select->result();

	// }


	function getdetail($id){
		$select=$this->db->query("SELECT * FROM add_bus 
								INNER JOIN route_details ON route_details.route_id=add_bus.route_id 
								 WHERE bus_id='$id'");
		return $select->result();
	}
	function getpickup($from,$to){
		$sel=$this->db->query("SELECT route_id FROM boarding_details WHERE board='$from' AND drop_point='$to' ");
		return $sel->result();

	}
	function finalpickup($id){
		$selec=$this->db->query("SELECT * FROM pickup_details WHERE route_id='$id' ");
		return $selec->result();
	}
	function finaldrop($id){
		$selec=$this->db->query("SELECT * FROM drop_details WHERE route_id='$id' ");
		return $selec->result();
	}
	function getmaps($id){
		$select=$this->db->query("SELECT * FROM add_bus 
									INNER JOIN route_details ON route_details.route_id=add_bus.route_id WHERE bus_id='$id'");
		return $select->result();
	}
	function getreview($id){
		$select=$this->db->query("SELECT * FROM rating INNER JOIN signup ON rating.membermail=signup.email WHERE rating.busid='$id'");
		return $select->result();
	}

	function getfrom(){
		$select=$this->db->query("SELECT DISTINCT board FROM boarding_details");
		return $select->result();
	}
	function getto(){
		$sel=$this->db->query("SELECT DISTINCT drop_point FROM boarding_details");
		return $sel->result();
	}

								
}

?>