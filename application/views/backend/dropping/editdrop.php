	<?php 
foreach ($edit as $val) {
	?>
	<div id="page-wrapper"  >
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
					<?php
						if($this->session->flashdata('insertinfo')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
							}
						?>	
					</div>
						
						<div class="panel-body">
							<div class="tab-content">        
								<div id="first" class="tab-pane fade in active">
									
									<h3 align="center">Add Dropping Points Details</h3><hr>
									
									<form action="<?php echo base_url();?>backend/droppingdetails/updatedrop/<?php echo $val->drop_id;?>" method="POST">
									
									<div class="row">
									  <div class="form-group col-md-6">
										    <label for="Bus name" class="col-form-label">Bus Name:</label>
										
											<select value="" class="form-control" id="select1" onchange="selectroute(this.options[this.selectedIndex].value)" name="bid" required>
											<option value="-1">Select Busname</option>
											<?php
											foreach ($busnaam as $key) {
											?>
												<option value="<?php echo $key->bus_id;?>" data-othervalue="<?php echo $key->bus_name;?>"><?php echo $key->bus_name;?></option>
												<?php
											}
											?>
												
										</select>
										<input type="hidden" name="busname" id="otherValue" />
										
									   </div>
									  <div class="form-group col-md-6">
										<label for="route" class=" col-form-label">Route:</label>
									
										<select value="" class="form-control" id="route_dropdown" required name="route">
												<option value="-1">Select Route</option>
										</select>
										<span id="route_loader"></span>
									  </div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<label for="new boarding point" class=" col-form-label">New Dropping Point:</label>
									
											<input class="form-control" type="text" name="drop-point" placeholder="Add New Dropping Point" required value="<?php echo $val->drop_point;?>">
									
										</div>
										<div class="form-group col-md-6">
											<label for="start time" class=" col-form-label">Drop Time:</label>
									
											<input type="time" placeholder="Drop time" name="drop_time" class="form-control" required  value="<?php echo $val->etime;?>">
										</div>
									</div>
									
									<div class="row">
										<div class="form-group col-md-6">
											<label for="address" class=" col-form-label">Address:</label>
									
											<input type="text" placeholder="Address" name="address" class="form-control" required  value="<?php echo $val->address;?>">
									
										</div>
										<div class="col-md-6"></div>
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
    var uri="<?php echo base_url();?>backend/droppingdetails/getroute/"+loadroute;
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
 
