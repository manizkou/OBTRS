<?php 
Class Owner_info extends CI_Controller{
	public function __construct(){
	parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/owner_model');
	}

	public function viewowner(){
		$sel=$this->owner_model->viewown();
		$this->load->view('backend/header');
		$this->load->view('backend/owner_info/view_owner',array('owninfo'=>$sel));
		$this->load->view('backend/footer');
	}

	public function deleteowner($id){
		$del=$this->owner_model->delowner($id);
		if($del==TRUE){

	 			$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Deleted');
				redirect(base_url().'backend/owner_info/view_owner');
        	}else{
        		$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/owner_info/view_owner');
	 		
		}
	}

	public function addowner(){
		$this->load->view('backend/header');
		$this->load->view('backend/owner_info/add_owner');
		$this->load->view('backend/footer');
	}

	public function insertowner(){
		$name=$this->input->post('agentname');
		$addr=$this->input->post('agentaddr');
		$email=$this->input->post('email');
		$pass=$this->input->post('password');
		$response=$this->owner_model->inowner($name,$addr,$email,$pass);
		if($response==TRUE){
			$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Successfully Signedup!');
			redirect(base_url().'backend/owner_info/addowner');
        }else{
        	$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Something is Missing!');
			redirect(base_url().'backend/owner_info/addowner');
		}

	}
}
?>