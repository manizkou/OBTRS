<?php
Class Opreport_model extends CI_Model{
	function getreport($date,$bid){
		$select=$this->db->query("SELECT * FROM passenger_details WHERE depart_date='$date' AND bus_id='$bid'");
		return $select->result();
	}
}
?>