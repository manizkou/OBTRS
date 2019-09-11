<div class="container-fluid" >
	<div class="row" >
		<div class="col-sm-12">
			<form role="form" class="ip-mod" action="http://dev.esewa.com.np/epay/main" method="POST">
				<div class="col-xs-9">
					<h3 class="col-sm-offset-1"><b>PASSENGER DETAILS</b></h3>
					<hr>
				</div>
				<!-- <div class="col-xs-3">
					<span id="timer" style="font-size: 28px;"></span>
					<span style="font-size: 14px; margin-top: 25px;">minutes left</span>
					<hr>
				</div> -->
				
				<div class="col-sm-5 col-sm-offset-1" style="">
					<div class="row">

						<div class="col-sm-12">

							<div class="row">

							<?php
								$explode=explode(',',$bookedseat);
								$first=$explode[0];
							?>	<span class="user col-sm-2" style="color:#fff;"><i class="fa fa-user fa-2x fauser" aria-hidden="true"></i></span>
								<h4 class="col-sm-6"><b>Primary Passenger</b></h4>
								<h4 class="col-sm-offset-0 col-sm-4"><b>Seat:<?php echo $first;?></b></h4>
							</div>
							<hr>

							<div class="col-sm-12">
								<div class="form-group">
									<label for="fName" class="control-label">Passenger Name</label>
									<input type="text" class="form-control" id="fName"	placeholder="" required>
								</div>
								<div class="form-group">
									<div class="row">
										<label class="col-xs-12">Gender :</label>
									</div>
									
									<div class="row" style="padding-top: 10px;">
										<div class="col-sm-3 ">
											<input type="radio" name="gender" value="male" 
											class="" style="padding: 5px;" id="male">
											<label for="male" class="control-label">Male</label>
										</div>
										<div class="col-sm-3 ">
											<input type="radio"  name="gender" value="female"
											style="padding: 5px;"  class=""  id="female">
											<label for="female" class=" control-label">Female</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="age" class="control-label">Age</label>
									<input type="text" class="form-control" id="age" 
									placeholder="" required>
								</div>

							</div>	<!-- col-sm-12 info inside-->
						</div> <!-- col-sm-12 -->
					</div>	<!-- row -->

					<hr>
					<div class="row">

						<div class="col-sm-12">
						<?php
									for($i=1;$i<=$totalseat-1;$i++){
									$second=$explode[$i];
							?>
							
							<div class="row">
								<span class="user col-sm-2" style="color:#fff;"><i class="fa fa-user fa-2x fauser" aria-hidden="true"></i></span>
								<h4 class="col-sm-6"><b>Co-Passenger <?php echo $i; ?></b></h4>
								<h4 class="col-sm-offset-0 col-sm-2"><b>Seat:<?php echo $second;?></b></h4>
							</div>
							<hr>

							<div class="col-sm-12">

								<div class="form-group">
									<label for="coName<?php echo $second;?>" class="control-label">Co-Passenger Name</label>
									<input type="text" class="form-control" id="coName<?php echo $second;?>"	placeholder="" required name="coname<?php echo $second;?>">
								</div>
								<div class="form-group">
									<div class="row">
										<label class="col-xs-12">Gender :</label>
									</div>
									
									<div class="row" style="padding-top: 10px;">
										<div class="col-sm-3 ">
											<input type="radio" name="cogender<?php echo $second;?>" value="male" 
											class="" style="padding: 5px;" id="male<?php echo $second;?>">
											<label for="male" class="control-label">Male</label>
										</div>
										<div class="col-sm-3 ">
											<input type="radio"  name="cogender<?php echo $second;?>" value="female"
											style="padding: 5px;"  class=""  id="female<?php echo $second;?>">
											<label for="female" class=" control-label">Female</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="coage" class="control-label">Age</label>
									<input type="text" class="form-control" id="coage" 
									placeholder="" required name="coage<?php echo $second;?>">
								</div>

							</div>	<!-- col-sm-12 info inside-->
							<?php
								}
							?>
						</div> <!-- col-sm-12 -->	
					</div>	<!-- row -->
				</div> <!-- col-sm-5 col-sm-offset-1 -->

				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
							<span class="enve col-sm-2" style="color:fff;"><i class="fa fa-envelope-o fa-2x faenve" aria-hidden="true"  ></i></span>
								<h4 class="col-sm-10"><b>CONTACT DETAILS</b></h4>
							</div>
							<hr>

							<div class="col-sm-12">
								<div class="form-group">
									
									<label for="email-id" class="control-label">Email ID</label>
									<input type="text" class="form-control" id="email-id"	placeholder="" required name="email">
								</div>

								<div class="form-group">
								
									<label for="phone-num" class="control-label">Phone Number</label>
									<input type="text" class="form-control" id="phone-num" 
									placeholder="" required name="phnum">
								</div>
								<div class="form-group">
									<input value="<?php echo $totalprice; ?>" name="amt" type="hidden">
									<input value="0" name="txAmt" type="hidden">
									<input value="<?php echo $totalprice; ?>" name="tAmt" type="hidden">
									<input value="0" name="psc" type="hidden">
									<input value="0" name="pdc" type="hidden">
									<input value="nepsol" name="scd" type="hidden">
									<input value="PRD-01" name="pid" type="hidden">
									<input value="<?php echo base_url();?>home/search/?to=<?php echo $this->session->userdata('from'); ?>&from=<?php echo $this->session->userdata('to');?>&onwarddate=<?php echo $this->session->userdata('returndate');?>&returndate=<?php echo $this->session->userdata('onward');?>" type="hidden" name="su">
									<input value="<?php echo base_url();?>home" type="hidden" name="fu">
								</div>

								<div class="col-sm-12" style="margin: 10px 0px 10px 0px; ">
									<div class="row lbl">
										<div class="col-sm-12 ">
											<h3 style=""><b>Reserved Seat Details</b></h3>
											<hr>
											<?php
												foreach ($bus as $key) {
												
											?>
											<label><?php echo $key->bus_name;?></label>
											<?php
										}
										?>
											
											<span><label>(<?php echo $this->session->userdata('from');?></label></span>
											<span class="glyphicon glyphicon-arrow-right"></span>
											<span><label><?php echo $this->session->userdata('to');?></label></span>	
											<span><label>, <?php echo $this->session->userdata('onward');?>)</label></span>					
											<br>
											<span><label>Boarding Point: Buspark</label></span>
											<!-- <br> -->
											<span class="glyphicon glyphicon-arrow-right"></span>
											<span><label>Dropping Point: Manigram</label></span>
											<br>
											<label>Total Seats:<?php echo $totalseat; ?>(<?php echo $bookedseat; ?>)</label>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<!-- <br> -->											
											<label>Total Expense: Rs<?php echo $totalprice; ?></label>
											<br><br>
											<?php 
												if($this->session->userdata('returndate')==NULL){
											?>
											<button class="btn btn-default btn-lg pbtn radoff-btn" type="submit">PROCEED TO PAY</button>
											<?php
												}else{
												?>
												<button class="btn btn-default btn-lg pbtn radoff-btn" type="submit">Book Return Ticket</button>

													<!-- <a class="btn btn-default btn-lg pbtn radoff-btn" href="<?php echo base_url();?>home/returnsearch?from=<?php echo $this->session->userdata('to');?>&to=<?php echo $this->session->userdata('from'); ?>&onwarddate=<?php echo $this->session->userdata('onward');?>&returndate=<?php echo $this->session->userdata('returndate');?>"><i class="fa fa-fw fa-eye"></i>Book Return Ticket</a> -->
													<?php
												}
												?>

											<br>
											<br>
											
										</div>
			
									</div>
									
								</div>

							</div>	<!-- col-sm-12 info inside-->
						</div> <!-- col-sm-12 -->
					</div>	<!-- row -->
					
				</div>

			</form>
			
		</div>
	</div>
</div> <!-- container -fluid ends -->
<!-- <script>
				window.onload = function(){

  var second = 01;
  var minute = 05;
  
  setInterval(function(){
    document.getElementById("timer").innerHTML = minute + ":" + second;

    second--;

    if(second == 00){
      minute--;
      second = 60;
    }
    if(minute == 0 && second == 1){
      // document.getElementById("timer").innerHTML = "Timer Stopped";
      alert("Your session time has expired");
       window.location.href="<?php echo base_url(); ?>home/serch";

       //window.history.back();

    }
    if(minute <= -1) {
      document.getElementById("timer").innerHTML = " ";
    }
  }, 1000);
}

				</script> -->
