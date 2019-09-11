<html>
<head>
	<title>Online Bus Ticket Reservation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

	<!-- jquery must be above javascript -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery-3.1.1.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	
	<!-- jquery-ui -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.js"></script>


	<!-- custom css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/myCss/index.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/myCss/seat.css">
	<!-- jquery select option begins -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexselect.css" type="text/css" media="screen" />
    <script src="<?php echo base_url();?>assets/js/liquidmetal.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.flexselect.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrapvalidator.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("select.special-flexselect").flexselect({ hideDropdownOnEmptyInput: true });
        $("select.flexselect").flexselect();
        $("input:text:enabled:first").focus();
      });
    </script>

	

</head>
<body>
	<nav class="navbar navbar-default fnavbar" role="navigation" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle ntoggle1" data-toggle="collapse" 
				data-target="#collapse1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar" ></span>
					<span class="icon-bar" ></span>
					<span class="icon-bar" ></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url();?>home">Book&Go</a>
			</div>

			<div class="collapse navbar-collapse" id="collapse1">
				<ul class="nav navbar-nav">
					<li class=""><a href="<?php echo base_url();?>home">Bus Ticket</a></li>
					<li><a href="#">Contact US</a></li>   
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url();?>print_ticket"> Print/SMS Ticket</a></li>
					<li><a href="<?php echo base_url();?>cancellation">Cancellation/Refund</a></li>
					<?php
							if(!$this->session->userdata('member_login')){
						?>
					<li>
						<a data-toggle="modal" href="#signUp" id="mymodal"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
						
					</li>
					
					<li>
						<a data-toggle="modal" href="#logIn"><span class="glyphicon glyphicon-log-in"></span> Login</a>
						
						</li>
						<?php
							}else{
								?>
								<li class="dropdown">
					                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
					                        <i class="fa fa-user fa-fw"></i>Welcome <?php echo $this->session->userdata('membername');?>&nbsp;<i class="fa fa-caret-down"></i>
					                    </a>
					                    <ul class="dropdown-menu" role="menu" style=" background-color:#2fb682;" >
					                     <li><a href="<?php echo base_url();?>mytrip"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;My Trips</a>
					                        </li>
					                        <li class="divider"></li>
					                        <li><a href="<?php echo base_url();?>userdetails/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					                        </li>
					                    </ul>                    
              				  </li><!-- /.dropdown-user -->
								<?php 

							}
							?>
					</ul>
									
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->

		</nav>	<!--  navbar-default ends -->
		<style type="text/css">
   
   .dropdown-menu > li > a:hover{
   	 background-color: transparent !important;
   }
    nav > ul >li > a:hover{
        background-color: transparent;
    }
    nav > ul >li > a:focus{
        background-color: transparent !important;
    }
    a.dropdown-toggle:hover{
        background-color: transparent !important;
    }
    a.dropdown-toggle:focus{
        background-color: transparent !important;
    }


</style>
		<!-- bootstrap signup and login modal -->
		<div class="modal fade" id="signUp" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"> Sign Up</h4>
									</div>		
									<div class="modal-body">
										<form class="form-horizontal" role="form" action="<?php echo base_url('userdetails/signup');?>" method="POST" id="signupform">
											<div class="form-group">
												<label for="fName" class="col-sm-3 control-label">Name</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="Name" 
													placeholder="First Name" name="name" required>
												</div>
											</div>

											

											<div class="form-group">
												<label for="age" class="col-sm-3 control-label">Age</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="age" 
													placeholder="Age" name="age" required maxlength="2">
												</div>
											</div>

											<div class="form-group">
												<label for="age" class="col-sm-3 control-label">Address</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="address" 
													placeholder="Address" name="address" required>
												</div>
											</div>

											<div class="form-group">
												<label for="phone_num" class="col-sm-3 control-label">Phone Number</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="phone_num" 
													placeholder="Phone Number" name="phone" required maxlength="10">
												</div>
											</div>

											<div class="form-group">
												<label for="" class="col-sm-3 control-label">Gender</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-4" align="left">
															<input type="radio" name="gender" value="male" 
															class="" id="male" required>
															<label for="male" class=" ">Male</label>	
														</div>
														<div class="col-sm-4" align="left">
															<input type="radio" id="female" name="gender" value="female" class="" required>
															<label for="female" class=" ">Female</label>
														</div>
													</div>

												</div>
											</div>

											<div class="form-group">
												<label for="email" class="col-sm-3 control-label">Email</label>
												<div class="col-sm-9">
													<input type="email" class="form-control" id="email" 
													placeholder="Email" name="email" required>
												</div>
											</div>

											<div class="form-group">
												<label for="pwd" class="col-sm-3 control-label">Password</label>
												<div class="col-sm-9"> 
													<input type="password" class="form-control" name="password" id="pwd" placeholder="Password" required>
												</div>
											</div>
											<div class="form-group ">
												<label for="email" class="col-sm-3 control-label">Confirm Password
												</label>
												<div class="col-sm-9"> 
													<input type="password" class="form-control" name="confirm_password" id="con-pwd" placeholder="Confirm Password" required>
												</div>
											</div>
											<div class="form-group"> 
											
												<div class="col-sm-12">
													<div id="signupmsg"></div>
												</div>
											</div>
											
											<div class="form-group"> 
											<div class="col-sm-3"></div>
												<div class="col-sm-9">
													<button type="submit" class="btn btn-primary busSearch radoff-btn btn-md">
														Sign Up
													</button>
												</div>
											</div>
										</form>
									</div><!--  modal body -->								
								</div> <!-- modal content -->
							</div>	<!-- modal dialog -->
						</div> <!-- modal sign up -->
						<div class="modal fade" id="logIn" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"> Log In</h4>
									</div>		
									<div class="modal-body">
									
										<form class="form-horizontal" action="<?php echo base_url('userdetails/login');?>" method="POST" id="loginform">
											
											<div class="form-group">
												<label for="email" class="col-sm-3 control-label">Email</label>
												<div class="col-sm-9">
													<input type="email" class="form-control" id="email" name="email" 
													placeholder="Email" required>
												</div>
											</div>
											<div class="form-group">
												<label for="pwd" class="col-sm-3 control-label">Password</label>
												<div class="col-sm-9"> 
													<input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
												</div>
											</div>
											
											<div class="form-group"> 
											<div class="col-sm-3"></div>
												<div class="col-sm-9">
													<div class="checkbox">
														<label><input type="checkbox" name="remember"> Remember me</label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-3"></div>
												<div class="col-md-9">
													<div id="mess"></div>
												</div>
											</div>
											<div class="form-group">
											<div class="col-sm-3"></div> 
												<div class=" col-md-9">
													<button type="submit" class="btn btn-primary busSearch radoff-btn btn-md ogin">
														Log In</button>
													</div>
												</div>
											</form>
										</div>								
									</div>
								</div>
							</div> <!-- modal log in-->

<script type="text/javascript">
    var frm = $('#loginform');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                if(data=="success"){
                 $('#mess').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>'+'Sucessfull Login'+'</div>');
                  $(location).attr('href', "<?php echo base_url(); ?>home");
               }else{
               		 $('#mess').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>'+'E-mail or Password donot match'+'</div>');
               }
            },
            error: function (data) {
                console.log('An error occurred.');
                 $('#mess').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>'+'Error'+'</div>');
               // console.log(data);
            },
        });
    });
</script>
<script type="text/javascript">
    var sfrm = $('#signupform');

    sfrm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: sfrm.attr('method'),
            url: sfrm.attr('action'),
            data: sfrm.serialize(),
            success: function (data) {
                if(data=="success"){
                 $('#signupmsg').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>'+'Success SignUp.Please Login to Continue'+'</div>');
                  $(location).attr('href', "<?php echo base_url(); ?>home");
                 
               }else{
               		var obj = $.parseJSON(data);

                                                  
                               // $('#signupmsg').html(obj['age']);
                               $('#signupmsg').append('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>'+obj['email']+'<br>'+obj['phone']+'<br>'+obj['confirm_password']+obj['age']+'</div>');
                                //$('#signupmsg').append(obj['email']);
                                //$('#signupmsg').append(obj['phone']);
                               // $('#signupmsg').append(obj['confirm_password']);
                                //$('#signupmsg').append(obj['name']);
   
               }
            },
            error: function (data) {
                console.log('An error occurred.');
                 $('#mess').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>'+'Error'+'</div>');
               // console.log(data);
            },
        });
    });
</script>