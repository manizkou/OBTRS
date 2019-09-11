<?php 
class Report_model extends CI_Model
{
	
	public function report()
	{
		$this->load->database();
		$route = $this->input->post('route');
		$bus = $this->input->post('bus');
		$date = $this->input->post('date');
		$from = $this->input->post('from');
		$to = $this->input->post('to');	
		$change = date('m/d/Y',strtotime($from));
		$chang = date('m/d/Y',strtotime($to));
	if($date==0){	
				$this->db->select('*');
				$this->db->from('add_schedule');
				$this->db->join('add_bus', 'add_schedule.bus_id = add_bus.bus_id');
				$this->db->join('route_details', 'add_schedule.route_id = route_details.route_id');
				$array = array('route_details.route_id' => $route, 'add_bus.bus_id' => $bus);
				$this->db->where($array);
				// $this->db->where('route_details.route_id',$route);				
				$query = $this->db->get();
				return $query->result();
	}else{


				$select = $this->db->query("SELECT * FROM add_schedule inner join add_bus on add_schedule.bus_id = add_bus.bus_id
					inner join route_details on add_schedule.route_id = route_details.route_id
				  where onward>='$change' AND onward<='$chang' AND route_details.route_id='$route' AND add_bus.bus_id='$bus'");	
			

				return $select->result();

	}
	}

	public function bus_report()
	{
		$this->load->database();
		$route = $this->input->post('route1');
		$date = $this->input->post('date1');
		$from = $this->input->post('From');
		$to = $this->input->post('To');	
		$change = date('m/d/Y',strtotime($from));
		$chang = date('m/d/Y',strtotime($to));
	if($date==0){	
				$this->db->select('*');
				$this->db->from('add_schedule');
				$this->db->join('add_bus', 'add_schedule.bus_id = add_bus.bus_id');
				$this->db->join('route_details', 'add_schedule.route_id = route_details.route_id');
				$array = array('route_details.route_id' => $route);
				$this->db->where($array);
				// $this->db->where('route_details.route_id',$route);				
				$query = $this->db->get();
				return $query->result();
	}else{


				$select = $this->db->query("SELECT * FROM add_schedule inner join add_bus on add_schedule.bus_id = add_bus.bus_id
					inner join route_details on add_schedule.route_id = route_details.route_id
				  where onward>='$change' AND onward<='$chang' AND route_details.route_id='$route'");	
			

				return $select->result();

	}
	}
	function getbusname(){
		$select=$this->db->query("SELECT * FROM add_bus ORDER BY bus_id DESC");
		return $select->result();
	}
	function getroutes(){
		$select=$this->db->query("SELECT * FROM route_details ORDER BY route_id DESC");
		return $select->result();
	}
}


?>