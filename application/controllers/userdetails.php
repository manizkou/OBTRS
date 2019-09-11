<?php 
class userdetails extends CI_Controller
{
public function __construct(){
	parent::__construct();
		$this->load->library('session');
		$this->load->model('userdetail');
		$this->load->helper('form');
	}
	
	public function signup()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required|min_length[4]|trim');
		$this->form_validation->set_rules('address','Address','required|alpha|min_length[3]');
		$this->form_validation->set_rules('age','Age','required|trim|exact_length[2]|numeric|
			xss_clean');
		$this->form_validation->set_rules('phone','Phone Number','required|exact_length[10]|numeric|
			xss_clean');
		$this->form_validation->set_rules('email','E-mail','required|valid_email|is_unique[signup.email]|trim');
		$this->form_validation->set_rules('password','Password','required|trim|max_length[15]|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Password Confirmation','required|matches[password]|trim');
		$this->form_validation->set_error_delimiters('<p class="text-danger" style="margin-left:150px;">','</p>');
		$this->form_validation->set_message('is_unique', 'The E-mail you entered already exist.');

		if($this->form_validation->run()){
		$feild = array(
				'name'=>$this->input->post('name'),
				'age'=>$this->input->post('age'),
				'address'=>$this->input->post('address'),
				'phone'=>$this->input->post('phone'),
				'gender'=>$this->input->post('gender'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'confirm_password'=>$this->input->post('confirm_password'),
				
				
			);
		$response=$this->userdetail->signup($feild);
		if($response==TRUE){
		$email=$this->session->set_userdata('membermail',$this->input->post('email'));
		$password=$this->session->set_userdata('password',$this->input->post('password'));
		}else{
		}
		echo "success";

		}else{			
			 $data = array(
                'name' => form_error('name'),
                'age' => form_error('age'),
                'phone' => form_error('phone'),
                'email'=>form_error('email'),
                'confirm_password'=>form_error('confirm_password')
            );

            echo json_encode($data);
		}
		
	}



	public function login()
	{
		
			$email=$this->input->post('email');
		  	$password=$this->input->post('password');
			$this->load->model('userdetail');
			$response=$this->userdetail->login($email,$password);
				if($response==TRUE){
					if($this->input->post('remember')!=NULL){
						$this->load->helper('cookie');
						setcookie('membermail',$email,time()+(86400*30),"/");
						setcookie('memberpass',$password,time()+(86400*30),"/");
					}
					  $this->session->set_userdata('member_login',TRUE);
					  foreach ($response as $key) {
					  	 $this->session->set_userdata('membername',$key->name);
					  	 $this->session->set_userdata('memberage',$key->age);
					  	 $this->session->set_userdata('memberphone',$key->phone);
					  	 $this->session->set_userdata('membergender',$key->gender);
					  }
					  echo "success";	 
				}
		
		}

		public function logout()
		{
			$this->session->unset_userdata('membermail',$_COOKIE['membermail']);
			setcookie('membermail','',time()-3600,"/");
			//$this->session->unset_userdata('membername',$_COOKIE['membername']);
			$this->session->unset_userdata('memberage');
			$this->session->unset_userdata('memberphone');
			$this->session->unset_userdata('membergender');


			// setcookie('membername','',time()-(86400*30),"/");
			// setcookie('memberage','',time()-(86400*30),"/");
			// setcookie('membergender','',time()-(86400*30),"/");
			// setcookie('memberphone','',time()-(86400*30),"/");
			$this->session->unset_userdata('member_login');
			$this->session->unset_userdata('membername');
			redirect(base_url().'home');
		}
	}


?>