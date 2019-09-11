<?php
Class Rating_model extends CI_Model{

	function viewrating(){
		$select=$this->db->query("SELECT add_bus.bus_id,rating.busid,add_bus.bus_name,sum(average) 'aver',ratesb,busq,COUNT(rating.busid) 'totalbus' FROM rating INNER JOIN add_bus ON rating.busid=add_bus.bus_id GROUP BY rating.busid");
		return $select->result();
	}

	
}

?>