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
									
									<h3 align="center">Add Cancled Ticket</h3><hr>
									
									<form>
									
									<div class="row">
									  <div class="form-group col-md-6">
										    <label for="Bus name" class="col-form-label">Bus Name:</label>
										
											<select class="form-control">
												<option value="">-----choose----</option>
												<option value="">Samrat Travels</option>
												<option value="">Asmit Travels</option>
												<option value="">Manish Travels</option>
												<option value="">Saleena Yatayat</option>
												
											</select>
										
									   </div>
									  <div class="form-group col-md-6">
										<label for="route" class=" col-form-label">Cancle Time:</label>
									
										<input type="text" placeholder="Cancel Time" name="canceltime" class="form-control">
									  </div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="new boarding point" class=" col-form-label">Percentage:</label>
									
											<input type="text" placeholder="Percentage" name="per" class="form-control">
									
										</div>
										<div class="form-group col-md-6">
											<label for="start time" class=" col-form-label">Flat:</label>
									
											<input type="text" placeholder="Flat" name="Flat" class="form-control">
										</div>
									</div>
									
									<div class=" form-group row">
									<div class="form-control">
										<input type="radio" name="cancel-type" value="percentage" ><label>Percentage</label>
										<input type="radio" name="cancel-type" value="flat"><label>Flat</label>
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
		<?php include "footer.php"; ?>
		<script>
    $('select').select2();
    </script> 

