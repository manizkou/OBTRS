<?php
Class Print_ticket extends CI_Controller{
	public function __construct(){
	parent::__construct();
		
		$this->load->model('print_model');
	}

	public function index(){
		// echo "<pre>";
		// print_r($this->session->all_userdata());
		// echo "</pre>";
		$this->load->view('header');
		$this->load->view('print');
		$this->load->view('footer');
	}

	public function submit()
	{
		$ticket = $this->input->GET('ticket');
		$email = $this->input->GET('email');
		$value=$this->print_model->print_ticket($ticket,$email);
		if($value==TRUE){
			$this->load->view('pdf',array('repo'=>$value));
		}else{
			$this->session->set_flashdata('response',TRUE);
 			$this->session->set_flashdata('message','Your Ticket is Invalid');
			redirect(base_url().'print_ticket');
		}
		
}
}

?>