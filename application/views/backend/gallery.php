<div id="page-wrapper">
	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 align="center">Add Bus Images</h3><hr>
									<?php 
							  if($this->session->flashdata('response')==TRUE)
								{
							?>
								<div class="alert alert-info alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
									<p><?php echo $this->session->flashdata('message'); ?></p>
								</div>
								<?php
							}
							?>
						<form class="form-group" method="POST" action="<?php echo base_url();?>backend/gallerymanage/insert" enctype="multipart/form-data">
						<div class="row">
						    <div class="col-md-2">
							   <label for="bus-images" class="">Select Bus Name:</label>
							</div>
							<div class="col-md-9">
							    <select value="" class="form-control" id="select1" name="busid">
											<option disabled="disabled" selected>Select Busname</option>
											<?php
											foreach ($busname as $key) {
											?>
												<option value="<?php echo $key->bus_id;?>"><?php echo $key->bus_name;?></option>
												<?php
											}
											?>
												
									</select>
									<input type="hidden" name="busname" id="otherValue" />
							</div>
						</div><hr>
						<div class="row">
						<div class="col-md-2">
							<label>Select Images:</label>
						</div>
						<div class="col-md-10">
							<input type="file" value="Choose Image" name="image" class="" required>
						</div>
						</div><hr>
						<div class="row">
						<div class="col-md-2">
							<input type="submit" value="submit" name="submit" class="btn btn-primary" >
						</div>
						</div>
						</form>


					</div>
					<div class="panel-body">
						        
							<div id="first" class="tab-pane fade in active">
								<h3 align="center">View Bus Gallery Details</h3>		
								<table class="table table-bordered" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
									<thead >
										<tr>
											<th>S.N.</th>
											<th>Bus Name</th>
											<th>Total Images </th>
											<th>Action</th>
											
											
										</tr>
									</thead>
									<tbody>
									<?php 
										$sn=1;
										foreach ($gtable as $key) {
										?>
										<tr>
										
											<td><?php echo $sn; ?></td>
											<td><?php echo $key->bus_name;?></td>
											<td><?php echo $key->total_images;?></td>
											<td>
											<a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>backend/gallerymanage/viewgallery/<?php echo $key->bus_id; ?>"><i class="glyphicon glyphicon-picture icon-white"></i>&nbsp;View Gallery</a>
											</td>
												
										</tr>
										<?php
										$sn++;
											}
											?>
									</tbody>
								</table>

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
    </script>
   <!--  <script>
		$('#select1').change(function () {
		var otherValue=$(this).find('option:selected').attr('data-othervalue');
		$('#otherValue').val(otherValue);
		});
	</script> -->
	