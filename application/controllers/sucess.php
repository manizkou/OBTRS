<?php
	CLASS Sucess extends CI_Controller{
		public function __construct(){
		parent::__construct();
		$this->load->model('booking_model');	
	}

	public function index(){
		$this->load->library('session');
		$from=$this->session->userdata('from');
		$to=$this->session->userdata('to');
		$amount=$this->session->userdata('price1');
		$busid=$this->session->userdata('busid1');
		$ticketid1=$this->session->userdata('ticketid1');
		$stime=$this->session->userdata('starttime1');
		$etime=$this->session->userdata('endtime1');
		$depart_date=$this->session->userdata('onward');
		$pickup=$this->session->userdata('pickpoint1');
		$bookingdate=date("Y/m/d");
		$book_model=$this->booking_model->booking_details($ticketid1,$busid,$from,$to,$bookingdate,$amount,$stime,$etime,$depart_date,$pickup);
		if($book_model==TRUE){
			$pass_model=$this->booking_model->passenger_details();
		}
		if($pass_model==TRUE){
			if($this->session->userdata('returndate')!=NULL){
				$to2=$this->session->userdata('from');
				$from2=$this->session->userdata('to');
				$amount2=$this->session->userdata('price2');
				$ticketid2=$this->session->userdata('ticketid2');
				$busid2=$this->session->userdata('busid2');
				$stime2=$this->session->userdata('starttime2');
				$etime2=$this->session->userdata('endtime2');
				$depart_date=$this->session->userdata('returndate');
				$pickup2=$this->session->userdata('pickpoint2');
				$book_model=$this->booking_model->booking_details($ticketid2,$busid2,$from2,$to2,$bookingdate,$amount2,$stime2,$etime2,$depart_date,$pickup2);
				$pass_model=$this->booking_model->return_passenger_details();

				}
				$mailto=$this->session->userdata('passemail');
				$email_subject = "Your BusTicket Info From Book&Go.";
				$email_body = "Thankyou for booking your ticket from Book&Go \n\n"."Here are the details:\n\n";
				$email_body.= "email".":"."$mailto"."\n\n";
				$email_body.= "Ticket ID".":"."$ticketid1"."\n\n";
				if($this->session->userdata('returndate')!=NULL){
					$email_body.= "Return Ticket ID".":"."$ticketid2"."\n\n";
				}
				$email_body.="Please print Your Ticket using your TICKET ID and EMAIL ID from our website. \n\n";
				$email_body.="For any queries on booking, contact us at https://complaint.bookgo.com.\n";
				$headers = "From:Book&Go \n";
				$headers .= "Reply-To".":"."$mailto"; 
				$send=mail("$mailto","$email_subject","$email_body","$headers");
				setcookie('notifyto','',time()-3600,"/");
				setcookie('notifyfrom','',time()-3600,"/");
				setcookie('notifyonward','',time()-3600,"/");
				setcookie('notifybusseat','',time()-3600,"/");
				setcookie('notifybusname','',time()-3600,"/");
				setcookie('notifytseat','',time()-3600,"/");
				setcookie('notifybusid','',time()-3600,"/");
			$this->session->sess_destroy();
			$this->session->sess_create();
			$this->session->set_flashdata('response',TRUE);
 			$this->session->set_flashdata('message','Transaction Sucessfull! We have mail your Ticket to your email address.Please Collect Your Ticket');
 			echo "<script> localStorage.clear();</script>";
			redirect(base_url().'home');
		}



	}

	}
?>