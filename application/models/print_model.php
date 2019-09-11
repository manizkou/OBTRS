<?php 
class print_model extends CI_Model
{
	
	public function print_ticket($ticket,$email)
	{
		$this->load->database();
				
		
	
				$this->db->select('*');
				$this->db->from('passenger_details');
				$this->db->join('add_bus', 'passenger_details.bus_id = add_bus.bus_id');
				$this->db->join('route_details', 'add_bus.route_id = route_details.route_id');
				
				$array = array('passenger_details.ticket_id' => $ticket, 'passenger_details.email'=>$email);

				$this->db->where($array);
				// $this->db->where('route_details.route_id',$route);	

				$query = $this->db->get();
				if($query->num_rows()){
					return $query->result();
				}else{
					return FALSE;
				}
				
	}
}


?>

	