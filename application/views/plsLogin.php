<div class="container-fluid" >
	<div class="row" >
		<div class="col-sm-12">
		<?php 
			if($this->session->userdata('returndate')!=Null){
		?>
			<form role="form" class="ip-mod" action="<?php echo base_url();?>home/returnsearch" method="POST" id="passenger">
			<?php 

		}else{
		?>
		<form role="form" class="ip-mod" action="<?php echo base_url();?>payment_detail" method="POST" id="passenger">
		<?php
			}
		?>
				<div class="col-xs-12">
					<h3 class="col-sm-offset-1"><b>PASSENGER DETAILS</b></h3>
					<hr>
				</div>
				
				
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
									<input type="text" class="form-control" id="fName"	placeholder="" required name="fname" value="<?php echo $this->session->userdata('membername');?>">
								</div>
								<div class="form-group">
									<div class="row">
										<label class="col-xs-12">Gender :</label>
									</div>
									
									<div class="row" style="padding-top: 10px;">
										<div class="col-sm-3 ">
											<input type="radio" name="gender" value="male" 
											class="" style="padding: 5px;" id="male" <?php if( $this->session->userdata('membergender')=='male'){
													echo "checked";
												}
												?>>
											<label for="male" class="control-label">Male</label>
										</div>
										<div class="col-sm-3 ">
											<input type="radio"  name="gender" value="female"
											style="padding: 5px;"  class=""  id="female" <?php if($this->session->userdata('membergender')=='female'){
													echo "checked";
												}
												?>>
											<label for="female" class=" control-label">Female</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="age" class="control-label">Age</label>
									<input type="text" class="form-control" id="age" 
									placeholder="" required name="age" maxlength="2" value="<?php echo $this->session->userdata('memberage');?>">
								</div>
								<div class="form-group">
									<input type="hidden" class="form-control" 
									placeholder="" required value="<?php echo $totalseat; ?>" name="tseat">
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
								
									<label for="coName<?php echo $i;?>" class="control-label">Co-Passenger Name</label>
									<input type="text" class="form-control co-name" id="coname<?php echo $i;?>"	placeholder="" required name="coname<?php echo $i;?>">
								
								</div>
								<div class="form-group">
									<div class="row">
										<label class="col-xs-12">Gender :</label>
									</div>
									
									<div class="row" style="padding-top: 10px;">
										<div class="col-sm-3 ">
											<input type="radio" name="cogender<?php echo $i;?>" value="male" 
											class="" style="padding: 5px;" id="male<?php echo $i;?>">
											<label for="male" class="control-label">Male</label>
										</div>
										<div class="col-sm-3 ">
											<input type="radio"  name="cogender<?php echo $i;?>" value="female"
											style="padding: 5px;"  class=""  id="female<?php echo $i;?>">
											<label for="female<?php echo $i;?>" class=" control-label">Female</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="coage<?php echo $i;?>" class="control-label">Age</label>
									<input type="text" class="form-control" id="coage<?php echo $i;?>" 
									placeholder="" required name="coage<?php echo $i;?>" maxlength="2">
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
									<input type="text" class="form-control" id="email-id"	placeholder="" required name="email" value="<?php echo $this->session->userdata('membermail');?>">
								</div>

								<div class="form-group">
								
									<label for="phone-num" class="control-label">Phone Number</label>
									<input type="text" class="form-control" id="phone-num" 
									placeholder="" required name="phnum" maxlength="10" value="<?php echo $this->session->userdata('memberphone');?>">
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
											$this->session->set_userdata('onwardbus',$key->bus_name);
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
<style type="text/css">
										#success_message{ display: none;}
									</style>
									<script type="text/javascript">
										$(document).ready(function() {
											$('#passenger').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        
        feedbackIcons: {
        	valid: 'glyphicon glyphicon-ok',
        	invalid: 'glyphicon glyphicon-remove',
        	validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	fname: {
        		validators: {
        			stringLength: {
        				min: 5,
        			},
        			regexp: {
        				regexp: /^[a-zA-Z ]+$/,
        				message: 'The passenger name only contains alphabetical characters.'
        			},

        			notEmpty: {
        				message: 'Please supply your passenger name'
        			}
        		}
        	},
        	coname1: {
        		
        		validators: {
        			 stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The full name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'The full name can only consist of alphabetical and spaces'
                    }

        			
        		}
        	},
        	coname2: {
        		
        		validators: {
        			 stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The full name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'The full name can only consist of alphabetical and spaces'
                    }

        			
        		}
        	},
        	coname3: {
        		
        		validators: {
        			 stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The full name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'The full name can only consist of alphabetical and spaces'
                    }

        			
        		}
        	},

        	email: {
        		validators: {
        			notEmpty: {
        				message: 'Please supply your email address'
        			},
        			emailAddress: {
        				message: 'Please supply a valid email address'
        			}
        		}
        	},
        	phnum: {
        		validators: {
        			notEmpty: {
        				message: 'Please supply your phone number'
        			},
        			phone: {
        				country: 'Nepal',
        				message: 'Please supply a vaild phone number'
        			}
        		}
        	},
        	age: {
        		validators: {
        			
                    between: {
                        min: 18,
                        max: 90,
                        message: 'The age must be between 18 and 90'
                    },
        			notEmpty: {
        				message: 'Please supply your age'
        			}
        		}
        	},
        		coage1: {
        		validators: {
        			
                    between: {
                        min: 18,
                        max: 90,
                        message: 'The age must be between 18 and 90'
                    },
        			notEmpty: {
        				message: 'Please supply your age'
        			}
        		}
        	}, 
        		coage2: {
        		validators: {
        			
                    between: {
                        min: 18,
                        max: 90,
                        message: 'The age must be between 18 and 90'
                    },
        			notEmpty: {
        				message: 'Please supply your age'
        			}
        		}
        	}, 
        		coage3: {
        		validators: {
        			
                    between: {
                        min: 18,
                        max: 90,
                        message: 'The age must be between 18 and 90'
                    },
        			notEmpty: {
        				message: 'Please supply your age'
        			}
        		}
        	}, 

         }
    })

.on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#passenger').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
                    // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
            	console.log(result);
            }, 'json');
        });
});


</script><!--  modal body -->