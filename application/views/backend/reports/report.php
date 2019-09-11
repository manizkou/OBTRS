

<div id="page-wrapper">
	<div class="row">
			<div class="col-md-12">

			<div class="panel panel-default">

				<div class="panel-heading">

					<ul class="nav nav-tabs" style="text-align: left;">

						<li class="active"><a href="#first" data-toggle="tab" id="first_tab">Bus</a></li>

						<li><a href="#second" data-toggle="tab" id="second_tab">Route</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div id="first" class="tab-pane fade in active">
							<form action="<?php echo base_url('backend/report/submit') ?>" method="POST" target="_blank">

								<div class="row">

									<div class="form-group col-md-6">
										<label for="bus" class=" col-form-label">Bus: </label>
										<select class="form-control" name="bus" onchange="selectroute(this.options[this.selectedIndex].value)" required>
											<option value="">---choose--</option>
												<?php foreach ($bus as $keys) : ?> 
												<option value="<?php echo $keys->bus_id;?>"><?php echo $keys->bus_name;?></option>												
												<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="route" class="col-form-label">Route: </label>
										   <select value="" class="form-control" id="from_dropdown" required name="route">
												<option value="-1" selected disabled>From</option>
										</select>
										<span id="from_loader"></span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 form-group">
										<label for="time-scale" class="col-form-label">Time Scale: </label>
										<select class="form-control" id="sel" name="date" onchange="show(this)">
											<option value="">---choose----</option>
											<option value="0" id="up">Uptodate</option>
											<option value="1" id="DtoD">Date To Date</option>
										</select>
									</div>
									<div class="col-md-6"></div>
								</div>
								<div class="row" id="hidden-div" style="display: none;">
									<div class="col-md-6">
										<label for="from" class="col-form-label">From:</label>
										<input type="date" name="from" class="form-control">										
									</div>
									<div class="col-md-6">									
										<label for="to" class="col-form-label">To:</label>
										<input type="date" name="to" class="form-control">
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-3">
										<input type="submit" value="Generate" name="submit" class="btn btn-success">	
									</div>
								</div>
							</form>
							<script type="text/javascript">
								function show(elem){
									if(elem.value == 1){
										document.getElementById('hidden-div').style.display = "block";
									}

									else{
										document.getElementById('hidden-div').style.display = "none";
									}
								}
							</script>
						</div>   <!-- first -->
						<!-- second tab begin -->
						<div id="second" class="tab-pane fade in ">
							<form action="<?php echo base_url('backend/report/bus_report')?>" method="POST" target="_blank" >								
								<div class="row">
									<div class="form-group col-md-6">
										<label for="route" class="col-form-label">Routes</label>
										 <select value="" class="form-control" name="route1" style="width:400px;">
												<option value="" disabled selected>---choose--</option>
												<?php foreach ($route as $key) : ?> 
												<option value="<?php echo $key->route_id;?>"><?php echo $key->fplace;?>-&#8594;><?php echo $key->tplace;?></option>												
												<?php endforeach; ?>
											</select>
									</div>
									<div class="form-group col-md-6">
										<label for="time-scale" class="col-form-label">Time Scale: </label>
										<select class="form-control" id="test" name="date1" onchange="showDiv(this)"  style="width:400px;">
											<option value="" disabled selected>---choose----</option>
											<option value="0" id="up">Uptodate</option>
											<option value="1" id="DtoD">date to date</option>
										</select>	

									</div>
								</div>
								<div class="row" id="hidden" style="display: none;">
									<div class="col-md-6">
										<label for="from">From:</label>
										<input type="date" name="From" class="form-control">
										
									</div>
									<div class="col-md-6">
										<label for="to">To:</label>
										<input type="date" name="To" class="form-control">
									</div>
								</div><br>

								<div class="row">
									<div class="col-md-3">
										<input type="Submit" value="Generate" name="generated" class="btn btn-success">
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
<script type="text/javascript">
	function showDiv(me){
		if(me.value == 1){
			document.getElementById('hidden').style.display = "block";
		}
		else{
			document.getElementById('hidden').style.display = "none";
		}
	}
</script>
<script src="<?php echo base_url();?>assets/backend/select/js/select2.min.js"></script>
<script>
    $('select').select2();
</script>
<script type="text/javascript">
function selectroute(country_id){
	if(country_id!="-1"){
		loadData('from',country_id);
	}else{
		$("#to_dropdown").html("<option value='-1'>To</option>");		
	}
}

function loadData(loadType,loadroute){
	// var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	 $("#"+loadType+"_loader").show();
     $("#"+loadType+"_loader").fadeIn(400).html('Please wait...');
    var uri="<?php echo base_url();?>backend/schedule/fromroute/"+loadroute;
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

