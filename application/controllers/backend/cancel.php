<?php
Class Cancel extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/viewcancel_model');
		
	}

	public function index(){
		$respo=$this->viewcancel_model->viewcancel();
		$this->load->view('backend/header');
		$this->load->view('backend/cancel/viewcancel',array('cancelinfo'=>$respo));
		$this->load->view('backend/footer');
	}

	public function changestatus(){
		$id=$this->input->post('ticket_id');
		$status=$this->input->post('status');
		$updatestatus=$this->viewcancel_model->upstatus($id,$status);
		if($updatestatus==TRUE){
			echo json_encode(array('successMsg'=>'sucessfully updated'));

		}else{
			echo json_encode(array('errorMsg'=>'cannot update'));
		}
	}

}

?> 