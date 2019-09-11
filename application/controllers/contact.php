<?php
Class Contact extends CI_Controller{
	public function __construct(){
	parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		$this->load->library('session');
		$array_items = array('to', 'from','bookseat','onward','returndate');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect(base_url().'home','refresh');
// 		$date=date("Y/m/d");
// 		date_default_timezone_set('Asia/Kathmandu');
// 		$next=strtotime("-60 seconds");
// 		echo $next;
	
	}
}

?>