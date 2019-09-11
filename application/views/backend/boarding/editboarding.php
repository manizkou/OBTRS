	<?php
	foreach ($edit as $key) {

	?>
	<div id="page-wrapper"  >
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
							<div class="tab-content">        
								<div id="first" class="tab-pane fade in active">
									
									<h3 align="center">Edit Sub Route Details</h3><hr>
									
									<form action="<?php echo base_url();?>backend/boardingdetails/updateboard/<?php echo $key->board_id;?>" method="POST">
									
									<div class="row">
									  <div class="form-group col-md-6">
										    <label for="Bus name" class="col-form-label">Route Name:</label>
											<select value="" class="form-control" id="route_dropdown" required name="route">
											<?php
												foreach ($route as $keys) {
											?>
												<option value="<?php echo $keys->route_id; ?>"><?php echo $keys->fplace;?>&#8594;<?php echo $keys->tplace; ?></option>
												<?php
											}
											?>
										</select>

										
									   </div>
									   <div class="form-group col-md-6">
											<label for="new boarding point" class=" col-form-label">New Sub-Boarding Point:</label>
									
											<input class="form-control" type="text" name="bord-point" placeholder="Add New Boarding Point" required value="<?php echo $key->board; ?>">
									
										</div>
									</div>
									<div class="row">
									 <div class="form-group col-md-6">
											<label for="new boarding point" class=" col-form-label">New Sub-Dropping Point:</label>
									
											<input class="form-control" type="text" name="drop-point" placeholder="Add New Boarding Point" required value="<?php echo $key->drop_point; ?>">
									
										</div>
										
										<div class="form-group col-md-6">
											<label for="start time" class=" col-form-label">Start Time:</label>
									
											<input type="text" placeholder="Start time" name="start_time" class="form-control" required value="<?php echo $key->stime;?>">
										</div>	

									</div>
									<div class="row">
									<div class="form-group col-md-6">
											<label for="start time" class=" col-form-label">End Time:</label>
									
											<input type="text" placeholder="End time" name="end_time" class="form-control" required value="<?php echo $key->etime;?>">
										</div>
										<div class="form-group col-md-6">
											<label for="" class="col-form-label">Price:</label>
									
											<input class="form-control" type="text" name="price" placeholder="Add Price" value="<?php echo $key->price?>" required>
										</div>
										<div class="col-md-6"></div>
									</div>
									
								<div class="form-group row">
									<div class="col-md-4">
									<input type="submit" class="btn btn-primary" value="submit" name="save" class="form-control">
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
		<?php
	}
	?>

	<script src="<?php echo base_url();?>assets/backend/select/js/select2.min.js"></script>
	<script>
    $('#select1').select2();
	$('#route_dropdown').select2();
    </script>
    <script type="text/javascript">
function selectroute(country_id){
	if(country_id!="-1"){
		loadData('route',country_id);
	}else{
		$("#state_dropdown").html("<option value='-1'>Select route</option>");		
	}
}

function loadData(loadType,loadroute){
	// var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	 $("#"+loadType+"_loader").show();
     $("#"+loadType+"_loader").fadeIn(400).html('Please wait...');
    var uri="<?php echo base_url();?>backend/boardingdetails/getroute/"+loadroute;
	$.ajax({
		type: "GET",
		url:uri,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("");
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}
</script>
<script>
$('#select1').change(function () {
var otherValue=$(this).find('option:selected').attr('data-othervalue');
$('#otherValue').val(otherValue);
});
</script>
 
