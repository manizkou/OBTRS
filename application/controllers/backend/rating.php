<?php
Class Rating extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/rating_model');
	}

	public function index(){
		$viewmodel=$this->rating_model->viewrating();
		$this->load->view('backend/header');
		$this->load->view('backend/rating',array('view'=>$viewmodel));
		$this->load->view('backend/footer');
	}
}

?>