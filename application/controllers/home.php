<?php 
CLASS HOME extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('aftersearch_model');
		$this->load->model('userdetail');
		$this->load->model('passenger_model');
	}

	public function index(){
		if(isset($_COOKIE['membermail']) AND isset($_COOKIE['memberpass'])){
			$response=$this->userdetail->login($_COOKIE['membermail'],$_COOKIE['memberpass']);
			if($response==TRUE){
				$this->session->set_userdata('membermail',$_COOKIE['membermail']);
			}
			 $this->session->set_userdata('member_login',TRUE);
					  foreach ($response as $key) {
					  	 $this->session->set_userdata('membername',$key->name);
					  	 $this->session->set_userdata('memberage',$key->age);
					  	 $this->session->set_userdata('memberphone',$key->phone);
					  	 $this->session->set_userdata('membergender',$key->gender);

					  	 // setcookie('membername',$key->name);
					  	 // setcookie('memberage',$key->age);
					  	 // setcookie('membergender',$key->gender);
					  	 // setcookie('memberphone',$key->phone);
					  }
		}
		$from=$this->aftersearch_model->getfrom();
		$to=$this->aftersearch_model->getto();
		$this->load->view('header');
		$this->load->view('index',array('myfrom'=>$from,'myto'=>$to));
		$this->load->view('footer');
	}

	public function search(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('from','From','required|alpha|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('to','To','required|alpha|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('onwarddate','Onward Date','required|exact_length[10]');
		$this->form_validation->set_rules('returndate','Onward Date','exact_length[10]');
		$this->form_validation->set_error_delimiters('<p class="text-info">','</p>');		
		if($this->form_validation->run()){
			$to=$this->input->post('to');
			$from=$this->input->post('from');
			$on=$this->input->post('onwarddate');
			$onward=urldecode($on);
			$re=$this->input->post('returndate');
			$return=urldecode($re);
			$search=$this->aftersearch_model->aftersearch($from,$to,$onward,$return);
			$rfrom=$this->aftersearch_model->getfrom();
			$rto=$this->aftersearch_model->getto();

			//$avaiseat=$this->aftersearch_model->available($from,$onward,$to);
			if($search==TRUE){
				$this->load->library('session');
				$this->session->set_userdata('from',$from);
				$this->session->set_userdata('to',$to);
				$this->session->set_userdata('onward',$onward);
				$this->session->set_userdata('returndate',$return);
				$this->load->view('header');
				$pick=$this->aftersearch_model->getpickup($from,$to);
					foreach ($pick as $key) {
					$routeid=$key->route_id;
				}
				$getpickup=$this->aftersearch_model->finalpickup($routeid);
				$this->load->view('afterSearch',array('searchinfo'=>$search,'from'=>$from,'to'=>$to,'onward'=>$onward,'returndate'=>$return,'response'=>FALSE,'myfrom'=>$rfrom,'myto'=>$rto,'pickupinfo'=>$getpickup));
				$this->load->view('footer');
			
			}else{
				$this->session->set_flashdata('response',TRUE);
 				$this->session->set_flashdata('message','Oops! No tickets were found for this route.
					Please check the availability for another day.');
				redirect(base_url().'home');
			}
		}else{
			$this->index();
		}
		
	
}

	public function getdetails($id){
		$response=$this->aftersearch_model->getdetail($id);
		$pick=$this->aftersearch_model->getpickup($this->session->userdata('from'),$this->session->userdata('to'));
		if($response==TRUE){
			foreach ($pick as $key) {
				$routeid=$key->route_id;
			}
			$getpickup=$this->aftersearch_model->finalpickup($routeid);
			$getdrop=$this->aftersearch_model->finaldrop($routeid);
			$this->load->view('viewbusdetail',array('dynamicmodal'=>$response,'pickup'=>$getpickup,'drop'=>$getdrop));
			}
	}
	public function getreturndetails($id){
		$response=$this->aftersearch_model->getdetail($id);
		$pick=$this->aftersearch_model->getpickup($this->session->userdata('from'),$this->session->userdata('to'));
		if($response==TRUE){
			foreach ($pick as $key) {
				$routeid=$key->route_id;
			}
			$getpickup=$this->aftersearch_model->finalpickup($routeid);
			$getdrop=$this->aftersearch_model->finaldrop($routeid);
			$this->load->view('viewreturnbusdetail',array('dynamicmodal'=>$response,'pickup'=>$getpickup,'drop'=>$getdrop));
			}
	}

	public function getmap($id){
		$response=$this->aftersearch_model->getmaps($id);
		if($response==TRUE){
			$this->load->view('viewmap',array('mymap'=>$response));
		}
	}
	public function remain($id){
		$response=$this->aftersearch_model->getreview($id);
		if($response==TRUE){
			$this->load->view('remain',array('mydata'=>$response,'busid'=>$id));
		}
	}

	public function serch(){
		$this->load->library('session');
		$search=$this->aftersearch_model->aftersearch($this->session->userdata('from'),$this->session->userdata('to'),$this->session->userdata('onward'),$this->session->userdata('returndate'));
			$this->load->view('header');
			$this->load->view('afterSearch',array('searchinfo'=>$search,'from'=>$this->session->userdata('from'),'to'=>$this->session->userdata('to'),'onward'=>$this->session->userdata('onward'),'returndate'=>$this->session->userdata('returndate')));
			$this->load->view('footer');
	}

	public function returnsearch(){
			$bookseat=$this->session->userdata('bookseat1');
			$tseat=$this->session->userdata('totalseat1');
			$busid=$this->session->userdata('busid1');
			$this->session->set_userdata('passemail',$this->input->post('email'));
			$exp=explode(',',$bookseat);
			for($i=0;$i<$tseat;$i++){
			$seat_part=$exp[$i];
			$temp_data=$this->passenger_model->tempinfo($seat_part,$busid);
			if($temp_data==TRUE){
			$this->session->set_flashdata('seatinfo',TRUE);
 			$this->session->set_flashdata('message','Someone Just booked '.$bookseat.' Busseat.Please wait or try some other seat');
			//redirect(base_url().'home','refresh');
			?>
			<form name='fr' action="<?php echo base_url();?>home/search" method='POST'>
				<input  type="hidden" name="from" value="<?php echo $this->session->userdata('from');?>">
				<input type="hidden" name="to" value="<?php echo $this->session->userdata('to');?>">
				<input type="hidden" name="onwarddate" value="<?php echo $this->session->userdata('onward');?>">
				<input type="hidden" name="returndate" value='<?php echo $this->session->userdata('returndate');?>'>
			</form>
					<script type='text/javascript'>
						document.fr.submit();
					</script>
<?php 
		}else{
			$insert_temp=$this->passenger_model->intemp($seat_part,$busid);
		}
	}
			$to=$this->session->userdata('from');
			$from=$this->session->userdata('to');
			$re=$this->session->userdata('returndate');
			$on=$this->session->userdata('onward');
			$this->session->set_userdata('passname1',$this->input->post('fname'));
			$this->session->set_userdata('passgender1',$this->input->post('gender'));
			$this->session->set_userdata('passage1',$this->input->post('age'));
			
			$this->session->set_userdata('passphone',$this->input->post('phnum'));
			for ($i=1; $i < $this->input->post('tseat') ; $i++) {
			$c=$i+1; 
			$this->session->set_userdata('passname'.$c,$this->input->post('coname'.$i));
			$this->session->set_userdata('passgender'.$c,$this->input->post('cogender'.$i));
			$this->session->set_userdata('passage'.$c,$this->input->post('coage'.$i));
			}
			$search=$this->aftersearch_model->returnsearch($from,$to,$re);
			if($search==TRUE){
				$this->load->view('header');
				$pick=$this->aftersearch_model->getpickup($to,$from);
					foreach ($pick as $key) {
					$routeid=$key->route_id;
				}
				$getpickup=$this->aftersearch_model->finaldrop($routeid);
				$this->load->view('returnsearch',array('searchinfo'=>$search,'from'=>$from,'to'=>$to,'onward'=>$re,'returndate'=>$on,'response'=>FALSE,'pickupinfo'=>$getpickup));//onward date is only used for showing in top
				$this->load->view('footer');
			}else{
				$this->session->set_flashdata('response',TRUE);
 				$this->session->set_flashdata('message','Oops! No tickets were found for your return date.Please check the availability for another day.');
				redirect(base_url().'payment_detail');
			}
		
	}

}
?>