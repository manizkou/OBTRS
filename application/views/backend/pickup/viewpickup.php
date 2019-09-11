<div id="page-wrapper"  >
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
								
								</div>

								<table class="table table-bordered table-responsive" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
									<thead>
										<tr>
											<th>S.N.</th>
											<th>Route</th>
											<th>New Pickup Point</th>
											<th>Pickup Time</th>
											<th>Action</th>
											
											
										</tr>
									</thead>
									<tbody>
									<?php 
										$sn=1;
										foreach ($view as $key) {
									?>
										<tr>
											<td><?php echo $sn; ?></td>
											<td><?php echo $key->fplace;?>&#8594;<?php echo $key->tplace;?></td>
											<td><?php echo $key->pickup_point;?></td>
											<td><?php echo $key->pickup_time;?></td>
											<td>
											<a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>backend/droppingdetails/editdrop/<?php echo $key->id;?>"><i class="fa fa-fw fa-edit"></i>Edit</a>
											<a href="<?php echo base_url(); ?>backend/pickup/deletepickup/<?php echo $key->id;?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>DELETE</a>
									
											</td>
												
											</tr>
											<?php
											$sn++;
											}
											?>
												</tbody>
											</table>

										</div>  
										</div> 
										 
									</div>  <!-- panel-body -->
								</div> <!-- panel -->
							</div> <!-- col-md -->
						</div> <!-- row -->
					</div> <!-- row -->
				</div> <!-- page-wrapper -->