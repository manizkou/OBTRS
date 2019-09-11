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
										
										<h3 align="center">Add Settings</h3><hr>
										
										<form>
											<div class="row">
												<div class="form-group col-md-6">
													<label for="Title" class=" col-form-label">Title:</label>

													<input type="text" placeholder="Online Bus Reservation System" name="Title" class="form-control">

												</div>
												<div class="col-md-6"></div>
											</div>
											<div class="row">
												<div class="form-group col-md-6">
													<label for="Sms Username" class="col-form-label">Sms Username:</label>

													<input class="form-control" type="text" placeholder="Sms Username" name="Sms Username" >

												</div>
												<div class="form-group col-md-6">
													<label for="Sms Password" class=" col-form-label">Sms password:</label>

													<input type="text" placeholder="Route" name="Sms pass" class="form-control">
												</div>
											</div>
											<div class="row">
												<div class="form-group col-md-6">
													<label for="Smtp username" class=" col-form-label">Smtp username:</label>

													<input type="text" placeholder="Smtp user name" name="nbp" class="form-control">

												</div>
												<div class="form-group col-md-6">
													<label for="Smtp password" class=" col-form-label">Smtp password:</label>

													<input type="text" placeholder="Smtp password" name="start_time" class="form-control">
												</div>
											</div>
											<div class="row">
												<div class="form-group col-md-6">
													<label for="Smtp host" class=" col-form-label">Smtp host:</label>

													<input type="text" placeholder="Smtp hostSender Idbp" class="form-control">

												</div>
												<div class="form-group col-md-6">
													<label for="Sender Id" class=" col-form-label">Sender Id:</label>

													<input type="text" placeholder="Sender Id" name="start_time" class="form-control">
												</div>
											</div>
											<div class="row">
												<div class="form-group col-md-6">
													<label for="logo" class="col-form-label">Logo:</label>

													<input type="file" name="logo" class="form-control">

												</div>
												<div class="form-group col-md-6">
													<label for="Fav Icon" class=" col-form-label">Fav Icon:</label>

													<input type="file" placeholder="" name="favicon" class="form-control">
												</div>
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

									</div>  
									
								</div>  <!-- panel-body -->
							</div> <!-- panel -->
						</div> <!-- col-md -->
					</div> <!-- row -->
				</div> <!-- row -->
			</div> <!-- page-wrapper -->
			<?php include "footer.php"; ?>

