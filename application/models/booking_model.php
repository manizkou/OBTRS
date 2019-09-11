<?php
Class Booking_model extends CI_Model{
	function booking_details($ticketid,$busid,$from,$to,$bookingdate,$amount,$starttime1,$endtime1,$depart,$pickup){
		$this->db->query("INSERT INTO booking_details(ticket_id,bus_id,from_place,to_place,booking_date,amount,stime,etime,depart_date,pickup) VALUES('$ticketid','$busid','$from','$to','$bookingdate','$amount','$starttime1','$endtime1','$depart','$pickup')");
		return TRUE;
	}

	function passenger_details(){
		$this->load->library('session');
		$busid=$this->session->userdata('busid1');
		$ticketid=$this->session->userdata('ticketid1');
		$tseat1=$this->session->userdata('totalseat1');
		$bookedseat=$this->session->userdata('bookseat1');
		$email=$this->session->userdata('passemail');
		$phone=$this->session->userdata('passphone');
		$depart_date=$this->session->userdata('onward');
		$amt=$this->session->userdata('price1');
		$pickup=$this->session->userdata('pickpoint1');
		$samt=$amt/$tseat1;
		$explode=explode(',',$bookedseat);
		$exp = array_combine(range(1, count($explode)), $explode);
		for($i=1;$i<=$tseat1;$i++){
			$pname=$this->session->userdata('passname'.$i);
			$page=$this->session->userdata('passage'.$i);
			$pgender=$this->session->userdata('passgender'.$i);
			$seat=$exp[$i];
			$this->db->query("INSERT INTO passenger_details(ticket_id,bus_id,pname,page,pgender,email,phone,seat,depart_date,amount,pickup) VALUES('$ticketid','$busid','$pname','$page','$pgender','$email','$phone','$seat','$depart_date','$samt','$pickup')");
		}
		return TRUE;


	}

	function return_passenger_details(){
		$this->load->library('session');
		$busid2=$this->session->userdata('busid2');
		$ticketid2=$this->session->userdata('ticketid2');
		$tseat2=$this->session->userdata('totalseat2');
		$bookedseat=$this->session->userdata('bookseat2');
		$email=$this->session->userdata('passemail');
		$phone=$this->session->userdata('passphone');
		$depart_date=$this->session->userdata('returndate');
		$pickup=$this->session->userdata('pickpoint2');
		$amt2=$this->session->userdata('price2');
		$samt2=$amt2/$tseat2;
		$explode=explode(',',$bookedseat);
		$exp = array_combine(range(1, count($explode)), $explode);
		for($i=1;$i<=$tseat2;$i++){
			$pname=$this->session->userdata('repassname'.$i);
			$page=$this->session->userdata('repassage'.$i);
			$pgender=$this->session->userdata('repassgender'.$i);
			$seat=$exp[$i];
			$this->db->query("INSERT INTO passenger_details(ticket_id,bus_id,pname,page,pgender,email,phone,seat,depart_date,amount,pickup) VALUES('$ticketid2','$busid2','$pname','$page','$pgender','$email','$phone','$seat','$depart_date','$samt2','$pickup')");
		}
		return TRUE;


	}

}
?>