<?php
Class Mytrip_model extends CI_Model{
	function getpassinfo(){
		$mail=$this->session->userdata('membermail');
		$sel=$this->db->query("SELECT MIN(passenger_id) AS passenger_id,booking_details.bus_id,pname,page,pgender,passenger_details.email,phone,seat,passenger_details.depart_date,booking_details.from_place,booking_details.to_place,booking_details.booking_date,booking_details.amount,stime,etime,bus_name,btype,booking_details.ticket_id,start_time,end_time,booking_details.pickup FROM passenger_details INNER JOIN booking_details ON passenger_details.ticket_id = booking_details.ticket_id INNER JOIN add_bus ON passenger_details.bus_id = add_bus.bus_id WHERE passenger_details.email ='$mail' GROUP BY booking_details.ticket_id ORDER BY booking_details.booking_id DESC");
		return $sel->result();
	}


	function getmulpass(){
		$mail=$this->session->userdata('membermail');
		$get=$this->db->query("SELECT * FROM passenger_details INNER JOIN booking_details ON passenger_details.ticket_id=booking_details.ticket_id WHERE email='$mail' ");
		return $get->result();
	}

	function getbusrate($tid,$bid){
			$sel=$this->db->query("SELECT MIN(passenger_id) AS passenger_id,booking_details.bus_id,pname,page,pgender,passenger_details.email,phone,seat,passenger_details.depart_date,booking_details.from_place,booking_details.to_place,booking_details.booking_date,booking_details.amount,stime,etime,bus_name,btype,booking_details.ticket_id,start_time,end_time,booking_details.pickup FROM passenger_details INNER JOIN booking_details ON passenger_details.ticket_id = booking_details.ticket_id INNER JOIN add_bus ON passenger_details.bus_id = add_bus.bus_id WHERE booking_details.ticket_id='$tid' AND booking_details.bus_id='$bid' ");
		return $sel->result();
	}

	function busrate($mail,$bid,$punc,$busq,$ratesb,$desc,$average){
		$this->db->query("INSERT INTO rating(membermail,busid,punc,busq,ratesb,description,average) VALUES('$mail','$bid','$punc','$busq','$ratesb','$desc','$average')");
		return TRUE;
	}

	function upprofile($name,$age,$phone,$sex){
		$mail=$this->session->userdata('membermail');
		$this->db->query("UPDATE signup SET name='$name',age='$age',phone='$phone',gender='$sex' WHERE email='$mail'");
		return TRUE;
	}
}
?>