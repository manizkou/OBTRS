<?php
Class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('agentemail')){
			redirect(base_url().'operator/agentlogin');
		}
		$this->load->model('operator/login_model');
		$this->load->model('operator/agent_model');
		
	}

	public function index(){
		$email=$this->session->userdata('agentemail');
		$viewbus=$this->agent_model->viewownerbusses($email);
		$this->load->view('operator/header',array('viewbus'=>$viewbus));
		$this->load->view('operator/index');
		$this->load->view('operator/footer');
	}

	public function viewbooked(){
		$id=$_GET['bsid'];
		$email=$this->session->userdata('agentemail');
		$viewbus=$this->agent_model->viewownerbusses($email);
		$view=$this->agent_model->viewbooked($id);
		$this->load->view('operator/header',array('viewbus'=>$viewbus));
		$this->load->view('operator/viewbooked',array('view'=>$view));
		$this->load->view('operator/footer');
	}

	public function passengerinfo($id){
			$response=$this->agent_model->getpassenger($id);
			if($response==TRUE){
			$this->load->view('operator/passenger_info',array('dynamicmodal'=>$response));
			}

		}
}

?>