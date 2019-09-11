<?php
Class Failure extends CI_Controller{

	public function index(){
		$this->load->library('session');
		$this->session->set_flashdata('response',TRUE);
 			$this->session->set_flashdata('message','Transaction Failed! Please Try Again!');
			redirect(base_url().'home');
			$this->session->sess_destroy();
	}
} 
?>