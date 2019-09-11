<div class="container-fluid" >
	<div class="row " style="background:url(<?php echo base_url();?>assets/img/bus2.jpg) no-repeat fixed;">
		<?php
						if($this->session->flashdata('response')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible" id="success-alert">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times;</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
							}
						?>
		
			<div class="col-sm-10 col-sm-offset-1  box2">
			<div class="row heading">
			<div class="col-md-12 col-xm-12">
				<div class="col-md-6 " align="left"style="font-size:25px;"><b>View Your Booking Details</b></div>
				<div class="col-md-6" align="right">
				<span id="timer" style="font-size: 28px;"></span>
				<span style="font-size: 14px; margin-top: 25px;">minutes left</span>
				</div>
			</div>
				
			</div>
				<div class="panel-group pannel" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel  pannel ">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Onward seat detail
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
					      				<div class="col-sm-12 ">
											
											<label>Route</label><br>
											<div class="row">
												<div class="col-sm-6 ">
													<span><label><?php echo $this->session->userdata('from');?></label></span><br>
													<span><label><?php echo $this->session->userdata('onward');?></label></span>
													<span><label>,<?php echo $this->session->userdata('starttime1');?></label></span>
												</div>
											<span class="glyphicon glyphicon-arrow-right"></span>
											
												<div class="col-sm-6 col-xm-3" align="center"style="position:relative;top:-20px;">
													<span><label><?php echo $this->session->userdata('to');?></label></span><br>
													<span><label><?php echo $this->session->userdata('onward');?></label></span>
													<span><label>,<?php echo $this->session->userdata('endtime1');?></label></span>
												</div>
											</div>
											<span>
												<?php
													$date = date('m/d/Y h:i:s a', time());
													$sub=md5($date);
													$dsds=substr($sub,0,8);
													$ticketid1=strtoupper('TR'.$dsds);
													$this->session->set_userdata('ticketid1',$ticketid1);
												?>
											</span>
											<span><label>Boarding Point:<?php echo $this->session->userdata('pickpoint1');?></label></span><br>
											<span><label>Bus Name:<?php echo $this->session->userdata('onwardbus');?></label></span>
											<br>
											<label>Seat NO: <?php echo $this->session->userdata('bookseat1');?></label>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<!-- <br> -->											
											
										</div>
					      </div>
					    </div>
					  </div>
					  <?php 
					  		if($this->session->userdata('returndate')!=NULL){
					  ?>	
					  <hr>
					  <div class="panel pannel">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Return seat detail
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="panel-body">
					      			<div class="col-sm-12 ">
											
											<label>Route</label><br>
											<div class="row">
												<div class="col-sm-6">
													<span><label><?php echo $this->session->userdata('to');?></label></span><br>
													<span><label><?php echo $this->session->userdata('returndate');?></label></span>
													<span><label>,<?php echo $this->session->userdata('starttime2');?></label></span>
												</div>
											<span class="glyphicon glyphicon-arrow-right "></span>
											
												<div class="col-sm-6" align="center"style="position:relative;top:-20px;">
													<span><label><?php echo $this->session->userdata('from');?></label></span><br>
													<span><label><?php echo $this->session->userdata('returndate');?></label></span>
													<span><label>,<?php echo $this->session->userdata('endtime2');?></label></span>
												</div>
											</div>
											<!-- <span><label>Kathmandu </label></span>
											<span class="glyphicon glyphicon-arrow-right ar"></span>
											<span><label> Butwal</label></span><br>	
											<span><label>, 03/18/2017</label></span>
											<span><label>, 8:00PM</label></span>					
											<br> -->
											<span>
												<?php
													$date = date('Y/m/d h:i:s a', time());
													$sub=md5($date);
													$dsd=substr($sub,0,8);
													$ticketid2=strtoupper('RT'.$dsd);
													$this->session->set_userdata('ticketid2',$ticketid2);
												?>
											</span>
											<span><label>Boarding Point:<?php echo $this->session->userdata('pickpoint2');?></label></span><br>
											<span><label>Bus Name:<?php echo $this->session->userdata('returnbus');?></label></span>
											<br>
											<label>Selected Seats: <?php echo $this->session->userdata('bookseat2');?></label>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<!-- <br> -->											
											
										</div>
					      </div>
					    </div>
					  </div>
					  	<?php
					  		}
					  	?>
					  <hr>
					  <div class="panel pannel">
					    <div class="panel-heading" role="tab" id="headingThree" >
					      <h4 class="panel-title">
					        <a  role="button" data-toggle="collapse" >
					          Fare Details
					        </a>
					      </h4>
					    </div>

					      <div class="panel-body">
					      <div class="row">
					      <div class="col-md-6">
					      	<?php 
					      		$totalprice=($this->session->userdata('price1') + $this->session->userdata('price2'));
					      	?>
						      	<label>Onward Trip Fare: NRs <?php echo $this->session->userdata('price1');?></label><br>
						      	<?php 
					  		if($this->session->userdata('returndate')!=NULL){
					  			?>
						      	<label>Return Trip Fare:&nbsp; NRs <?php echo $this->session->userdata('price2');?></label><br>
						      	<?php
						      }
						      ?>
						      	<label>Total Trip Fare:&nbsp;&nbsp;&nbsp;&nbsp; NRs <?php echo $totalprice;?></label>
						    </div>
						    <div class="col-md-6">
						      <form role="form" class="ip-mod" action="http://dev.esewa.com.np/epay/main" method="POST">
	
						      		<input value="<?php echo $totalprice;?>" name="amt" type="hidden">
									<input value="0" name="txAmt" type="hidden">
									<input value="<?php echo $totalprice;?>" name="tAmt" type="hidden">
									<input value="0" name="psc" type="hidden">
									<input value="0" name="pdc" type="hidden">
									<input value="nepsol" name="scd" type="hidden">
									<input value="PRD-01" name="pid" type="hidden">
									<input value="<?php echo base_url();?>sucess" type="hidden" name="su">
									<input value="<?php echo base_url();?>failure" type="hidden" name="fu">					      			
									<button class="btn btn-primary btn-lg pbtn radoff-btn" id="clearlocal">PROCEED TO PAY</button>										
								</form>
							</div>
							</div>
					      </div>
					    
					  </div>
					</div>
			
			</div>		
	</div>

</div> <!-- container -fluid ends -->
				<script>
    window.onload = function(){

      var second = 01;
      var minute = 08;
      if(localStorage.getItem("counter")){
        if(localStorage.getItem("counter") >=59 ){
          var second = 01;
        }else{
          var second = localStorage.getItem("counter");
          var minute=localStorage.getItem("minute");
        }
      }else{
        var second = 01;
        var minute = 08;
      }
      document.getElementById("timer").innerHTML = minute + ":" + second;

      setInterval(function(){
        if(second == 00){
          localStorage.setItem("counter",00);
          minute--;
          localStorage.setItem("minute",minute);
          second = 59;

        }else{
          second--;
          localStorage.setItem("counter", second);
          localStorage.setItem("minute",minute);
        }
        // if(second == 00){
        //   minute--;
        //   second = 60;
        // }
        document.getElementById("timer").innerHTML = minute + ":" + second;
      //second--;




      if(minute == 0 && second == 0){
      // document.getElementById("timer").innerHTML = "Timer Stopped";
      alert("Your session time has expired");
      window.location.href="<?php echo base_url(); ?>contact";

       //window.history.back();

     }
     if(minute <= -1) {
      localStorage.setItem("counter",59);
      localStorage.setItem("minute",08);
    }
  }, 1000);
    }

  </script>

