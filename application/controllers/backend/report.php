<?php 
class Report extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/report_model');
	}
	
	public function index()
	{
		$this->load->view('backend/header');
		$dat=$this->report_model->getbusname();
		$data=$this->report_model->getroutes();
		$this->load->view('backend/reports/report',array('route'=>$data,'bus'=>$dat));
		$this->load->view('backend/footer');
	}

	
	public function submit()
	{
		$value=$this->report_model->report();
		$this->load->view('backend/reports/pdf',array('repo'=>$value));
		// redirect(base_url('report/pdf'));
	}

	public function bus_report()
	{
		$value=$this->report_model->bus_report();
		$this->load->view('backend/reports/pdf',array('repo'=>$value));
	}
}


?>