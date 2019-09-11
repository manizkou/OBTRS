<?php 
foreach ($busupdate as $key ) {
?>
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
							<strong>Type To Edit Bus</strong>
						</div>
						
					</div>
					<div class="panel-body">
						<div>
							<form action="<?php echo base_url(); ?>backend/busmanage/updatebus/<?php echo $key->bus_id; ?>" method="POST">
								<div class="row">
									<div class="form-group col-md-6">

										<label for="example-text-input" class=" col-form-label">Bus Name:</label>
										
										<input type="text" name="busname" id="example-text-input" class="form-control"
										value="<?php echo $key->bus_name;?>">
										
									</div>
									<div class="form-group col-md-6">
										<label for="Reg num" class="col-form-label">Bus Reg Number:</label>
										
										<input type="text" name="regnum" class="form-control" value="<?php echo $key->reg_name;?>">
										
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="example-search-input" class=" col-form-label">Bus Type:</label>
											<select value="" class="form-control" id="select3" name="btype[]" multiple="multiple">
											<?php
												$explode=explode(',',$key->btype);
												foreach ($explode as $val) {
											?>
											<option selected="selected" value="<?php echo $val;?>" id="toremove"><?php echo $val; ?></option>
											<?php
										}
										?>
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

											<input type="text" name="maxseat" class="form-control" value="<?php echo $key->maxseat;?>">
										</div>	
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="departure-time" class=" col-form-label">Start time:</label>

											<input class="form-control" type="time" name="stime" value="<?php echo $key->start_time; ?>">

										</div>
										<div class="form-group col-md-6">
											<label for="arrival-time" class="col-form-label">Arrival time:</label>

											<input class="form-control" type="time" name="etime" value="<?php echo $key->end_time;?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="route" class="col-form-label">Bus Route</label>
											<select name="route" id="routeselect" class="form-control">
											<option value="<?php echo $key->route_id; ?>" selected><?php echo $key->fplace; ?>&#8594;<?php echo $key->tplace; ?></option>
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
											<select class="form-control" name="amenities[]" id="multiple" multiple="multiple">
											<?php
												$explode=explode(',',$key->amenities);
												foreach ($explode as $value) {
											?>
											
											<option selected="selected" value="<?php echo $value;?>"><?php echo $value; ?></option>
											<?php
										}
										?>
												<option value="wifi">WI-FI</option>
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

											<input type="text" name="btype_price" class="form-control"
											value="<?php echo $key->btype_price;?>">
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
									<br><br>
									<div class="row">
										<div class="form-group col-md-6 ">
											<label class=" control-label large">Rest Point:</label>
											<input type="text" name="description" class="form-control" value="<?php echo $key->description;?>">
										</div>   
										<div class="col-md-6"></div>

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
	<?php 

}
?>
<script src="<?php echo base_url(); ?>assets/backend/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/backend/select/js/select2.min.js"></script>

	<script>
		$('#select1').select2();
		$('#select3').select2();
	</script>
	<script>
		$('#multiple').select2();
	</script>
	<script>
		$('#toremove').remove();
	</script>
