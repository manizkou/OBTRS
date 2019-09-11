<?php
Class Routemanage_model extends CI_Model{
	function getbusname(){
		$select=$this->db->query("SELECT * FROM add_bus ORDER BY bus_id DESC");
		return $select->result();
	}

	function inroute($fplace,$tplace){
		$this->db->query("INSERT INTO route_details(fplace,tplace)VALUES('$fplace','$tplace')");
		return TRUE;
	}

	function viewroute(){
		$select=$this->db->query("SELECT * FROM route_details 
								ORDER BY route_details.route_id DESC");
		return $select->result();
	}
	function editroute($id){
		$update=$this->db->query("SELECT *FROM route_details WHERE route_id='$id'");
		return $update->result();
	}
	function updateroute($id,$fplace,$tplace){
		$this->db->query("UPDATE route_details SET fplace='$fplace',tplace='$tplace' WHERE route_id='$id'");
		return TRUE;
	}
	function deleteroute($id){
		$query=$this->db->query("DELETE FROM route_details WHERE route_id='$id'");
		return TRUE;
	}

}
?>