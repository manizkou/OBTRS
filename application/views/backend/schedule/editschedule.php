	<?php
	foreach ($edit as $key){
	?>
	<div id="page-wrapper"  >
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
					</div>
						
						<div class="panel-body">
							<div class="tab-content">        
								<div id="first" class="tab-pane fade in active">
									
									<h3 align="center">Add Schedule For Each Bus</h3><hr>
									
									<form action="<?php echo base_url();?>backend/schedule/updateschedule/<?php echo $key->schedule_id; ?>" method="POST">
									
									<div class="row">
									  <div class="form-group col-md-6">
										    <label for="Bus name" class="col-form-label">Bus Name:</label>
										
											<select value="" class="form-control" id="select1" onchange="selectroute(this.options[this.selectedIndex].value)" name="busid" required>
											<option value="<?php echo $key->bus_id; ?>"><?php echo $key->bus_name;?></option>
											<!-- <option value="-1">Select Busname</option> -->
											<?php
											foreach ($buslist as $info) {
											?>
												<option value="<?php echo $info->bus_id;?>"><?php echo $info->bus_name;?></option>
												<?php
											}
											?>
												
										</select>
										
									   </div>
									  <div class="form-group col-md-6">
										<label for="route" class=" col-form-label">Define Route</label>
									
										<select value="" class="form-control" id="from_dropdown" required name="from">
										<option value="<?php echo $key->route_id; ?>"><?php echo $key->fplace;?> To <?php echo $key->tplace; ?></option>
												<!-- <option value="-1" selected disabled>From</option> -->
										</select>
										<span id="from_loader"></span>
									  </div>

									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<span><strong>ONWARD DATE</strong></span>
											<label class="sr-only" for="onwardDate">ONWARD DATE</label>
											<input type="text" class="form-control" id="onwardDate" name="onwardDate" 
											placeholder="ONWARD DATE" value="<?php echo $key->onward; ?>" required>
										</div>
										<div class="form-group col-md-6">
											<span><strong>RETURN DATE</strong></span>
											<label class="sr-only" for="returnDate">RETURN DATE</label>
											<input type="text" class="form-control" id="returnDate" name="returnDate" 
											placeholder="RETURN DATE" value="<?php echo $key->returndate; ?>">
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
		<?php
	}
	?>

	<script src="<?php echo base_url();?>assets/backend/select/js/select2.min.js"></script>
	<script>
    $('#select1').select2();
	$('#from_dropdown').select2();
	$('#to_dropdown').select2();
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
<script>
$('#select1').change(function () {
var otherValue=$(this).find('option:selected').attr('data-othervalue');
$('#otherValue').val(otherValue);
});
</script>
<script>
		$( function() {
			var dateFormat = "mm/dd/yy",
			
			onwardDate = $( "#onwardDate" ).datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1,
				showAnim:"slideDown",
				minDate: new Date(),				
			})
			.on( "change", function() {
				returnDate.datepicker( "option", "minDate", getDate( this ));
			}),
			returnDate = $( "#returnDate" ).datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1,
				showAnim:"slideDown",
				minDate: new Date(),
				
			})
			.on( "change", function() {
				onwardDate.datepicker( "option", "maxDate", getDate( this ) );
			});

			function getDate( element ) {
				var date;
				try {
					date = $.datepicker.parseDate( dateFormat, element.value );
				} catch( error ) {
					date = null;
				}

				return date;
			}
		} );
	</script>
	<!-- script for datepicker ends -->
 
