<?php
CLASS Passenger_info extends CI_Controller{
	public function __construct(){
	parent::__construct();
	if(!$this->session->userdata('from')){
			redirect(base_url().'home');
		}
	$this->load->model('aftersearch_model');
	$this->load->model('passenger_model');
		
	}

	public function index(){
		$this->load->helper('cookie');
		setcookie('notifyfrom',$this->session->userdata('from'),time()+(86400*30),"/");
		setcookie('notifyto',$this->session->userdata('to'),time()+(86400*30),"/");
		setcookie('notifyonward',$this->session->userdata('onward'),time()+(86400*30),"/");
		$this->load->library('session');
		$tprice=$this->input->post('tprice');
		$starttime=$this->input->post('starttime');
		$endtime=$this->input->post('endtime');
		$bookseat=$this->input->post('bookedseat');
		$pickup=$this->input->post('pickpoint');
		$this->session->set_userdata('bookseat1',$bookseat);
		$this->session->set_userdata('price1',$tprice);
		$this->session->set_userdata('starttime1',$starttime);
		$this->session->set_userdata('endtime1',$endtime);
		$this->session->set_userdata('pickpoint1',$pickup);

		$tseat=$this->input->post('tseat');
		$busid=$this->input->post('bid');
		$this->session->set_userdata('busid1',$busid);
		$this->session->set_userdata('totalseat1',$tseat);
		$response=$this->passenger_model->businfo($busid);
		foreach ($response as $key ) {
			setcookie('notifybusname',$key->bus_name,time()+(86400*30),"/");
			setcookie('notifybusseat',$this->input->post('bookedseat'),time()+(86400*30),"/");
			setcookie('notifytseat',$tseat,time()+(86400*30),"/");
			setcookie('notifybusid',$busid,time()+(86400*30),"/");
		}
			$this->load->view('header');
			$this->load->view('plsLogin',array('totalprice'=>$tprice,'bookedseat'=>$bookseat,'totalseat'=>$tseat,'bus'=>$response));
			$this->load->view('footer');

		

	}

	public function returnbus(){
		
		$this->load->library('session');

		$tprice=$this->input->post('returntprice');
		$bookseat=$this->input->post('returnbookedseat');
		$endtime=$this->input->post('returnendtime');
		$starttime=$this->input->post('returnstarttime');
		$tseat=$this->input->post('returntseat');
		$busid=$this->input->post('returnbid');
		$exp=explode(',',$bookseat);
			for($i=0;$i<$tseat;$i++){
			$seat_part=$exp[$i];
			$insert_temp=$this->passenger_model->intemp($seat_part,$busid);
			}
		$pickpoint2=$this->input->post('pickpoint');
		$this->session->set_userdata('bookseat2',$bookseat);
		$this->session->set_userdata('price2',$tprice);
		$this->session->set_userdata('busid2',$busid);
		$this->session->set_userdata('starttime2',$starttime);
		$this->session->set_userdata('endtime2',$endtime);
		$this->session->set_userdata('totalseat2',$tseat);
		$this->session->set_userdata('pickpoint2',$pickpoint2);

		$response=$this->passenger_model->businfo($busid);
		$this->load->view('header');
		$this->load->view('return_passinfo',array('totalprice'=>$tprice,'bookedseat'=>$bookseat,'totalseat'=>$tseat,'bus'=>$response));
		$this->load->view('footer');
	}
} 

?>
