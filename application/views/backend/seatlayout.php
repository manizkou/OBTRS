<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/myCss/seat.css">

<div id="page-wrapper">
	
	<!-- /.col-lg-12 -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel panel-heading">
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
					<h3 align="center">Seat Layout Details</h3><hr>
					<form action="<?php echo base_url();?>backend/seatlayout/insert" method="POST" >
						<fieldset>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="Bus name" class="col-form-label">Bus Name:</label>
									
									<select class="form-control" name="bus" required id="busname"  onchange="totalseat(this.options[this.selectedIndex].value)">
									<option value="" selected disabled>Select BusName</option>
										<?php 
											foreach ($busname as $bname) {
										?>
										<option value="<?php echo $bname->bus_id;?>"><?php echo $bname->bus_name;?></option>
										<?php 
											}
										?>
										
									</select>
									
								</div>
								<div class="form-group col-md-6">
									<label for="Total Seat" class=" col-form-label">Total Seat</label>
									<input class="form-control" type="text" id="seat_total" name="total" placeholder="Total Seat" required>
									<span id="seat_loader"></span>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									
									<label for="Bus type" class=" col-form-label">Number of First row Seat</label>
									<input class="form-control" type="text" id="first" name="first" placeholder="First Row Seat" required>	

									
								</div>
								<div class="form-group col-md-6">
										<label for="lastRow" class="col-form-label">Number of Last Rows</label>
									<input type="text" placeholder="Number of Last Rows" name="last" class="form-control" required id="last">
								</div>
							</div>
							
							<div class="row">
								<div class="form-group col-md-6">
								<label for="Seat layout" class=" col-form-label" >Seat layout</label>
									<select class="form-control" id="matrix" name="matrix" required>
										<option value="" disabled selected>Choose Seat Layout</option>
										<option value="5">2X2</option>
										<option value="4">2X1</option>
										<option value="4">1X2</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label for="" class="col-form-label">For Quick Example:</label><br>
									<button type="button" id="view" onclick="show()" name="view" class="btn btn-info" data-target="#squarespaceModal" data-toggle="modal" class="btn btn-primary">View Layout</button>
								</div>
								
							</div>

							<div class="form-group row">
								<div class=" col-md-3">
									<input type="submit" value="submit" name="save" class="btn btn-primary">
								</div>
								
							</div>
						</fieldset>
					</form>

					
					
				</div>  <!-- panel-body -->
			</div> <!-- panel -->
		</div> <!-- col-md-6 -->
		<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">Seat Layout</h3>
				</div>
				<div class="modal-body">
					<div id="modal-loader" style="display: none; text-align: center;">
					<img src="<?php echo base_url();?>assets/img/loader.gif" alt="">
					</div>
						<div id="dynamic-content">
							
						</div>					
				</div>
			</div>
		</div>
	</div>
		
	</div> <!-- page-wrapper -->
	<script src="<?php echo base_url();?>assets/backend/select/js/select2.min.js"></script>
	<script>
		$('select').select2();
	 </script>

<script>
	function show(){
		var totalseat= $('#seat_total').val();
		var mat= $('#matrix').val();
		var lastseat= $('#last').val();
		$('#dynamic-content').html(''); // leave this div blank
     	$('#modal-loader').show();      // load ajax loader on button click
		$.ajax({
          url: '<?php echo base_url();?>backend/bootstrap_modal/getseat/'+totalseat+'/'+mat+'/'+lastseat,
          type: 'POST',
          dataType: 'html'
     })
     .done(function(data){
          //console.log(data); 
          $('#dynamic-content').html(''); // blank before load.
          $('#dynamic-content').html(data); // load here
          $('#modal-loader').hide(); // hide loader  
     })
     .fail(function(){
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
     });
	}
</script>


<script type="text/javascript">
	function totalseat(t_seat){
		
			loadData('seat',t_seat);
	}

	function loadData(loadType,loadtotal){
	// var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
	$("#"+loadType+"_loader").fadeIn(400).html('Please wait...');
	var uri="<?php echo base_url();?>backend/seatlayout/totalseats/"+loadtotal;
	$.ajax({
		type: "GET",
		url:uri,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_total").replaceWith(result);
			$("#"+loadType+"_total").append(result); 
			
		}
	});
}
</script>