<?php
class Boardingdetails_model extends CI_MODEL{

	function getroute(){
		$select=$this->db->query("SELECT * FROM route_details ORDER BY route_id DESC");
		return $select->result();
	}
	function insert($route,$board,$drop,$start,$end,$price){
		$this->db->query("INSERT INTO boarding_details(route_id,board,drop_point,stime,etime,price)VALUES('$route','$board','$drop','$start','$end','$price')");
		return TRUE;
	}
	function viewboard(){
		$select=$this->db->query("SELECT *FROM boarding_details 
								INNER JOIN route_details ON boarding_details.route_id=route_details.route_id ORDER BY boarding_details.board_id DESC");
		return $select->result();
	}

	function editboarding($id){
		$update=$this->db->query("SELECT * FROM boarding_details WHERE board_id=$id");
		return $update->result();
	}

	function update($id,$route,$board,$drop,$start,$end,$price){
		$this->db->query("UPDATE boarding_details SET route_id='$route',board='$board',drop_point='$drop',stime='$start',etime='$end',price='$price' WHERE board_id='$id'");
		return TRUE;
	}

	function deleteboarding($id){
		$this->db->query("DELETE FROM boarding_details WHERE board_id='$id'");
		return TRUE;
	}

}
?>