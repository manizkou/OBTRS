<?php
	Class Bootstrap_Modal extends CI_Controller{
		public function __construct(){
			parent::__construct();
			if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
			$this->load->model('backend/call_bootstrap_model');
		}

		public function getuser($id){
			$response=$this->call_bootstrap_model->getuser($id);
			if($response==TRUE){
			$this->load->view('backend/busmanage/getuser',array('dynamicmodal'=>$response));
			}

		}

		public function viewschedule($id){
			$response=$this->call_bootstrap_model->detailschedule($id);
			if($response==TRUE){
			$this->load->view('backend/schedule/detailschedule',array('dynamicmodal'=>$response));
			}

		}

		public function getseat($total,$mat,$last){
			$this->load->view('backend/bootstrap_seat',array('totals'=>$total,'matrix'=>$mat,'last'=>$last));
		}

		public function passengerinfo($id){
			$response=$this->call_bootstrap_model->getpassenger($id);
			if($response==TRUE){
			$this->load->view('backend/booking/passengerinfo',array('dynamicmodal'=>$response));
			}

		}

		public function viewCancelinfo($id){
			$resp=$this->call_bootstrap_model->getcancelinfo($id);
			if($resp==TRUE){
			$this->load->view('backend/cancel/cancelinfo',array('cancelinfo'=>$resp));
			}
		}

		public function ratinginfo($id){
			$resp=$this->call_bootstrap_model->getratinginfo($id);
			if($resp==TRUE){
			$this->load->view('backend/ratinginfo',array('ratinginfo'=>$resp));
			}
		}
	}
?>