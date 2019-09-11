<?php
Class Payment_detail extends CI_Controller{
	public function __construct(){
	parent::__construct();
		$this->load->helper('form');
		if(!$this->session->userdata('from')){
			redirect(base_url().'home');
		}
		$this->load->model('passenger_model');
	}

	public function index(){
		if($this->session->userdata('returndate')==NULL){
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
		}else{
			$this->session->set_userdata('repassname1',$this->input->post('fname'));
			$this->session->set_userdata('repassgender1',$this->input->post('gender'));
			$this->session->set_userdata('repassage1',$this->input->post('age'));
				for ($i=1; $i < $this->input->post('tseat') ; $i++) {
				$c=$i+1; 
			$this->session->set_userdata('repassname'.$c,$this->input->post('coname'.$i));
			$this->session->set_userdata('repassgender'.$c,$this->input->post('cogender'.$i));
			$this->session->set_userdata('repassage'.$c,$this->input->post('coage'.$i));
			}
		}
				$this->load->view('header');
				$this->load->view('payment');//onward date is only used for showing in top
				$this->load->view('footer');
	}
}

?>