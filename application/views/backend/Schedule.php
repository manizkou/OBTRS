<?php include 'header.php' ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
<style type="text/css">
	.table{
		margin-top: 20px;
	}
</style>
<div id="page-wrapper">
	<div class="row">
		<!-- <div class="col-lg-12">
			<h1 class="page-header" align="center">Schedule</h1>
		</div> -->
		<!-- /.col-lg-12 -->
		
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<ul class="nav nav-tabs" style="text-align: left;">
							<li class="active"><a href="#first" data-toggle="tab" id="first_tab">Daily Schedule</a></li>
							<li><a href="#second" data-toggle="tab" id="second_tab">Route Timetable</a></li>

						</ul>
					</div>
					<div class="panel-body">
						<div class="tab-content">        
							<div id="first" class="tab-pane fade in active">
								<div class="alert alert-info alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
									<strong>Info!</strong> This alert box could indicate a neutral informative change or action.
								</div>

								<form class="form-inline">

									<label>Buses on:</label>
									<input type="button" value="today" name="today" class="form-control">
									<div class="input-group">
										      <input type="text" class="form-control" placeholder="Date"  id="teststartdate">
										      <span class="input-group-btn">
										        <button class="btn btn-secondary" type="button"><span class="fa fa-calendar fa-lg" ></span></button>
										      </span>
										    </div>
									
									<input type="button" value="print schedule" class="form-control">
									<script type="text/javascript">
											$("#teststartdate").datepicker({ minDate: 0});

										</script>
								</form>

								<table class="table table-bordered" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
									<thead >
										<tr>
											<th align="center">ID</th>
											<th>Bus</th>
											<th>Departure</th>
											<th>Arrival</th>
											<th>Ft ticket</th>
											<th>Total ticket</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>AC</td>
											<td>7:0 AM</td>
											<td>6:0 PM</td>
											<td>2</td>
											<td>4</td>
											<td><button type="button"><a href="#">Add booking</a></button></td>
										</tr>
										<tr>
											<td>1</td>
											<td>AC</td>
											<td>7:0 AM</td>
											<td>6:0 PM</td>
											<td>2</td>
											<td>4</td>
											<td><button type="button"><a href="#">Add booking</button></td>
										</tr>

									</tbody>
								</table>

							</div>   <!-- first -->

							<script type="text/javascript"> 
								$(document).ready(function()
									{ $("#first_tab").click(function () 
										{ $('#first').load('/subdirectory/#first'); 
									}); 
								}); </script>


								<!-- second tab begin -->
								<div id="second" class="tab-pane fade in ">
									<div class="alert alert-info alert-dismissible">
										<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
										<strong>Info!</strong> Route timetable
										Here you can see a departure timetable of all buses of a specific route. Use the "Select route" drop-down to choose the route you wish to display. It is weekly timetable and you can browse weeks by the "previous" and "next" links above the timetable. You can also jump to a chosen date / week timetable using the calendar date picker. To view the seats list of a bus trip click on its departure time. On mouse over you will see the number of passengers (total tickets sold) for this trip.
									</div>

									<form class="form-inline">
											
										
										<div class="input-group">
										      <input type="text" class="form-control" placeholder="Date"  id="txtstartdate">
										      <span class="input-group-btn">
										        <button class="btn btn-secondary" type="button"><span class="fa fa-calendar fa-lg" ></span></button>
										      </span>
										    </div>
										  
										<input type="button" value="print schedule" class="form-control">
										<script type="text/javascript">
											$("#txtstartdate").datepicker({ minDate: 0});

										</script>
									</form>

										<table class="table table-bordered" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
										<thead>
											<tr>
												<th>Bus</th>
												<th>Monday</th>
												<th>Tuesday</th>
												<th>wednesday</th>
												<th>Friday</th>
												<th>Saturday</th>
												<th>Sunday</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>AC</td>
												<td>7:0 AM</td>
												<td>6:0 PM</td>
												<td>6:pm</td>
												<td>6:pm</td>
												<td>10:pm</td>
											</tr>
											<tr>
												<td scope="row">1</td>
												<td>AC</td>
												<td>7:0 AM</td>
												<td>6:0 PM</td>
												<td>6:pm</td>
												<td>6:pm</td>
												<td>10:pm</td>
											</tr>

										</tbody>

									</table>


								</div>   <!-- second tab route end -->

							</div>   <!-- tab-content -->
							<!-- <nav aria-label="Page navigation example">
								<ul class="pagination navbar-right">
									<li class="page-item">
										<a class="page-link" href="#">Previous</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</nav> -->
						</div>  <!-- panel-body -->

					</div> <!-- panel -->
				</div> <!-- col-md -->
			</div> <!-- row -->
		</div> <!-- row -->
	</div> <!-- page-wrapper -->

	<?php include 'footer.php'; ?>
