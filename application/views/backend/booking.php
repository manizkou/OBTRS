	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header" align="center">Booking</h1> -->
			</div>
			<!-- /.col-lg-12 -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						
						<div class="panel-body">
							<div class="tab-content">        
								<div id="first" class="tab-pane fade in active">
									<div class="alert alert-info alert-dismissible">
										<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
										<strong>Info!</strong> This alert box could indicate a neutral informative change or action.
									</div>

									

									<table class="table table-bordered" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
										<thead>
											<tr>
												<th>Booking<br> Id</th>
												
												<th  data-sortable="true">Bus <br>Name</th>
												<th  data-sortable="true">route</th>
												<th  data-sortable="true">Pick <br>Point</th>
												<th  data-sortable="true">Drop <br>Point</th>
												<th  data-sortable="true">Booking<br> Date</th>
												<th  data-sortable="true">depart<br> date</th>
												
												<th  data-sortable="true">status</th>
												<th  data-sortable="true">depart <br>Time</th>
												<th  data-sortable="true">Arrive <br>Time</th>
												<th  data-sortable="true">Action</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												
												<td>Air Bus</td>
												<td>butwal-kathmandu</td>
												<td>chauraha</td>
												<td>kalanki</td>
												<td>2074/2/2</td>
												<td>2074/2/2</td>
												<td>confirmed</td>
												<td>2:00PM</td>
												<td>2:00PM</td>
												<td>
													<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary">View</button>
													<input type="button" value="update" class="btn btn-success">
												</td>

											</tr>
											<tr>
												<td>2</td>	
												<td>ratri</td>
												<td>butwal-kathmandu</td>
												<td>chauraha</td>
												<td>kalanki</td>
												<td>2073/2/2</td>
												<td>2073/2/2</td>
												<td>Pending</td>
												<td>2:00PM</td>
												<td>2:00PM</td>
												<td>
													<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary">View</button>
													<input type="button" value="update" class="btn btn-success">
												</td>

											</tr>

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
			<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
							<h3 class="modal-title" id="lineModalLabel">View Client Details</h3>
						</div>
						<div class="modal-body">

							<!-- content goes here -->
							<table class="table table-bordered table-responsive">
								<thead>
									<tr>
										<th>Customer Name</th>
										<th>Age</th>
										<th>Gender</th>
										<th>seat Number</th>
										<th>Amount</th>

									</tr>
									<thead>
										<tbody>
											<tr>
												<td>Asmit</td>
												<td>21</td>
												<td>male</td>
												<td>C12</td>
												<td>200</td>
											</tr>
										</tbody>
									</table>

								</div>
								<div class="modal-footer">
									<div class="btn-group btn-group-justified" role="group" aria-label="group button">
										<div class="btn-group" role="group">
											<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
										</div>
										<div class="btn-group btn-delete hidden" role="group">
											<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
										</div>
										<div class="btn-group" role="group">
											<button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php include "footer.php"; ?>


