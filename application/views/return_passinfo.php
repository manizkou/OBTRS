<div class="container-fluid" >
	<div class="row" >
		<div class="col-sm-12">
		<form role="form" class="ip-mod" action="<?php echo base_url();?>payment_detail" method="POST" id="passenger">
				<div class="col-xs-9">
					<h3 class="col-sm-offset-1"><b>PASSENGER DETAILS</b></h3>
					<hr>
				</div>
				<div class="col-xs-3" align="right" style="margin-top:10px;">
					<span id="timer" style="font-size: 28px;"></span>
					<span style="font-size: 14px; margin-top:10px;">minutes left</span>
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
											class="" style="padding: 5px;" id="male"  <?php if( $this->session->userdata('membergender')=='male'){
													echo "checked";
												}
												?>>
											<label for="male" class="control-label">Male</label>
										</div>
										<div class="col-sm-3 ">
											<input type="radio"  name="gender" value="female"
											style="padding: 5px;"  class=""  id="female"  <?php if($this->session->userdata('membergender')=='female'){
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
									<input type="hidden" class="form-control" id="age" 
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
									<input type="text" class="form-control" id="coname<?php echo $i;?>"	placeholder="" required name="coname<?php echo $i;?>">
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
								<h4 class="col-sm-10"><b>Your Details</b></h4>
							</div>
							<hr>

							<div class="col-sm-12">
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
											$this->session->set_userdata('returnbus',$key->bus_name);
										}
										?>
											
											<span><label>(<?php echo $this->session->userdata('to');?></label></span>
											<span class="glyphicon glyphicon-arrow-right"></span>
											<span><label><?php echo $this->session->userdata('from');?></label></span>	
											<span><label>, <?php echo $this->session->userdata('returndate');?>)</label></span>					
											<br>
											<span><label>Boarding Point:<?php echo $this->session->userdata('pickpoint2'); ?></label></span>
											<!-- <br> -->
											<br>
											<label>Total Seats:<?php echo $totalseat; ?>(<?php echo $bookedseat; ?>)</label>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<!-- <br> -->											
											<label>Total Expense: Rs<?php echo $totalprice; ?></label>
											<br><br>
											<button class="btn btn-default btn-lg pbtn radoff-btn" type="submit">PROCEED TO PAY</button>

													<!-- <a class="btn btn-default btn-lg pbtn radoff-btn" href="<?php echo base_url();?>home/returnsearch?from=<?php echo $this->session->userdata('to');?>&to=<?php echo $this->session->userdata('from'); ?>&onwarddate=<?php echo $this->session->userdata('onward');?>&returndate=<?php echo $this->session->userdata('returndate');?>"><i class="fa fa-fw fa-eye"></i>Book Return Ticket</a> -->
													

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
        				message: 'The passengername only contains alphabetical characters.'
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


</script>
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
