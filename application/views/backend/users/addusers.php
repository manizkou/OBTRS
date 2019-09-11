	<?php include 'header.php' ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
	<style type="text/css">
		.table{
			margin-top: 20px;
		}
	</style>
	<div id="page-wrapper"  >
		<div class="row">
			<div class="col-lg-12">
				<!-- <h2 class="page-header" align="center">View all routes</h2> -->
			</div>
			<!-- /.col-lg-12 -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						
						<div class="panel-body">
							<div class="tab-content">        
								<div id="first" class="tab-pane fade in active">
									
									<h3 align="center">Add Users Details</h3><hr>
									
									
								<form>
									<div class="row">
									  <div class="form-group col-md-6">
										    <label for="username" class="col-form-label">Username Name:</label>
										
											<input class="form-control" type="text" placeholder="username Name" name="user"  required>
										
									   </div>
									  <div class="form-group col-md-6">
										<label for="password" class=" col-form-label">Password Name:</label>
									
										<input type="password" placeholder="password" name="password" class="form-control" required>
									  </div>
									</div>
									<div class="row">
									  <div class="form-group col-md-6">
										    <label for="example-text-input" class="col-form-label">First Name:</label>
										
											<input class="form-control" type="text" placeholder="First Name" name="first" required >
										
									   </div>
									  <div class="form-group col-md-6">
										<label for="example-email-input" class=" col-form-label">Last Name:</label>
									
										<input type="text" placeholder="last name" name="last" class="form-control" required>
									  </div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="example-tel-input" class=" col-form-label">Email:</label>
									
											<input type="email" placeholder="Email" name="email" class="form-control" required>
									
										</div>
										<div class="form-group col-md-6">
											<label for="phone" class=" col-form-label">Phone:</label>
									
											<input type="number" placeholder="contact number" name="number" class="form-control" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="company name" class="col-form-label">Company Name:</label>
									
											<input class="form-control" type="text"  required>
									
										</div>

										<div class="form-group col-md-6">
											<label for="tax" class=" col-form-label">Address:</label>
									
											<input class="form-control" type="text"  required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="tax" class=" col-form-label">City:</label>
										
											<input class="form-control" type="text" required >
										
										</div>
										<div class="form-group col-md-6">
											<label for="tax" class=" col-form-label">State:</label>
										
											<input class="form-control" type="text"  required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="tax" class=" col-form-label">Country:</label>
									
											<input type="text" placeholder="country name" name="last" class="form-control" required> 
									
										</div>
										<div class="col-md-6">
											<label for="image">Select Image</label>
											<input type="file" value="image" name="image" class="form-control" >
										</div>
									</div>

								<div class="form-group row">
									<div class="col-md-offset-1 col-md-2">
										<input type="submit" value="save" name="submit" class="form-control btn btn-primary">
									</div>
									<div class="col-md-offset-1 col-md-2">
										<input type="reset" value="cancel" name="cancel" class="form-control btn btn-danger">
									</div>
								</div>
								</form>
								</div>  
								
							</div>  <!-- panel-body -->
						</div> <!-- panel -->
					</div> <!-- col-md -->
				</div> <!-- row -->
			</div> <!-- row -->
		</div> <!-- page-wrapper -->
		<?php include "footer.php"; ?>

