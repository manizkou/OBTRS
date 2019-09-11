<?php
Class Agentlogin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('operator/login_model');
		$this->load->helper('form');
	}

	public function index(){
		if(isset($_COOKIE['agentemail']) AND isset($_COOKIE['password'])){
			$response=$this->login_model->validatelogin($_COOKIE['agentemail'],$_COOKIE['password']);
			if($response==TRUE){
				$this->session->set_userdata('agentemail',$_COOKIE['agentemail']);
				redirect(base_url().'operator/home');
			}
		}
		else{
		$this->load->view('operator/login');
	}
}

	public function admin_login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','E-mail','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run()){
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$response=$this->login_model->validatelogin($email,$password);

		if($response==TRUE){
			$this->load->library('session');
			$this->session->set_userdata('agentemail',$email);
			foreach ($response as $key ) {
				$this->session->set_userdata('agentname',$key->name);
			}
			if($this->input->post('remember')!=NULL){
				$this->load->helper('cookie');
				setcookie('agentemail',$username,time()+(86400*30),"/");
				setcookie('password',$password,time()+(86400*30),"/");
			}
			redirect(base_url().'operator/home');

		}else{
			$this->session->set_flashdata('logininfo',TRUE);
			$this->session->set_flashdata('message','Invalid! Username and Password');
			redirect(base_url().'operator/agentlogin');
			
		}
		}else{
			$this->load->view('operator/login');
		}

	}

	public function admin_logout(){
		$this->session->unset_userdata('agentemail',$_COOKIE['agentemail']);
		setcookie('agentemail','',time()-3600,"/");
		redirect(base_url().'operator/agentlogin');

	}
}

?>