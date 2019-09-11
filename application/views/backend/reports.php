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
			<div class="col-md-12">

			<div class="panel panel-default">

				<div class="panel-heading">

					<ul class="nav nav-tabs" style="text-align: left;">

						<li class="active"><a href="#first" data-toggle="tab" id="first_tab">Bus</a></li>

						<li><a href="#second" data-toggle="tab" id="second_tab">Route</a></li>

					</ul>
				</div>

				<div class="panel-body">

					<div class="tab-content">   

						<div id="first" class="tab-pane fade in active">

							<div class="alert alert-info alert-dismissible">

								<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>

								<strong>Info!</strong>Bus Reports
								Use the form below to generate a report about the performance and revenues of a selected bus. You can choose between "up to date" report or report for chosen by you date to date time period.
							</div>

							<form class="form-inline">

								<div class="row">

									<div class="form-group col-md-6">

										<label for="route" >route: </label>
										<select class="form-control">
											<option>---choose---</option>
											<option >Btl-ktm</option>
											<option>btl-pkr</option>
										</select>

									</div>
									<div class="form-group col-md-6">

										<label for="bus">Bus: </label>
										<select class="form-control">
											<option>---choose----</option>
											<option>AC</option>
											<option>Sleeper</option>
										</select>

									</div>

								</div>
								<br>
								<div class="row">

									<div class="col-md-6">

										<label for="time-scale">Time Scale: </label>
										<select class="form-control" id="sel" name="form_select" onchange="show(this)">
											<option value="">---choose----</option>
											<option value="0" id="up">Uptodate</option>
											<option value="1" id="DtoD">date to date</option>
										</select>

									</div>

								</div><br><br>

								<div class="row" id="hidden-div" style="display: none;">

									<div class="col-md-6">

										<label for="from">From:</label>
										<input type="date" name="From" class="form-control">
										
									</div>

									<div class="col-md-6">
									
										<label for="to">To:</label>
										<input type="date" name="To" class="form-control">
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-3">
										<input type="submit" value="Generate" name="generate" class="form-control btn btn-success">	
									</div>
								</div>
							</form>
							<script type="text/javascript">
								function show(elem){
									if(elem.value == 1){
										document.getElementById('hidden-div').style.display = "block";
									}

									else{
										document.getElementById('hidden-div').style.display = "none";
									}
								}
							</script>


						</div>   <!-- first -->




						<!-- second tab begin -->
						<div id="second" class="tab-pane fade in ">
							<div class="alert alert-info alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times</i></button>
								<strong>Info!</strong> Route Reports

								Use the form below to generate a report about the total performance and revenues of all buses from a selected route. You can choose between "up to date" report or report for chosen by you date to date time period.
							</div>

							<form class="form-inline">
								
								<div class="row">
									<div class="col-md-2">
										<label for="route">Routes</label>
									</div>
									<div class="col-md-4">
										<select class="form-control">
											<option value="">Samrat</option>
											<option value="">Asmit</option>
											<option value="">Manish</option>
											<option value="">Suman</option>
										</select>
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-2">
										<label for="time-scale">Time Scale: </label>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="test" name="form_select" onchange="showDiv(this)">
											<option value="">---choose----</option>
											<option value="2" id="up">Uptodate</option>
											<option value="3" id="DtoD">date to date</option>
										</select>	

									</div>
								</div><br><br>
								<div class="row" id="hidden" style="display: none;">
									<div class="col-md-6">
										<label for="from">From:</label>
										<input type="date" name="From" class="form-control">
										
									</div>
									<div class="col-md-6">
										<label for="to">To:</label>
										<input type="date" name="To" class="form-control">
									</div>
								</div><br>

								<div class="row">
									<div class="col-md-3">
										<input type="Submit" value="Generate" name="Generate" class="btn btn-success">
									</div>
								</div>
							</form>

						</div>   <!-- second tab route end -->

					</div>   <!-- tab-content -->

				</div>  <!-- panel-body -->

			</div> <!-- panel -->
		</div> <!-- col-md -->
	</div> <!-- row -->
</div> <!-- row -->
</div> <!-- page-wrapper -->

<?php include 'footer.php'; ?>

<script type="text/javascript">
	function showDiv(me){
		if(me.value == 3){
			document.getElementById('hidden').style.display = "block";
		}

		else{
			document.getElementById('hidden').style.display = "none";
		}
	}
</script>

