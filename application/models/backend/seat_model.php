<?php
Class Seat_model extends CI_Model{
	function getbusname(){
		$select=$this->db->query("SELECT add_bus.bus_id,add_bus.bus_name FROM add_bus ORDER BY bus_id DESC");
		return $select->result();
	}

	function getmaxseat($id){
		$select=$this->db->query("SELECT add_bus.maxseat FROM add_bus WHERE bus_id='$id'");
		return $select->result();
	}

	function insertlayout($bid,$total,$frow,$lrow,$layout){
		$this->db->query("INSERT INTO seat_layout(bus_id,total_seat,frow,lrow,layout) VALUES ($bid,$total,$frow,$lrow,$layout)");
		return TRUE;
	}

}
?>