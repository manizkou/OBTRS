<?php
class Droppingdetails extends CI_CONTROLLER{
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/droppingdetails_model');
	}

	public function adddrop(){
		$rname=$this->droppingdetails_model->getroute();
		$this->load->view('backend/header');
		$this->load->view('backend/dropping/adddrop',array('routeinfo'=>$rname));
		$this->load->view('backend/footer');
		
	}

	public function insertdrop(){
		$route=$this->input->post('routeid');
		$drop=$this->input->post('dpoint');
		$end=$this->input->post('dtime');
		$response=$this->droppingdetails_model->insert($route,$drop,$end);
		if($response==TRUE){
			$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Successfully inserted');
			redirect(base_url().'backend/droppingdetails/adddrop');
        }else{
        	$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Something is Missing!');
			redirect(base_url().'backend/droppingdetails/adddrop');
		}
	}

		public function viewdropping(){
			$viewmodel=$this->droppingdetails_model->viewdrop();
			$this->load->view('backend/header');
			$this->load->view('backend/dropping/viewdrop',array('view'=>$viewmodel));
			$this->load->view('backend/footer');
		}

		public function editdrop($id){
			$editmodel=$this->droppingdetails_model->editdropping($id);
			$busname=$this->droppingdetails_model->getbusname();
			$this->load->view('backend/header');
			$this->load->view('backend/dropping/editdrop',array('edit'=>$editmodel,'busnaam'=>$busname));
			$this->load->view('backend/footer');


		}

		public function updatedrop($id){
			$bname=$this->input->post('busname');
			$bid=$this->input->post('bid');
			$route=$this->input->post('route');
			$drop=$this->input->post('drop-point');
			$etime=$this->input->post('drop_time');
			$address=$this->input->post('address');
			$response=$this->droppingdetails_model->update($id,$bname,$bid,$route,$drop,$etime,$address);
			if($response==TRUE){
	 			$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Updated');
				redirect(base_url().'backend/droppingdetails/viewdropping');
        	}else{
        		$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/droppingdetails/viewdropping');

	 		}

		}

		public function deletedrop($id){
			$response=$this->droppingdetails_model->deletedropping($id);
			if($response==TRUE){
	 			$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Deleted');
				redirect(base_url().'backend/droppingdetails/viewdropping');
        	}else{
        		$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/droppingdetails/viewdropping');

	 		}


		}
}

?>