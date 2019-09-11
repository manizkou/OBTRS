<div id="page-wrapper"  >
		<div class="row">
			<div class="col-lg-12">
				<!-- <h2 class="page-header" align="center">View all routes</h2> -->
			</div>
			<!-- /.col-lg-12 -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						
						<div class="panel-body">
							<div class="tab-content">        
								<div id="first" class="tab-pane fade in active">
									
									<h3 align="center">View All Users</h3><hr>
									

									<table class="table table-bordered table-responsive" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
										<thead>
											<tr>

												<th>S.N.</th> 
												<th>Name</th>
												<th>Age</th>
												<th>Address</th>
												<th>Email</th>
												<th>Ph.number</th>
												<th>Gender</th>
												<th>Action</th>
											</tr>	
												
												
												
												
											
										</thead>
										<tbody>
										<?php
											$sn=1;
											foreach ($userinfo as $key ):
										?>
											<tr>
												<td><?php echo $sn; ?></td>
												<td><?php echo $key->name;?></td>
												<td><?php echo $key->age; ?></td>
												<td><?php echo $key->address; ?></td>
												<td><?php echo $key->email; ?></td>
												<td><?php echo $key->phone; ?></td>
												<td><?php echo $key->gender; ?></td>
												<td>
												<button type="button" value="view" name="view" class="btn btn-sm"><span class="fa fa-eye"></span> View</button>
													<button class="btn  btn-sm" type="button"  name="update"><span class="fa fa-edit"></span> Update</button>
													<button class="btn  btn-sm" type="button" name="delete"><span class="fa fa-remove"> Delete</span></button>
												</td>

												
												
											</tr>
											<?php
											$sn++;
											endforeach;
											?>
											

										</tbody>
									</table>

								</div>  
							

								</div> 
								<!-- tab-content -->
							</div>  <!-- panel-body -->
						</div> <!-- panel -->
					</div> <!-- col-md -->
				</div> <!-- row -->
			</div> <!-- row -->
		</div> <!-- page-wrapper -->
