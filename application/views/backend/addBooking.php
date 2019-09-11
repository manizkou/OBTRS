<?php include 'header.php' ?>
<link href="css/select2.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<!-- <h1 class="page-header" align="center">Add Booking</h1> -->
		</div>
		<!-- /.col-lg-12 -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="alert alert-info alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
							<strong>Add New Booking</strong>
							Use the form below to add manually new booking. You need to fill in the required data in both tabs, Booking Details and Client Details. The system will calculate the payment data automatically.
						</div>
						<ul class="nav nav-tabs" style="text-align: left;">
							<li class="active"><a href="#first" data-toggle="tab" id="first_tab">Booking Details</a></li>
							<li><a href="#second" data-toggle="tab" id="second_tab">Client Details</a></li>

						</ul>
					</div>
					<div class="panel-body">
						<div class="tab-content">        
							<div id="first" class="tab-pane fade in active">
								

								<form class="">
									<div class="row">
									 	
									 	<div class="form-group col-md-6">
										<label for="example-search-input" class="col-form-label">From:</label>
										
											<select value="" class="form-control">
												<option value="">butwal</option>
												<option value="">bhairahawa</option>

											</select>
										</div>

										<div class="form-group col-md-6">
										<label for="example-email-input" class="col-form-label">To:</label>
										
											<select value="" class="form-control">
												<option value="">Kathmandu</option>
												<option value="">Naranghat</option>

											</select>
										
									 </div>	
										
									
									 
									</div>
									<div class="row">
									<div class="form-group col-md-6 ">
										
										<label for="example-text-input" class="">Date:</label>
										<input class="form-control" type="date" >
									 </div>	
									 
									
									    <div class="form-group col-md-6">
										    <label for="example-tel-input" class=" col-form-label">Bus:</label>
										
											<select value="" class="form-control">
												<option value="">AC</option>
												<option value="">Noram</option>

											</select>
										</div>
									</div>
									<div class="row">
									   <div class="form-group col-md-6">
										    <label for="return-ticket" class="col-form-label">Return-ticket</label>
										
											<input class="form-control" type="checkbox">
										
									   </div>
									   <div class="form-group col-md-6">
										   <label for="sub-total" class=" col-form-label">Subtotal:</label>
										
											<input class="form-control" type="text" >
										</div>
									</div>
									<div class="row">
									  <div class="form-group col-md-6">
										    <label for="tax" class="col-form-label">Tax:</label>
										
											<input class="form-control" type="text" >
										
									   </div>
									   <div class="form-group col-md-6">
										   <label for="tax" class=" col-form-label">Total:</label>
										
											<input class="form-control" type="text" >
										</div>
									</div>
									<div class="row">
									  <div class="form-group col-md-6">
										<label for="tax" class=" col-form-label">Deposite:</label>
										
											<input class="form-control" type="text" >
										
									   </div>
									  <div class="form-group col-md-6">
										<label for="tax" class=" col-form-label">Payment Method:</label>
										
											<select class="form-control">
												<option value="">-----choose----</option>
												<option value="">cash</option>
												<option value="">PayPal</option>
												<option value="E-sewa">E-sewa</option>
												<option value="">I-Pay</option>
												<option value="Banking">Banking</option>
											</select>
										</div>
									</div>
									<div class="row">
									   <div class="form-group col-md-6">
										    <label for="tax" class=" col-form-label">Status:</label>
										
											<select class="form-control">
												<option value="">-----choose----</option>
												<option value="">Confirmed</option>
												<option value="">Pending</option>
												<option value="">Cancled</option>

											</select>
										</div>
										<div class="col-md-6"></div>
										
									</div>
									<div class="form-group row">
										<div class="col-md-offset-1 col-md-2">
											<input type="submit" value="save" name="save" class="form-control btn btn-primary">
										</div>
										<div class="col-md-offset-1 col-md-2">
											<input type="reset" value="cancel" name="cancel" class="form-control btn btn-danger">
										</div>
									</div>
								</form>
							</div>   <!-- first -->

							<script type="text/javascript"> 
								$(document).ready(function()
									{ $("#first_tab").click(function () 
										{ $('#first').load('/subdirectory/#first'); 
									}); 
								}); </script>


								<!-- second tab begin -->
							<div id="second" class="tab-pane fade in ">
									
								
								<form>
									<div class="row">
										<div class="form-group col-md-6">

											<label for="example-search-input" class="col-form-label">Title:</label>
										
											<select value="" class="form-control">
												<option value="">Mr.</option>
												<option value="">Mrs.</option>

											</select>
										</div>
										<div class="col-md-6"></div>
									</div>
									<div class="row">
									  <div class="form-group col-md-6">
										    <label for="example-text-input" class="col-form-label">First Name:</label>
										
											<input class="form-control" type="text" placeholder="First Name" name="first" >
										
									   </div>
									  <div class="form-group col-md-6">
										<label for="example-email-input" class=" col-form-label">Last Name:</label>
									
										<input type="text" placeholder="last name" name="last" class="form-control">
									  </div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="example-tel-input" class=" col-form-label">Email:</label>
									
											<input type="email" placeholder="Email" name="email" class="form-control">
									
										</div>
										<div class="form-group col-md-6">
											<label for="phone" class=" col-form-label">Phone:</label>
									
											<input type="number" placeholder="contact number" name="number" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="company name" class="col-form-label">Company Name:</label>
									
											<input class="form-control" type="text" >
									
										</div>

										<div class="form-group col-md-6">
											<label for="tax" class=" col-form-label">Address:</label>
									
											<input class="form-control" type="text" >
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="tax" class=" col-form-label">City:</label>
										
											<input class="form-control" type="text" >
										
										</div>
										<div class="form-group col-md-6">
											<label for="tax" class=" col-form-label">State:</label>
										
											<input class="form-control" type="text" >
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="tax" class=" col-form-label">Country:</label>
									
											<input type="text" placeholder="country name" name="last" class="form-control">
									
										</div>
										<div class="col-md-6"></div>
									</div>

								<div class="form-group row">
									<div class="col-md-offset-1 col-md-2">
										<input type="submit" value="save" name="save" class="form-control btn btn-primary">
									</div>
									<div class="col-md-offset-1 col-md-2">
										<input type="reset" value="cancel" name="cancel" class="form-control btn btn-danger">
									</div>
								</div>
								</form>

								</div>   <!-- second tab route end -->

							</div>   <!-- tab-content -->
					
				</div>  <!-- panel-body -->

			</div> <!-- panel -->
		</div> <!-- col-md -->
	</div> <!-- row -->
</div> <!-- row -->
</div> <!-- page-wrapper -->


<?php include 'footer.php'; ?>
	<script src="js/select2.min.js"></script>
<script>
    $('select').select2();
    </script>
