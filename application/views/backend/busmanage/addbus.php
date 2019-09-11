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
					<?php
						if($this->session->flashdata('insertinfo')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i >&times</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
					}
					?>
						
					</div>
					<div class="panel-body">
						<div>
							<form action="<?php echo base_url(); ?>backend/busmanage/insertnewbus" method="POST">
								<div class="row">
									<div class="form-group col-md-6">

										<label for="example-text-input" class=" col-form-label">Bus Name:</label>
										
										<input type="text" name="busname" id="example-text-input" class="form-control">
										<?php if($this->session->flashdata('errors')==TRUE){
											 $this->session->flashdata('message');
											} ?>
									</div>
									<div class="form-group col-md-6">
										<label for="Reg num" class="col-form-label">Bus Reg Number:</label>
										
										<input type="text" name="regnum" class="form-control">
										<?php if($this->session->flashdata('errors')==TRUE){
											 echo form_error('regnum');
											} ?>
										
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="example-search-input" class=" col-form-label">Bus Type:</label>
											<select value="" class="form-control" id="select3" name="btype[]" multiple="multiple">
											<?php
										foreach ($fetchtype as $bustype) {
											?>
												<option value="<?php echo $bustype->type_name;?>"><?php echo $bustype->type_name;?>
												</option>
												<?php } ?>

											</select>
										</div>

										<div class="form-group col-md-6">
											<label for="max seat" class="col-form-label">Maximum Seat:</label>

											<input type="text" name="maxseat" class="form-control">
										</div>	
									</div>		
									<div class="row">
										<div class="form-group col-md-6">
											<label for="departure-time" class=" col-form-label">Start time:</label>

											<input class="form-control" type="time" name="stime">

										</div>
										<div class="form-group col-md-6">
											<label for="arrival-time" class="col-form-label">Arrival time:</label>
											<input class="form-control" type="time" name="etime">
										</div>
									</div>
									<br>
									<div class="row">
									<div class="form-group col-md-6">
											<label for="route" class="col-form-label">Bus Route</label>
											<select name="route" id="routeselect" class="form-control">
											<?php
												foreach($route as $routename){
											?>
											<option value="<?php echo $routename->route_id; ?>"><?php echo $routename->fplace; ?>&#8594;<?php echo $routename->tplace; ?></option>
											<?php
										}
										?> 
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="choices-multiple-remove-button">Amenities</label>
											<select class="form-control" name="amenities[]" id="multiple" placeholder="" multiple="multiple">
												<option value="wifi" selected>WI-FI</option>
												<option value="plug">Charging port</option>
												<option value="film">Movies</option>
												<option value="lightbulb-o">Reading light</option>
												<option value="pillow">pillow</option>
												<option value="fire-extinguisher">fire extenguisher</option>
											</select>
										</div>
										<div class="col-md-6"></div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="max seat" class="col-form-label">Bus Type Price:</label>

											<input type="text" name="btype_price" class="form-control">
										</div>
										<div class="col-md-6">
											<label for="" class="col-form-label">Owners Email:</label>

											<select name="email" id="ownselect" class="form-control" required>
											<?php
												foreach($ownermail as $mail){
											?>
											<option value="<?php echo $mail->email; ?>"><?php echo $mail->email; ?></option>
											<?php
										}
										?> 
											</select>
											
										</div>
									</div>
									<br>
									<div class="row">
										<div class="form-group col-md-6 ">
											<label class=" control-label large">Rest Point:</label>
											<input type="text" name="description" class="form-control">
											<div class="col-md-6"></div>

										</div>   


									</div>
									<div class="row">
										<div class="col-md-6">
											<input type="submit" value="submit" name="submit" class="btn btn-primary">
										</div>
										<div class="col-md-6"></div>
									</div>
								</form>
							</div>   <!-- first -->
						</div>  <!-- panel-body -->
					</div> <!-- panel -->
				</div> <!-- col-md -->
			</div> <!-- row -->
		</div> <!-- row -->
	</div> <!-- page-wrapper -->

	<script src="<?php echo base_url();?>assets/backend/select/js/select2.min.js"></script>
	<script>
		$('#select1').select2();
		$('#select3').select2();
		$('#routeselect').select2();
		$('#ownselect').select2();
	</script>
	<script>
		$('#multiple').select2();
	</script>
	