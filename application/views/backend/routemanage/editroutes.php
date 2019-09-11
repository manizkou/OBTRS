<?php
foreach ($routeedit as $key) {
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
							<button type="button" class="close" data-dismiss="alert" aria-lael="close">    <i>&times</i></button>
							<strong>Type To Edit Route Details</strong>
						</div>
					</div>
					<div class="panel-body">
						
						<div>
							<form action="<?php echo base_url();?>backend/routemanage/updateroute/<?php echo $key->route_id;?>" method="POST">
							
								<div class="row">
							<div class="form-group col-md-6">
								<label for="" class="col-form-label">From place:</label>
								
									<input type="text" class="form-control" name="fplace" value="<?php echo $key->fplace;?>">
								
							</div>
							<div class="form-group col-md-6">
								<label for="" class="col-form-label">To Place:</label>
								 <input type="text" class="form-control" name="tplace" value="<?php echo $key->tplace;?>">
							</div>
							</div>				
							
							<div class="form-group row">
								<div class="col-md-4">
									<input type="submit" class="btn btn-primary" value="submit" name="save" class="form-control">
									<input type="reset" class="btn btn-danger" value="cancel" name="cancel" class="form-control">
								</div>
							</div>
						</form>
						<?php 				
					}
					?>
					</div>  <!-- panel-body -->
					
				</div> <!-- panel -->
			</div> <!-- col-md -->
		</div> <!-- row -->
	</div> <!-- row -->
</div> <!-- page-wrapper -->
<script src="<?php echo base_url();?>assets/backend/select/js/select2.min.js"></script>
<script>
    $('select').select2();
</script>
