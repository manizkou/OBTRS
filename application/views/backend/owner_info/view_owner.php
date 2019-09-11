<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<!-- <h2 class="page-header" align="center">Busses</h2> -->
		</div>
		<!-- /.col-lg-12 -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">		
					<div class="panel-body">
						<div class="tab-content">        
							<div id="first" class="tab-pane fade in active">
							<?php 
							  if($this->session->flashdata('updateinfo')==TRUE)
								{
							?>
								<div class="alert alert-info alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
									<p><?php echo $this->session->flashdata('message'); ?></p>
								</div>
								<?php
							}
							?>
							<?php 
							  if($this->session->flashdata('deleteinfo')==TRUE)
								{
							?>
								<div class="alert alert-info alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
									<p><?php echo $this->session->flashdata('message'); ?></p>
								</div>
								
								<?php
							}
							?>

							<table  data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								<thead >
										<tr class="bg-info">
											<th>S.N.</th>
											<th>Owner Name</th>
											<th>Address</th>
											<th>E-mail</th>
											<th>Action</th>
											
											
										</tr>
									</thead>
									<tbody>
									<?php
										$sn=1;
										foreach ($owninfo as $key) {
									?>
										<tr>
											<td><?php echo $sn;?></td>
										   <td><?php echo $key->name;?></td>
										   <td><?php echo $key->address;?></td>
											<td><?php echo $key->email;?></td>
											<td>
											<a href="<?php echo base_url(); ?>backend/owner_info/deleteowner/<?php echo $key->owner_id;?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>DELETE</a>
									
											</td>
												
										</tr>
		
											<?php
											$sn++;
										}
										?>
											
												</tbody>
											</table>

										</div>  
									</div>   <!-- tab-content -->

								</div>  <!-- panel-body -->
							</div> <!-- panel -->
						</div> <!-- col-md -->
					</div> <!-- row -->
				</div> <!-- row -->
			</div> <!-- page-wrapper -->
			