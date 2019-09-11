<?php
class Droppingdetails_model extends CI_MODEL{
	function getroute(){
		$select=$this->db->query("SELECT * FROM route_details ORDER BY route_id DESC");
		return $select->result();
	}

	function insert($route,$drop,$end){
		$this->db->query("INSERT INTO drop_details(route_id,dpoint,dtime)VALUES('$route','$drop','$end')");
		return TRUE;
	}
	function viewdrop(){
		$select=$this->db->query("SELECT * FROM drop_details INNER JOIN route_details ON drop_details.route_id=route_details.route_id ORDER BY id DESC");
		return $select->result();
	}

	function editdropping($id){
		$update=$this->db->query("SELECT * FROM drop_details WHERE drop_id=$id");
		return $update->result();
	}

	function update($id,$bname,$bid,$route,$drop,$end,$address){
		$this->db->query("UPDATE drop_details SET b_name='$bname',bus_id='$bid',route='$route',drop_point='$drop',etime='$end',address='$address' WHERE drop_id='$id'");
		return TRUE;
	}

	function deletedropping($id){
		$this->db->query("DELETE FROM drop_details WHERE drop_id='$id'");
		return TRUE;
	}

}
?>