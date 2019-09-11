<?php
Class Cancellation extends CI_Controller{

	public function __construct(){
	parent::__construct();
		$this->load->library('session');
		$this->load->model('cancel_model');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('cancel_ticket');
		$this->load->view('footer');
	}

	public function ticket(){
		$email=$this->input->post('email');
		$tid=$this->input->post('ticketid');
		$cancel=$this->cancel_model->cancel_tic($email,$tid);


		if($cancel==true){
			$book=$this->cancel_model->book_model($tid);
			$this->session->set_userdata('canceltid',$tid);
			$this->load->view('header');
			$this->load->view('ticketlist',array('ticketlist'=>$cancel,'bookinfo'=>$book));
			$this->load->view('footer');
		}else{
			$this->session->set_flashdata('response',TRUE);
 			$this->session->set_flashdata('message','Your Ticket is Invalid');
			redirect(base_url().'cancellation');
		}
	}

	public function deltic(){
		$delrow = $_POST['del_id'];
		$ref=$this->cancel_model->refund_amt($delrow);
		if($ref==TRUE){
			foreach ($ref as $key ) {
			date_default_timezone_set('Asia/Kathmandu');
			$now=strtotime("now");
			$datee = date("Y/m/d",$now);
			$d=$key->depart_date;
			$depart_date=new DateTime($d);
			$amt=$key->amount;
			$todaydate=new DateTime($datee);
			$dDiff = $depart_date->diff($todaydate);
   			$indays= $dDiff->days;
   		 $this->session->set_userdata('indays',$key->depart_date);
   		 $this->session->set_userdata('in',$key->amount);
   		 $this->session->set_userdata('pid',$delrow);

   			if($indays>7){
   				$camt=0.1*$amt;
   				$refund=$amt-$camt;
   			}elseif ($indays>3) {
   				$camt=0.25*$amt;
   				$refund=$amt-$camt;
   			}elseif($indays>1){
   				$camt=0.5*$amt;
   				$refund=$amt-$camt;

   			}else{
   				$refund=$amt-$amt;
   			}
   		$gomodel=$this->cancel_model->delrow($delrow,$refund);
		if($gomodel==TRUE){
			echo "YES";
		}
			
		}
		
	}


	}

}
?>