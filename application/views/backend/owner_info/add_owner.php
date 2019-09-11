	<div id="page-wrapper"  >
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
					<?php
						if($this->session->flashdata('insertinfo')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times;</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
							}
						?>	
					</div>
						
						<div class="panel-body">
							<div class="tab-content">        
								<div id="first" class="tab-pane fade in active">
									
									<h3 align="center">Operator Signup(Owners)</h3><hr>
									
									<form action="<?php echo base_url();?>backend/owner_info/insertowner" method="POST">
									
									<div class="row">
									  <div class="form-group col-md-6">
										<label for="opname" class=" col-form-label">Name:</label>
										<input class="form-control" type="text" name="agentname"  required>
										

									  </div>
									  <div class="form-group col-md-6">
											<label for="new boarding point" class="col-form-label">Address:</label>
									
											<input class="form-control" type="text" name="agentaddr"  required>
									
										</div>
									</div>
									<div class="row">
									 <div class="form-group col-md-6">
											<label for="" class=" col-form-label">Email:</label>
									
											<input class="form-control" type="email" name="email" placeholder="" required>
									
										</div>
										
										<div class="form-group col-md-6">
											<label for="pass" class=" col-form-label">Password:</label>
									
											<input type="password" name="password" class="form-control" required>
										</div>
										
									</div>
									<div class="row">
									<div class="form-group col-md-6">
											<label for="cpass" class=" col-form-label">Confirm Password</label>
									
											<input type="password"  name="cpass" class="form-control" required>
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