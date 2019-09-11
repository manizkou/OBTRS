<div id="page-wrapper">
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 align="center">Add Bus Type Details</h3>
				<?php
				if($this->session->flashdata('response')==TRUE){
					?>
					<hr>
					<div class="alert alert-success alert-dismissible">
					  <button type="button" class="close" data-dismiss="alert" 	aria-lael="close"><i>&times</i>
						</button>
						<p><?php echo $this->session->flashdata('message'); ?></p>

					</div>

					<?php
				}
				?>

				<?php
				if($this->session->flashdata('upresponse')==TRUE){
					?>
					<hr>
					<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" 	aria-lael="close"><i>&times</i>
						</button>
						<?php echo $this->session->flashdata('message'); ?>

					</div>

					<?php
				}
				?>
				<?php
				if($this->session->flashdata('delinfo')==TRUE){
					?>
					<hr>
					<div class="alert alert-success alert-dismissible">
					  <button type="button" class="close" data-dismiss="alert" 	aria-lael="close"><i>&times</i>
						</button>
						<p><?php echo $this->session->flashdata('message'); ?></p>

					</div>

					<?php
				}
				?>
				<form class="form-group" action="<?php echo base_url();?>backend/busmanage/insertbustype" method="POST">
					<div class="row">
						<div class="col-md-2">
							<label for="Add-bus-type" class="">Add bus type:</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<label for="example-search-input" class=" col-form-label hidden">Bus Type:</label>
								
								<input type="text" value="" placeholder="Insert Bus Type" name="bustype" class="form-control" required>
							</div>
						</div>
					</div><hr>
					<div class="row">
						<div class="col-md-2">
							<input type="submit" value="submit" name="submit" class="form-control btn btn-primary" >
						</div>
					</div>
				</form>
			</div>
			<!-- table view bus type begins -->
			<div class="panel-body">     
				<h3 align="center">View Bus Type</h3>
				<table class="table" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					<thead>
						<tr>
							<th>S.N.</th>
							<th>Bus Type Name</th>
							<th>Action</th>


						</tr>
					</thead>
					<tbody>
						<?php
						$sn=1;
						foreach ($viewbus as $value) {
							?>
							<tr>
								<td><?php echo $sn; ?></td>
								<td><?php echo $value->type_name;?></td>
								<td><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#squarespaceModal<?php echo $sn;?>"><span class="glyphicon glyphicon-eye-open">&nbsp;</span>Update</a>

								<a href="<?php echo base_url(); ?>backend/busmanage/deletebustype/<?php echo $value->type_id;?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash">&nbsp;</span>DELETE</a>
									
								</td>

							</tr>
	<div class="modal fade" id="squarespaceModal<?php echo $sn;?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">Edit Bus Type</h3>
				</div>
				<div class="modal-body">
					<form class="form-group" action="<?php echo base_url();?>backend/busmanage/updatebustype/<?php echo $value->type_id;?>" method="POST">
						<label for="bus-type">BUS TYPE:</label>
						<input type="text" name="updatebustype" id="bus-type" value="<?php echo $value->type_name;?>" class="form-control"><br>
						<button type="submit" value="Submit" name="submit" class="btn btn-primary">Submit</button>
					</form>
											
				</div>
				<div class="modal-footer">
					<div class="btn-group btn-group-justified" role="group" aria-label="group button">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	$sn++;
}
?>
</tbody>
</table>
</div>  <!-- panel-body -->

</div> <!-- panel -->
</div> <!-- col-md -->
</div> <!-- row -->
</div> <!-- page-wrapper -->
