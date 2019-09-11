<?php
Class Opreport extends CI_Controller{
		public function __construct(){
		parent::__construct();
		$this->load->model('operator/opreport_model');
	}

	function index(){
		$date=$this->input->get('date');
		$busid=$this->input->get('bid');
		$decode=urldecode($date);
		$response=$this->opreport_model->getreport($decode,$busid);
		if($response==TRUE){
				$this->load->view('operator/opdf',array('passinfo'=>$response));
		}
	}
	
}
?>