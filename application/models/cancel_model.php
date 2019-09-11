<?php
Class Cancel_model extends CI_Model{
	function cancel_tic($email,$id){
		$delbookrow=$this->session->userdata('canceltid');
		date_default_timezone_set('Asia/Kathmandu');
		$now=strtotime("now");
		$datee = date("Y/m/d",$now);
		$select=$this->db->query("SELECT * FROM passenger_details WHERE email='$email' AND ticket_id='$id' AND depart_date<='$datee'");
		return $select->result();
	}
	function book_model($id){
		$binfo= $this->db->query("SELECT * FROM booking_details INNER JOIN add_bus ON booking_details.bus_id=add_bus.bus_id WHERE ticket_id='$id'");
		return $binfo->result();

	}

	function refund_amt($id){
		$sel=$this->db->query("SELECT * FROM passenger_details WHERE passenger_id='$id'");
		return $sel->result();
	}

	function delrow($id,$refund){
		$delbookrow=$this->session->userdata('canceltid');
		date_default_timezone_set('Asia/Kathmandu');
		$now=strtotime("now");
		$datee = date("Y/m/d",$now);		
		$this->db->query("INSERT INTO cancel_details(ticket_id,bus_id,pname,page,pgender,email,phone,depart_date,cancel_date,amount,refund,status) SELECT ticket_id, bus_id,pname,page,pgender,email,phone,depart_date,'$datee',amount,'$refund','pending' FROM passenger_details WHERE passenger_id='$id'");
		$this->db->query("DELETE FROM passenger_details WHERE passenger_id='$id'");

		$select=$this->db->query("SELECT ticket_id FROM passenger_details WHERE ticket_id='$delbookrow'");
		if($select->num_rows()==0){
			$this->db->query("DELETE FROM booking_details WHERE ticket_id='$delbookrow'");
		}

		return TRUE;

	}
}
?>