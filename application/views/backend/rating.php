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
									<table class="table table-bordered" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
										<thead>
											<tr>
												<th>S.N.</th>
												<th  data-sortable="true">Bus Name</th>
												<th  data-sortable="true">Average</th>
												<th  data-sortable="true">Action</th>

											</tr>
										</thead>
										<tbody>
										<?php 
										$sn=1;
										$quality=0;$behav=0;$punct=0;
											foreach ($view as $key) {
												// $average=($key->busq+$key->ratesb+$key->punc)/($key->totalbus);
										?>
											<tr>
												<td><?php echo $sn; ?></td>
												<td><?php echo $key->bus_name ;?></td>
												<td><?php echo  $key->aver/$key->totalbus;?></td>
												<td>
													<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#squarespaceModal" data-id="<?php echo $key->bus_id ;?>" id="getUser"><i class="fa fa-fw fa-eye"></i>View</a>
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
			<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog" style="width: 1250px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">View Passengers Details</h3>
				</div>
				<div class="modal-body">
					<div id="modal-loader" style="display: none; text-align: center;">
					<img src="<?php echo base_url();?>assets/img/loader.gif" alt="">
					</div>
						<div id="dynamic-content">
							
						</div>					
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

</div> <!-- conatiner-fluid for afterSearch ends-->		
<script>
		$(document).ready(function(){

    $(document).on('click', '#getUser', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content').html(''); // leave this div blank
     $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: '<?php echo base_url();?>backend/bootstrap_modal/ratinginfo/'+uid,
          type: 'POST',
          dataType: 'html'
     })
     .done(function(data){
          //console.log(data); 
          $('#dynamic-content').html(''); // blank before load.
          $('#dynamic-content').html(data); // load here
          $('#modal-loader').hide(); // hide loader  
     })
     .fail(function(){
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
     });

    });
});
	</script>
