	<div id="page-wrapper"  >
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
					<?php
						if($this->session->flashdata('insertinfo')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times;</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
							}
						?>	
					</div>
						
						<div class="panel-body">
							<div class="tab-content">        
								<div id="first" class="tab-pane fade in active">
									
									<h3 align="center">Add Sub Route Details</h3><hr>
									
									<form action="<?php echo base_url();?>backend/boardingdetails/insertboard" method="POST">
									
									<div class="row">
									  <div class="form-group col-md-6">
										<label for="route" class=" col-form-label">Route:</label>
									
										<select value="" class="form-control" id="route_dropdown" required name="route">
											<?php
												foreach ($routeinfo as $key) {
											?>
												<option value="<?php echo $key->route_id; ?>"><?php echo $key->fplace;?>&#8594;<?php echo $key->tplace; ?></option>
												<?php
											}
											?>
										</select>

									  </div>
									  <div class="form-group col-md-6">
											<label for="new boarding point" class=" col-form-label">New Boarding Sub Point:</label>
									
											<input class="form-control" type="text" name="bord-point" placeholder="Add New Boarding Point" required>
									
										</div>
									</div>
									<div class="row">
									 <div class="form-group col-md-6">
											<label for="" class=" col-form-label">New Dropping Sub Point:</label>
									
											<input class="form-control" type="text" name="drop-point" placeholder="Add New Boarding Point" required>
									
										</div>
										
										<div class="form-group col-md-6">
											<label for="start time" class=" col-form-label">Start Time:</label>
									
											<input type="text" placeholder="Start time" name="start_time" class="form-control" required>
										</div>
										
									</div>
									<div class="row">
									<div class="form-group col-md-6">
											<label for="start time" class=" col-form-label">End Time:</label>
									
											<input type="text" placeholder="End time" name="end_time" class="form-control" required>
										</div>
									<div class="form-group col-md-6">
										<label for="" class="col-form-label">Price:</label>
									
											<input class="form-control" type="text" name="price" placeholder="Add Price" required>
									</div>
									</div>
								<div class="form-group row">
									<div class="col-md-4">
									<input type="submit" class="btn btn-primary" value="submit" name="save" class="form-control">
									<input type="reset" class="btn btn-danger" value="cancel" name="cancel" class="form-control">
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

	<script src="<?php echo base_url();?>assets/backend/select/js/select2.min.js"></script>
	<script>
    $('#select1').select2();
	$('#route_dropdown').select2();
    </script>
 