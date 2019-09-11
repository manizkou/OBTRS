<?php
Class Schedule extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/schedule_model');
	}

	public function index(){
		$busname=$this->schedule_model->getbusname();
		$route=$this->schedule_model->getroute();
		$this->load->view('backend/header');
		$this->load->view('backend/schedule/addschedule',array('businfo'=>$busname,'routeinfo'=>$route));
		$this->load->view('backend/footer');
	}

	public function fromroute($load){
		$from=$this->schedule_model->fromname($load);
		$this->load->view('backend/schedule/fromroute',array('from'=>$from));
	}

	public function insertschedule(){
		$busid=$this->input->post('busid');
		$routeid=$this->input->post('from');
		$onward=$this->input->post('onwardDate');
		$return=$this->input->post('returnDate');
		$response=$this->schedule_model->inschedule($busid,$routeid,$onward,$return);
		if($response==TRUE){
			$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Successfully inserted');
			redirect(base_url().'backend/schedule');
        }else{
        	$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Something is Missing!');
			redirect(base_url().'backend/schedule');
		}
	}

	public function viewschedule(){
		$info=$this->schedule_model->viewsched();
		$this->load->view('backend/header');
		$this->load->view('backend/schedule/viewschedule',array('view'=>$info));
		$this->load->view('backend/footer');

	}

	public function changestatus(){
		$id=$this->input->post('schedule_id');
		$status=$this->input->post('status');
		$updatestatus=$this->schedule_model->upstatus($id,$status);
		if($updatestatus==TRUE){
			echo json_encode(array('successMsg'=>'sucessfully updated'));

		}else{
			echo json_encode(array('errorMsg'=>'cannot update'));
		}
	}

	public function editschedule($id){
		$edit=$this->schedule_model->editschedule($id);
		$busname=$this->schedule_model->getbusname();
		$this->load->view('backend/header');
		$this->load->view('backend/schedule/editschedule',array('edit'=>$edit,'buslist'=>$busname));
		$this->load->view('backend/footer');
	}

	public function updateschedule($id){
		$busid=$this->input->post('busid');
		$routeid=$this->input->post('from');
		$onward=$this->input->post('onwardDate');
		$return=$this->input->post('returnDate');
		$response=$this->schedule_model->upschedule($id,$busid,$routeid,$onward,$return);
		if($response==TRUE){
	 			$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Updated');
				redirect(base_url().'backend/schedule/viewschedule');
        	}else{
        		$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/schedule/viewschedule');

	 		}


	}

	public function deleteschedule($id){
		$response=$this->schedule_model->delschedule($id);
			if($response==TRUE){
	 			$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Deleted');
				redirect(base_url().'backend/schedule/viewschedule');
        	}else{
        		$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/schedule/viewschedule');

	 		}


	}
}
?>