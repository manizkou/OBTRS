<?php 
Class Gallerymanage extends CI_COntroller{
	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('username')){
			redirect(base_url().'backend/adminlogin');
		}
		$this->load->model('backend/gallery_model');
	}

	public function gallery(){
		$bus=$this->gallery_model->getbusname();
		$gallerytable=$this->gallery_model->listofgallery();
		$this->load->view('backend/header');
		$this->load->view('backend/gallery',array('busname'=>$bus,'gtable'=>$gallerytable));
		$this->load->view('backend/footer');
	}
	public function insert(){
		$busid=$this->input->post('busid');
		$imagename = $_FILES['image']['name'];
              $tmp = $_FILES['image']['tmp_name'];
              $par = 'assets/backend/gallery/'.$imagename;
              move_uploaded_file($tmp, $par);
        $response=$this->gallery_model->insertimage($busid,$imagename);
        if($response==TRUE){
 		$this->session->set_flashdata('response',TRUE);
 		$this->session->set_flashdata('message','Successfully Inserted');
		redirect(base_url().'backend/gallerymanage/gallery');

        }else{
        $this->session->set_flashdata('response',TRUE);
 		$this->session->set_flashdata('message','Something Is Missing!');
		redirect(base_url().'backend/gallerymanage/gallery');
        }

	}
	public function viewgallery($id){
		$view=$this->gallery_model->viewimage($id);

		$this->load->view('backend/header');
		$this->load->view('backend/viewgallery',array('viewimage'=>$view));
		$this->load->view('backend/footer');
	}

	public function deleteimage($gid,$id,$imagename){
		$path = "assets/backend/gallery/".$imagename;

		if(file_exists($path)){
			@unlink($path);
			
		}
		$del=$this->gallery_model->delimage($gid);
		if($del==TRUE){
			redirect(base_url().'backend/gallerymanage/viewgallery/'.$id);
			// $this->viewgallery($id);
		}
	}

}
?> 