<?php
Class Users extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/user_model');
	}

	public function viewuser(){
		$response=$this->user_model->getuserinfo();
		$this->load->view('backend/header');
		$this->load->view('backend/users/viewusers',array('userinfo'=>$response));
		$this->load->view('backend/footer');
	}
}

?>