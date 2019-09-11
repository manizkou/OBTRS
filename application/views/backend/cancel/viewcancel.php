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
									
									<h3 align="center">View cancelation details</h3><hr>
									

									<table class="table table-bordered table-responsive" data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
										<thead>
											<tr>

												<th>S.N.</th> 
												<th>Ticket ID</th>
												<th>Bus Name</th>
												<th>Phone</th>
												<th>Depart Date</th>
												<th>Cancel Date</th>
												<th>Status</th>
												<th>Action</th>
												
												
											</tr>
										</thead>
										<tbody>

										<?php 
										$sn=1;
										$count=1;
										foreach ($cancelinfo as $key):
											
										?>
											<tr>
												<td><?php echo $sn;?></td>
												<td><?php echo $key->ticket_id;?></td>
												<td><?php echo $key->bus_name;?></td>
												<td><?php echo $key->phone;?></td>
												<td><?php echo $key->depart_date;?></td>
												<td><?php echo $key->cancel_date;?></td>
												<td>

												<input type="radio" name="<?php echo $count;?>"
												<?php if($key->status=='paid'){
													echo "checked";
												}?> onclick="changestatus('<?php echo  $key->ticket_id; ?>','paid')">Paid 


												<input type="radio" name="<?php echo $count;?>"
												<?php if ($key->status=='pending' ){
													echo"checked";}?> onclick="changestatus('<?php echo $key->ticket_id; ?>','pending')">Pending
											</td>
												<td><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#squarespaceModal" data-id="<?php echo $key->ticket_id ;?>" id="getCancelinfo"><i class="fa fa-fw fa-eye"></i>View</a></td>
												
												
									
											</tr>
											<?php
												$sn++;
												$count++;
											endforeach;
											?>
									

										</tbody>
									</table>

								</div>  
							</div>  <!-- panel-body -->
						</div> <!-- panel -->
					</div> <!-- col-md -->
				</div> <!-- row -->
			</div> <!-- row -->
		</div> <!-- page-wrapper -->
		<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
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

    $(document).on('click', '#getCancelinfo', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content').html(''); // leave this div blank
     $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: '<?php echo base_url();?>backend/bootstrap_modal/viewCancelinfo/'+uid,
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
	<script type="text/javascript">
	function changestatus(id,status){
		$.post('<?php echo base_url(); ?>backend/cancel/changestatus',{ticket_id:id,status:status},function(response){
			response=JSON.parse(response);
			if(response.successMsg){
				alert(response.successMsg);
			}else{
				window.location.reload();
			}
		}
	);
	}
	
	</script>


