<?php
Class Bookingdetails_model extends CI_Model{

	function viewbook(){
		$select=$this->db->query("SELECT * FROM booking_details INNER JOIN add_bus ON booking_details.bus_id=add_bus.bus_id order by booking_id DESC");
		return $select->result();
	}
}

?>