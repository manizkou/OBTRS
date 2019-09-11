
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
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
					}
					?>	
					</div>
					<div class="panel-body">
						
						<div>
							

							<form action="<?php echo base_url();?>backend/routemanage/insertroute" method="POST">
								
								<div class="row">
							<div class="form-group col-md-6">
								<label for="" class="col-form-label">From place:</label>
								
									<input type="text" class="form-control" name="fplace">
								
							</div>
							<div class="form-group col-md-6">
								<label for="" class="col-form-label">To Place:</label>
								 <input type="text" class="form-control" name="tplace">
							</div>
							</div>
							<div class="form-group row">
								<div class="col-md-4">
									<input type="submit" class="btn btn-primary" value="submit" name="save" class="form-control">
									<input type="reset" class="btn btn-danger" value="cancel" name="cancel" class="form-control">
								</div>
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
    $('select').select2();
</script>
<!-- <script>
$('#select1').change(function () {
var otherValue=$(this).find('option:selected').attr('data-othervalue');
$('#otherValue').val(otherValue);
});
</script>
 -->