<?php
class Routemanage extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/routemanage_model');
}

	public function addroute(){
		$busname=$this->routemanage_model->getbusname();
		$this->load->view('backend/header');
		$this->load->view('backend/routemanage/addroutes',array('getbusname'=>$busname));
		$this->load->view('backend/footer');
	}

	public function insertroute(){
		$fplace=$this->input->post('fplace');
		$tplace=$this->input->post('tplace');
		$response=$this->routemanage_model->inroute($fplace,$tplace);
		if($response==TRUE){
		$this->session->set_flashdata('insertinfo',TRUE);
 		$this->session->set_flashdata('message','Route Details successfully Inserted');
		redirect(base_url().'backend/routemanage/addroute');
        }else{
        $this->session->set_flashdata('response',TRUE);
 		$this->session->set_flashdata('message','Something Is Missing!');
		redirect(base_url().'backend/routemanage/addroute');
		}
	}

	public function viewroute(){
		$viewroute=$this->routemanage_model->viewroute();
		$this->load->view('backend/header');
		$this->load->view('backend/routemanage/viewroutes',array('routeview'=>$viewroute));
		$this->load->view('backend/footer');
	}

	public function editroute($id){
		$info=$this->routemanage_model->editroute($id);
		$fetchinfo=$this->routemanage_model->getbusname();
		$this->load->view('backend/header');
		$this->load->view('backend/routemanage/editroutes',array('routeedit'=>$info,'busname'=>$fetchinfo));
		$this->load->view('backend/footer');


	}

	public function updateroute($id){
		$fplace=$this->input->post('fplace');
		$tplace=$this->input->post('tplace');
		$response=$this->routemanage_model->updateroute($id,$fplace,$tplace);
		if($response==TRUE){
			$this->session->set_flashdata('updateinfo',TRUE);
			$this->session->set_flashdata('message','Successfully Updated');
			redirect(base_url().'backend/routemanage/viewroute');
        	}else{
        		$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/routemanage/viewroute');
		}


	}

	public function deleteroute($id){
		$response=$this->routemanage_model->deleteroute($id);
			if($response==TRUE){
	 			$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Deleted');
				redirect(base_url().'backend/routemanage/viewroute');
        	}else{
        		$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/routemanage/viewroute');

	 		}

	}


}
?>
