<?php
Class Psess extends CI_Controller{
	public function __construct(){
	parent::__construct();
		$this->load->model('aftersearch_model');
	}

	public function index(){
		echo "<pre>";
		print_r($this->session->all_userdata());
		echo "</pre>";
	}

	public function modal(){
		
		$this->load->view('modal');

	}


}

?>