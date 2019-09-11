<?php
class Pickup extends CI_CONTROLLER{
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/pickup_model');
	}

	public function addpickup(){
		$routename=$this->pickup_model->getroute();
		$this->load->view('backend/header');
		$this->load->view('backend/pickup/addpickup',array('routeinfo'=>$routename));
		$this->load->view('backend/footer');
		
	}

	public function insert(){
		$route=$this->input->post('routeid');
		$ppoint=$this->input->post('ppoint');
		$ptime=$this->input->post('ptime');
		$response=$this->pickup_model->pickinsert($route,$ppoint,$ptime);
		if($response==TRUE){
			$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Successfully inserted');
			redirect(base_url().'backend/pickup/addpickup');
        }else{
        	$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Something is Missing!');
			redirect(base_url().'backend/pickup/addpickup');
		}
	}

	public function viewpickup(){
		$viewmodel=$this->pickup_model->viewpick();
		

			$this->load->view('backend/header');
			$this->load->view('backend/pickup/viewpickup',array('view'=>$viewmodel));
			$this->load->view('backend/footer');
	}
	public function deletepickup($id){
			$response=$this->pickup_model->deletepick($id);
			if($response==TRUE){
	 			$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Deleted');
				redirect(base_url().'backend/pickup/viewpickup');
        	}else{
        		$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/pickup/viewpickup');

	 		}
	 	}
}
?>