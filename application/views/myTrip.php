<div class="container-fluid">

	<div class="row tab-container">
		<?php
						if($this->session->flashdata('response')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times;</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
							}
						?>	
		
			
		<div class="col-sm-12">
				
			<div class="tab">
					<button class="tablinks" onclick="openContent(event, 'myTrips')" id="defaultOpen">
						My Trips
					</button>
					<button class="tablinks" onclick="openContent(event, 'profile')">Profile</button>
					<button class="tablinks" onclick="openContent(event, 'changePassword')">Change Password
					</button>		
			</div> <!-- tab -->	
		</div><!-- col-sm-12 -->
			
		<div class="col-sm-12">
		
			<div id="myTrips" class="tabcontent">
			<?php
				$sn=1;
				foreach ($pass as $key):
			?>
			
				<div class="row content-myTrips">

					<a href="#tripDetail<?php echo $sn;?>" data-toggle="collapse">
					
						<div class="col-sm-12">

							<div class="row">
								<div class="col-sm-2 col-xs-4">
									<?php echo $key->from_place;?>
									<br>
									<span>
										<?php echo $key->stime;?>
									</span>
								</div>

								<div class="col-sm-2 col-xs-4">
									<span class="glyphicon glyphicon-arrow-right arw" ></span>
								</div>

								<div class="col-sm-2 col-xs-4">
									<?php echo $key->to_place;?>
									<br>
									<span>
										<?php echo $key->etime;?>
									</span>
								</div>

								<div class="col-sm-2 col-xs-4">
									<?php echo $key->depart_date;?>
									<br>
									<span>
										<?php echo $key->ticket_id;
										?>

									</span>
								</div>

								<div class="col-sm-2 col-xs-4">
									<?php echo $key->bus_name;?>
								</div>

								<div class="col-sm-2 col-xs-4">
									<div class="option-btn">
										<div class="dot-option">
											<div class="dots"></div>
											<div class="dots"></div>
											<div class="dots"></div>
										</div>
										<ul class="optionsList-dots">
											<li>
											<a href="<?php echo base_url();?>home" target="#blank"><i class="fa fa-book" aria-hidden="true" ></i>
											&nbsp;
											Book Again</a>
											</li>
											<?php
											$mail=$this->session->userdata('membermail');
											$sel=$this->db->query("SELECT * FROM rating WHERE busid='$key->bus_id' AND membermail='$mail'");
											if($sel->num_rows()==0){
											?>
											<li>
											<a href="<?php echo base_url();?>mytrip/rate?bid=<?php echo $key->bus_id;?>&tid=<?php echo $key->ticket_id;?>"><i class="fa fa-star-o" aria-hidden="true"></i>
											&nbsp;
											Rate and Review</a>
											</li>
											<?php
												}else{

												}
											?>
											<li>
											<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
											&nbsp;
											Email Ticket</a>
											</li>
											<li>
											<a href="<?php echo base_url();?>print_ticket/submit?ticket=<?php echo $key->ticket_id;?>&email=<?php echo $this->session->userdata('membermail');?>" target="#blank"><i class="fa fa-print" aria-hidden="true" ></i>
											&nbsp;
											Print Ticket</a>
											</li>
										</ul> <!-- list of options/dotted option -->
									</div><!--  option button and list -->
								</div> <!-- col-sm-12 with option button --> 
								</div> <!-- row -->
								
								</div> <!-- col-sm-12 acts for toggling content-->

							</a>
							
							<div class="col-sm-12">
								<div id="tripDetail<?php echo $sn;?>" class="collapse">
									<div class="row content-collapsed ">

										<div class="col-sm-12">
											<h4>TRIP DETAILS</h4>
											<hr>	
										</div>

										<div class="col-sm-4 ">
										<i class="fa fa-bus fa-lg" aria-hidden="true"></i>
										<?php echo $key->bus_name;?>
										<br>
										<span class="spaceSpan">
											<?php echo $key->btype;?>
										</span>
										</div>
										<?php
										$time = "$key->start_time";
										$time2 = "$key->stime";

										$startstamp = strtotime($time." +".$time2);
										$startTime = date("h:i a", $startstamp);
										?>
										<?php
										$time = "$key->end_time";
										$time2 = "$key->etime";

										$endstamp = strtotime($time." -".$time2);
										$endTime = date("h:i a", $endstamp);
										?>

										<div class="col-sm-4 ">
											<?php echo $key->stime;?>-<?php echo $key->etime;?>
											<br>
											<span>
												
												Duration 
												<?php 
												$e=strtotime($key->stime);
												$s=strtotime($key->etime);
												$hours=($s-$e)/3600;
												echo floor($hours) . ':' . ( ($hours-floor($hours)) * 60 ); 
												?> Hrs
											</span>
										</div>

										<div class="col-sm-4 ">
											<i class="fa fa-location-arrow fa-lg" aria-hidden="true"></i>
											<?php echo $key->pickup;?>
											<br>
											<span class="spaceSpan">
												Boarding Point
											</span>
										</div>

										<br>

										<div class="col-sm-12">
										<br>
											<h4>TRAVELERS DETAILS</h4>
											<hr>	
										</div>
										<?php foreach ($allpass as $value): 
											if($value->ticket_id==$key->ticket_id){
										?>
										<div class="row">
										<div class="col-sm-4 ">
										<span><img src="<?php echo base_url();?>/assets/img/user.png"></span>
										<?php echo $value->pname;?>
										<br>
										<span class="spaceSpan">
											<?php echo $value->pgender;?> Age:<?php echo $key->page;?>
										</span>
										</div>


										<div class="col-sm-4 ">
											<span class="busSeat"><img src="<?php echo base_url();?>/assets/img/trueseat.png"></span>
											&nbsp;<?php echo $value->seat;?>
										</div>

										<div class="col-sm-4 ">
											Booking
										</div>
										</div>
											<?php 
												}
											endforeach;?>
										<br>


										<div class="col-sm-12">
											<h4>PAYEMENT DETAILS</h4>
											<hr>	
										</div>
										<div class="col-sm-4 ">
											<i class="fa fa-credit-card fa-lg" aria-hidden="true"></i>
											Payement Mode
											<br>
											&nbsp;
											<span class="spaceSpan">esewa</span>
										</div>
										<div class="col-sm-4 ">
										Fare Break Up
										<br>
										<span>
											Base Fare Rs.<?php echo $key->amount;?>
										</span>
										</div>

										<div class="col-sm-4 ">
											<h4>TOTAL AMOUNT RS.<?php echo $key->amount;?></h4>										
										</div>
										 
							</div>	<!-- row content collapsed -->		
						</div><!-- tripdetail1 -->
					</div><!-- col-sm-12 collaspsed content -->
				</div> <!-- row inside myTrips -->
				<?php
				$sn++; 
				endforeach; ?>
			</div><!-- myTrips -->
			

			<div id="profile" class="tabcontent">
				<div class="row contentProfile">
					<div class="col-sm-12">
						<h4 style="display: inline;">MY PROFILE</h4>
						
						<a href="#editProfile" data-toggle="collapse" style="font-size:x-small; margin-left: 10px;">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							Edit Profile							
						</a>

						<hr>
					</div>	
					<?php 
					$memmail=$this->session->userdata('membermail');
					$select=$this->db->query("SELECT * FROM signup WHERE email='$memmail'");
					$sel=$select->result();
					foreach ($sel as $info):
					?>
					<div class="col-sm-12">
					
						<p>Name:
						<?php echo $info->name;?>
						</p>
						<p>Age:
						<?php echo $info->age;?>
						</p>
						<p>Gender:
						<?php echo $info->gender;?>
						</p>
					</div>

					<div class="col-sm-12">
						<h4>CONTACT DETAILS</h4>
						<hr>
					</div>		
					<div class="col-sm-12">
						<p>Mail 
						
						:
						<?php echo $this->session->userdata('membermail');?>
						</p>
						<p>Mobile No.
						:
						<?php echo $info->phone;?>
						</p>
					</div>
				<?php endforeach; ?>
					<div class="col-sm-6 collapse" id="editProfile">
						<h4>Edit Profile</h4>
						<hr>
						<form action="<?php echo base_url();?>mytrip/editprofile" method="POST">
						  <div class="form-group">
						    <label for="text">Name:</label>
						    <input type="text" class="form-control" id="text" value="<?php echo $this->session->userdata('membername');?>" name="name" required>
						  </div>
						  <div class="form-group">
						    <label for="date">Age:</label>
						    <input type="text" class="form-control" id="dob" value="<?php echo $this->session->userdata('memberage');?>" name="age" required>
						  </div>
						  <div class="radio">
						    <label><input type="radio" name="sex" value="male" required>Male</label>
						    <label><input type="radio" name="sex" value="female" required>Female</label>
						  </div>
						  <div class="form-group">
						    <label for="phone">Phone:</label>
						     <input type="text" class="form-control" id="phone"  value="<?php echo $this->session->userdata('memberphone');?>" name="phone" required>
						  </div>
						  <button type="submit" class="btn btn-danger">Submit</button>
						</form>
					</div><!--  editProfile -->
					<div class="col-sm-6"></div><!-- empty col-sm-6 -->
				</div> <!-- row -->		
			</div> <!-- profile -->

			<div id="changePassword" class="tabcontent">
				<div class="row contentChangePassword">
					<div class="col-sm-6">
						<form>
						  <div class="form-group fa-lg">
						  	<div class="row">
						  		<div class="col-xs-1">
						  			 <i class="fa fa-lock" aria-hidden="true"></i>
						  		</div>
						  		<div class="col-xs-11">
						  			<input type="password" class="form-control"  placeholder="Old Password" 
						  			name="oldPassword">
						  		</div>
						  	</div>	
						  </div>
							
						  <div class="form-group fa-lg">
						  	<div class="row">
						  		<div class="col-xs-1">
						  			 <i class="fa fa-lock" aria-hidden="true"></i>
						  		</div>
						  		<div class="col-xs-11">
						  			<input type="password" class="form-control"  placeholder="New Password" 
						  			name="oldPassword">
						  		</div>
						  	</div>	  
						  </div>
						  
						  <div class="form-group fa-lg">
						  	<div class="row">
						  		<div class="col-xs-1">
						  			 <i class="fa fa-lock" aria-hidden="true"></i>
						  		</div>
						  		<div class="col-xs-11">
						  			<input type="password" class="form-control"  placeholder=" Confirm Old Password" 
						  			name="confirmNewPassword">
						  		</div>
						  	</div>	  
						  </div>	

							 
						 <div class="row">
						 	
						 	<div class="col-xs-10 col-xs-offset-1">
						 		<button type="submit" class="btn btn-danger">Submit</button>	
						 	</div>
						 	
						 </div> 
						</form>
					</div>
					<div class="col-sm-6"></div> <!-- empty col-sm-6 -->
				</div>
			</div><!--  changePassword -->
		</div> <!-- col-sm-12 -->

		</div><!-- row -->
</div><!-- cpontainer-fluid -->

<script type="text/javascript">
	// script for tabs below
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();

	function openContent(evt, contentName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    	tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    	tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(contentName).style.display = "block";
    evt.currentTarget.className += " active";
}
	// script for tabs end

	//scripts for myTrips below


	//scripst for myTrips end
</script>

