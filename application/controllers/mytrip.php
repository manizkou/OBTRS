<?php 
Class Mytrip extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('member_login')){
			redirect(base_url().'home');
		}
					

		$this->load->model('mytrip_model');
	}

	public function index(){
		$res=$this->mytrip_model->getpassinfo();
		$getpass=$this->mytrip_model->getmulpass();
		$this->load->view('header');
		$this->load->view('myTrip',array('pass'=>$res,'allpass'=>$getpass));
		$this->load->view('footer');
	}

	public function rate(){
		$ticket=$this->input->get('tid');
		$bus=$this->input->get('bid');
		$res=$this->mytrip_model->getbusrate($ticket,$bus);
		$this->load->view('header');
		$this->load->view('ratenreview',array('pass'=>$res));
		$this->load->view('footer');
	}

	public function submitrate(){
		$punc=$this->input->post('ratep');
		$mail=$this->input->post('membermail');
		$bid=$this->input->post('bid');
		$busq=$this->input->post('rateBq');
		$ratesb=$this->input->post('ratesb');
		$desc=$this->input->post('desc');
		$average=($punc+$ratesb+$busq)/3;
		$res=$this->mytrip_model->busrate($mail,$bid,$punc,$busq,$ratesb,$desc,$average);
		if($res==TRUE){
			$this->session->set_flashdata('response',TRUE);
 			$this->session->set_flashdata('message','Your Rating Has Been Submitted.');
			redirect(base_url().'mytrip');
		}
	}

	public function editprofile(){
		$name=$this->input->post('name');
		$age=$this->input->post('age');
		$phone=$this->input->post('phone');
		$sex=$this->input->post('sex');
		$res=$this->mytrip_model->upprofile($name,$age,$phone,$sex);
		if($res==TRUE){
			$this->session->set_userdata('membername',$name);
			$this->session->set_userdata('memberage',$age);
			$this->session->set_userdata('memberphone',$phone);
			$this->session->set_userdata('membergender',$sex);

			$this->session->set_flashdata('response',TRUE);
 			$this->session->set_flashdata('message','Your Profile is Sucessfully Updated.');
			redirect(base_url().'mytrip');
		}

	}
}

?>