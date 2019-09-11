<?php 
Class Seatlayout extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/seat_model');
	}
	public function index(){
		$busname=$this->seat_model->getbusname();
		$this->load->view('backend/header');
		$this->load->view('backend/seatlayout',array('busname'=>$busname));
		$this->load->view('backend/footer');
	}

	public function totalseats($id){
		$tseat=$this->seat_model->getmaxseat($id);
		$this->load->view('backend/totalseat',array('tseat'=>$tseat));
	}
	public function insert(){
		$bid=$this->input->post('bus');
		$total=$this->input->post('total');
		$frow=$this->input->post('first');
		$lrow=$this->input->post('last');
		$layout=$this->input->post('matrix');
		$response=$this->seat_model->insertlayout($bid,$total,$frow,$lrow,$layout);
		if($response==TRUE){
			$this->session->set_flashdata('insertinfo',TRUE);
 			$this->session->set_flashdata('message','Successfully Inserted');
			redirect(base_url().'backend/seatlayout');

        }else{
        	$this->session->set_flashdata('insertinfo',TRUE);
 			$this->session->set_flashdata('message','Something Is Missing!');
			redirect(base_url().'backend/seatlayout	');
	}

} 
}

?>