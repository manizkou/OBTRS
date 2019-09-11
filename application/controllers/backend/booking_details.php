<?php
Class Booking_details extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/bookingdetails_model');
	}

	public function index(){
		$viewmodel=$this->bookingdetails_model->viewbook();
		$this->load->view('backend/header');
		$this->load->view('backend/booking/viewbooking',array('view'=>$viewmodel));
		$this->load->view('backend/footer');
	}
}

?>