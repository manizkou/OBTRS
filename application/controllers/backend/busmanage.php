<?php
class Busmanage extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/busmanage_model');
		$this->load->helper('form');
	}

	
	//adding a bus type from ADD BUS TYPE begins
	public function bustype(){
		$tablebustype=$this->busmanage_model->bustypetable();
		$this->load->view('backend/header');
		$this->load->view('backend/busmanage/bustype',array('response'=>FALSE,'viewbus'=>$tablebustype,'upresponse'=>FALSE,'delinfo'=>FALSE));
		$this->load->view('backend/footer');
	}

	public function insertbustype(){
		$type=$this->input->post('bustype');
		$response=$this->busmanage_model->inserttype($type);
		$tablebustype=$this->busmanage_model->bustypetable();
 	if($response==TRUE){
 		$this->session->set_flashdata('response',TRUE);
 		$this->session->set_flashdata('message','Successfully Inserted');
		redirect(base_url().'backend/Busmanage/bustype');

        }else{
        $this->session->set_flashdata('response',TRUE);
 		$this->session->set_flashdata('message','Something Is Missing!');
		redirect(base_url().'backend/Busmanage/bustype');
        }



	}	
	 public function updatebustype($id){
	 	$bustype=$this->input->post('updatebustype');
	 	$upresponse=$this->busmanage_model->updatetype($id,$bustype);
	 	if($upresponse==TRUE){
	 		$this->session->set_flashdata('upresponse',TRUE);
			$this->session->set_flashdata('message','Successfully Updated');
			redirect(base_url().'backend/Busmanage/bustype');
	 		
        }else{
        	$this->session->set_flashdata('upresponse',TRUE);
			$this->session->set_flashdata('message','Cannot Update');
			redirect(base_url().'backend/Busmanage/bustype');
        }
	 }

	 public function deletebustype($id){
	 	$delinfo=$this->busmanage_model->typedelete($id);
	 	if($delinfo==TRUE){
			$this->session->set_flashdata('delinfo',TRUE);
			$this->session->set_flashdata('message','Successfully Deleted');
			redirect(base_url().'backend/Busmanage/bustype');
        }else{
        	$tablebustype=$this->busmanage_model->bustypetable();
        	$this->session->set_flashdata('delinfo',TRUE);
 			$this->session->set_flashdata('message','Something Is Missing!');
			redirect(base_url().'backend/Busmanage/bustype');
        }

	 	}

	 	//adding a new bus name begins
	 	public function addbus(){
	 		$fetchinfo=$this->busmanage_model->bustypetable();
	 		$route=$this->busmanage_model->getroute();
	 		$owner=$this->busmanage_model->getowner();
	 		$this->load->view('backend/header');
	 		$this->load->view('backend/busmanage/addbus',array('fetchtype'=>$fetchinfo,'response'=>FALSE,'route'=>$route,'ownermail'=>$owner));
	 		$this->load->view('backend/footer');
	 	}

	 	public function insertnewbus(){
	 		$this->load->library('form_validation');
		$this->form_validation->set_rules('busname','BUS Name','required|min_length[4]');
		$this->form_validation->set_rules('regnum','Bus Registraion Number','required|is_unique[add_bus.reg_name]|trim');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if($this->form_validation->run()){
	 		$name=$this->input->post('busname');
	 		$routeid=$this->input->post('route');
	 		$reg=$this->input->post('regnum');
	 		$btype=$this->input->post('btype');
	 		$bustype=implode(',',$btype);
	 		$maxseat=$this->input->post('maxseat');
	 		$stime=$this->input->post('stime');
	 		$etime=$this->input->post('etime');
	 		$desc=$this->input->post('description');
	 		$amenities=$this->input->post('amenities');
	 		$type_price=$this->input->post('btype_price');
	 		$email=$this->input->post('email');

	 		$pal=implode(',', $amenities);
	 		$response=$this->busmanage_model->insertbusquery($routeid,$name,$reg,$bustype,$maxseat,$stime,$etime,$pal,$desc,$type_price,$email);
	 		if($response==TRUE){
	 		$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Successfully inserted');
			redirect(base_url().'backend/Busmanage/addbus');
        }else{
        	$this->session->set_flashdata('insertinfo',TRUE);
			$this->session->set_flashdata('message','Something is Missing!');
			redirect(base_url().'backend/Busmanage/addbus');
        }
    }else{
    	$this->session->set_flashdata('errors',TRUE);				
		$this->session->set_flashdata('message',validation_errors());
		redirect(base_url().'backend/Busmanage/addbus');
    }

	 	}


		public function viewbus(){
			$viewmodel=$this->busmanage_model->viewbus();
			$this->load->view('backend/header');
			$this->load->view('backend/busmanage/busses',array('view'=>$viewmodel,'updateinfo'=>FALSE));
			$this->load->view('backend/footer');
		}
		public function editbus($id){
			$info=$this->busmanage_model->editbuses($id);
			$fetchinfo=$this->busmanage_model->bustypetable();
			$route=$this->busmanage_model->getroute();
			$owner=$this->busmanage_model->getowner();
			$this->load->view('backend/header');
			$this->load->view('backend/busmanage/editbus',array('busupdate'=>$info,'response'=>FALSE,'fetchtype'=>$fetchinfo,'route'=>$route,'ownermail'=>$owner));
			$this->load->view('backend/footer');
		}

		public function updatebus($id){
			$name=$this->input->post('busname');
			$routeid=$this->input->post('route');
	 		$reg=$this->input->post('regnum');
	 		$btype=$this->input->post('btype');
	 		$bustype=implode(',',$btype);
	 		$maxseat=$this->input->post('maxseat');
	 		$stime=$this->input->post('stime');
	 		$etime=$this->input->post('etime');
	 		$desc=$this->input->post('description');
	 		$amenities=$this->input->post('amenities');
	 		$pal=implode(',', $amenities);
	 		$type_price=$this->input->post('btype_price');
	 		$email=$this->input->post('email');
	 		
	 		
	 		$response=$this->busmanage_model->updatebusquery($id,$routeid,$name,$reg,$bustype,$maxseat,$stime,$etime,$pal,$desc,$type_price,$email);
	 		if($response==TRUE){
	 			$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Updated');
				redirect(base_url().'backend/Busmanage/viewbus');
        	}else{
        		$this->session->set_flashdata('updateinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/Busmanage/viewbus');

	 		}

		}

		public function deletebus($id){
			$response=$this->busmanage_model->deletebus($id);
			if($response==TRUE){
	 			$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Successfully Deleted');
				redirect(base_url().'backend/Busmanage/viewbus');
        	}else{
        		$this->session->set_flashdata('deleteinfo',TRUE);
				$this->session->set_flashdata('message','Something is Missing!');
				redirect(base_url().'backend/Busmanage/viewbus');

	 		}

		}

}

?>