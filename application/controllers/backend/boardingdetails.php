<?php
class Boardingdetails extends CI_CONTROLLER{
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/boardingdetails_model');
	}

	public function addboard(){
		$routename=$this->boardingdetails_model->getroute();
		$this->load->view('backend/header');
		$this->load->view('backend/boarding/addboarding',array('routeinfo'=>$routename));
		$this->load->view('backend/footer');
		
	}
	public function insertboard(){
		$route=$this->input->post('route');
		$board=$this->input->post('bord-point');
		$drop=$this->input->post('drop-point');
		$start=$this->input->post('start_time');
		$end=$this->input->post('end_time');
		$price=$this->input->post('price');
		$response=$this->boardingdetails_model->insert($route,$board,$drop,$start,$end,$price);
		if($response==TRUE){
			$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Successfully inserted');
			redirect(base_url().'backend/boardingdetails/addboard');
        }else{
        	$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Something is Missing!');
			redirect(base_url().'backend/boardingdetails/addboard');
		}
	}

		public function viewboarding(){
			$viewmodel=$this->boardingdetails_model->viewboard();
			$this->load->view('backend/header');
			$this->load->view('backend/boarding/viewbording',array('view'=>$viewmodel));
			$this->load->view('backend/footer');
		}

		public function editboard($id){
			$editmodel=$this->boardingdetails_model->editboarding($id);
			$routename=$this->boardingdetails_model->getroute();
			$this->load->view('backend/header');
			$this->load->view('backend/boarding/editboarding',array('edit'=>$editmodel,'route'=>$routename));
			$this->load->view('backend/footer');


		}

		public function updateboard($id){
			$route=$this->input->post('route');
			$board=$this->input->post('bord-point');
			$drop=$this->input->post('drop-point');
			$start=$this->input->post('start_time');
			$end=$this->input->post('end_time');
			$price=$this->input->post('price');
			$response=$this->boardingdetails_model->update($id,$route,$board,$drop,$start,$end,$price);
			if($response==TRUE){
	 			$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Updated');
				redirect(base_url().'backend/boardingdetails/viewboarding');
        	}else{
        		$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/boardingdetails/viewboarding');

	 		}

		}

		public function deleteboard($id){
			$response=$this->boardingdetails_model->deleteboarding($id);
			if($response==TRUE){
	 			$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Deleted');
				redirect(base_url().'backend/boardingdetails/viewboarding');
        	}else{
        		$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/boardingdetails/viewboarding');

	 		}


		}
}

?>