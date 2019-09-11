<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/busmanage_model');
	}

	public function index(){
		$viewmodel=$this->busmanage_model->viewbus();
		$this->load->view('backend/header');
		$this->load->view('backend/busmanage/busses',array('view'=>$viewmodel,'updateinfo'=>FALSE));
		$this->load->view('backend/footer');
	}
}

?>