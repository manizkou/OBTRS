<?php
Class Adminlogin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/login_model');
		$this->load->helper('form');
	}

	public function index(){
		if(isset($_COOKIE['username']) AND isset($_COOKIE['password'])){
			$response=$this->login_model->validatelogin($_COOKIE['username'],$_COOKIE['password']);
			if($response==TRUE){
				$this->session->set_userdata('username',$_COOKIE['username']);
				redirect(base_url().'backend/home');
			}else{
				$this->load->view('backend/login');
			}
		}
		else{
		$this->load->view('backend/login');
	}
}

	public function admin_login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name','required|alpha|min_length[4]|max_length[12]|trim');
		$this->form_validation->set_rules('password','Password','required|alpha');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run()){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$response=$this->login_model->validatelogin($username,$password);

		if($response==TRUE){
			$this->load->library('session');
			$this->session->set_userdata('username',$username);
			if($this->input->post('remember')!=NULL){
				$this->load->helper('cookie');
				setcookie('username',$username,time()+(86400*30),"/");
				setcookie('password',$password,time()+(86400*30),"/");
			}
			redirect(base_url().'backend/home');

		}else{
			$this->session->set_flashdata('logininfo',TRUE);
			$this->session->set_flashdata('message','Invalid! Username and Password');
			redirect(base_url().'backend/adminlogin');
			
		}
		}else{
			$this->load->view('backend/login');
		}

	}

	public function admin_logout(){
		$this->session->unset_userdata('username',$_COOKIE['username']);
		setcookie('username','',time()-3600,"/");
		redirect(base_url().'backend/adminlogin');

	}
}

?>