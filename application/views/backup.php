<div class="container-fluid" style="min-height: 420px;">
		<!--destination time and date-->
		<div class="row row-modify">
			<div class="col-md-6 col-sm-6">
				<center>
					<div class="well col-well">ONWARD</div>
					<span><?php echo $from; ?></span>
					<span class="glyphicon glyphicon-arrow-right"></span>
					<span><?php echo $to; ?></span>&nbsp;&nbsp;				
					<span><?php echo $onward; ?></span>
				</center>
			</div>

			<div class="col-md-6 col-sm-6">
				<center>
					<div class="well col-well">RETURN</div>
					<span><?php echo $to; ?></span>
					<span class="glyphicon glyphicon-arrow-right"></span>
					<span><?php echo $from; ?></span>&nbsp;&nbsp;
					<span><?php echo $returndate; ?></span>
				</center>
			</div>

		</div><!-- destination time and date ends-->
		<!-- available bus info-->
		<?php
		foreach ($searchinfo as $key ) {
			?>	
	<ul class="row ulist">
		<form method="get" action="<?php echo base_url();?>seat/View/<?php echo $key->bus_id; ?>" class="col-md-12" id="seat_form">
			<li>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="col-md-12">
							<p>
								<i class="fa fa-bus fa-lg" aria-hidden="true"></i>
										&nbsp;
									<span class="mod-span"><b><?php echo $key->bus_name; ?></b></span>
										<p class="col-md-offset-1 col-sm-offset-1">
											<?php echo $key->btype; ?>
										</p>
							</p>

							<p class="col-md-offset-1 col-sm-offset-1">
								<?php
									$explode=explode(',',$key->amenities);
									foreach ($explode as $amei) {
								?>
								<i class="fa fa-<?php echo $amei; ?>" aria-hidden="true"></i>&nbsp;
								<?php
									}
								?>
							</p>	
						</div>	
					</div>
					<div class="col-md-2 col-sm-2">
								<p>
									<b>
										<?php
										$time = "$key->start_time";
										$time2 = "$key->stime minutes";

										$startstamp = strtotime($time." +".$time2);
										$startTime = date("H:i", $startstamp);
										?>
										<?php
										$time = "$key->end_time";
										$time2 = "$key->etime minutes";

										$endstamp = strtotime($time." -".$time2);
										$endTime = date("H:i", $endstamp);
										?>
										<span class="mod-span"><?php echo $startTime; ?></span>
										&nbsp;
										<span class="glyphicon glyphicon-arrow-right mod-span"></span>
										&nbsp;
										<span class="mod-span"><?php echo $endTime; ?></span>
									</b>
								</p>

								<p>
									Time Difference:
									<?php 
									$e=strtotime($endTime);
									$s=strtotime($startTime);
									$hours=($e-$s)/3600;
									echo floor($hours) . ':' . ( ($hours-floor($hours)) * 60 ); 
									?>
									hrs
								</p>
							</div>

							<div class="col-sm-2">
								<p class="col-sm-offset-1"> <span class="rating rate-as">4.4/5</span></p>

								<p class="col-sm-offset-1">(635 ratings)</p>								
							</div>

							<div class="col-md-2 col-sm-2">
								<p>
									<span class="mod-span"><b><?php echo $key->maxseat; ?> seats</b></span>
								</p>
								<p>

									<span><?php echo $key->reg_name; ?></span>

								</p>
							</div>



							<div class="col-md-2 col-sm-2">
								<span class="mod-span"><b>NRS <?php echo $key->price; ?></b></span>
								<button type="button" class="btn btn-info btn-pad busSearch reveal" data-toggle="collapse" data-target="#collapseExample<?php echo $key->bus_id;?>" aria-expanded="false" aria-controls="collapseExample<?php echo $key->bus_id;?>" onclick="reseti(<?php echo $key->bus_id;?>)">
									VIEW SEATS
								</button>			
							</div>
						</div> <!-- row upper part part of bus info-->
						<div class="row">
							<div class="col-md-12 table-col">
								<div class="collapse" id="collapseExample<?php echo $key->bus_id;?>">
									<div class="card card-block">
										<div class="row">
											<div class="col-md-6">
													<table class="seat" >
												<tr>
													<?php 
													$count=1;
													for($i=1;$i<=$key->total_seat-$key->lrow;$i++){

														?> 
														<?php
														if($i % $key->layout == 0){

															?>


															<td> 

																<input type="checkbox"  id="asiento<?php echo $count * $key->bus_id; ?>" value="<?php echo $i; ?>" name="spam[]" onchange="seatBookingSystem(<?php echo $i; ?>,<?php echo $key->bus_id;?>,<?php echo $key->price;?>)"/><label for="asiento<?php echo $count*$key->bus_id; ?>"><?php echo $count;?></label>


															</td>
															<?php
															echo'</tr>';
															echo'<tr>';
														}else{

															?>

														<td> 
																<input type="checkbox"  id="asiento<?php echo $count*$key->bus_id; ?>" value="<?php echo $i; ?>" name="spam[]" onchange="seatBookingSystem(<?php echo $i; ?>,<?php echo $key->bus_id;?>,<?php echo $key->price;?>)"/><label for="asiento<?php echo $count*$key->bus_id; ?>"><?php echo $count;?></label>

															</td>
															<?php 
															if($key->layout==3){

																if($i % 3 == 2){
																	echo'<td></td>';
																}
															}elseif($key->layout == 4)
															{
																if($i % 2 == 0){
																	echo'<td></td>';
																}
															}elseif($key->layout ==3){
																if($i % 3 == 1){
																	echo'<td></td>';
																}
															}
															?>
															<?php    
														}
														$count++;
													}

													?>
												</tr>
												<tr>
													<?php
													$count=$key->total_seat-$key->lrow+1;
													$c= $count;



													for($i=$c;$i<=$c+$key->lrow-1;$i++){

														?> 

														<td> 
															<input type="checkbox"  id="asiento<?php echo $count*$key->bus_id; ?>" value="<?php echo $i; ?>" name="spam[]" onchange="seatBookingSystem(<?php echo $i;?>,<?php echo $key->bus_id;?>,<?php echo $key->price;?>)"/><label for="asiento<?php echo $count*$key->bus_id; ?>"><?php echo $count;?></label>

														</td>
														<?php
														$count++;
													}
													?>
												</tr>
												<!--  -->

											</table>
											</div>
											<div class="col-md-6">
												<div id="tn<?php echo $key->bus_id;?>">Total Seat(0)</div>
												<div id="sn<?php echo $key->bus_id;?>">Selected Seats</div>
												<div id="tp<?php echo $key->bus_id;?>">Rs. 0 </div>
											</div>
											<div class="col-sm-6 col-xs-12" style="margin-top: 5px;">    
												<input type="hidden" id="fto<?php echo $key->bus_id;?>" value="">
												<input type="hidden" id="frto<?php echo $key->bus_id;?>" value="">
												<input type="submit" value="PROCEED" class="btn btn-primary busSearch radoff-btn">
											</div>
										</div>

										
									</div>
								</div>
							</div>
							
						</div>	

					</li>					
					<hr>

				</form>							

			</ul>	

			<?php 

		}
		?>	
		<!--available bus info ends-->

	</div> <!-- conatiner-fluid for afterSearch ends-->	
	<script>
		$('.reveal').click(function() {
    if ($(this).text() === 'HIDE SEATS') {
         $(this).text('VIEW SEATS');
    }
    else {
        $(this).text('HIDE SEATS');
    }
});
	</script>	
	 <script type="text/javascript">
    var bookedSeats = [];
    function seatBookingSystem (seatId,busid,price)
    {
      response = bookedSeats.includes(seatId);
      if (!response)
      {
      //alert('book');
      bookNew (seatId,busid,price);
    }
    else
    {
      //alert('cancel');
      cancelBooked(seatId,busid,price);

    }

  }

  function bookNew (seatId,busid,price)
  {
    bookedSeats.push(seatId);
    // alert(bookedSeats);
    bookReport(busid,price);
  }

  function cancelBooked(seatId,busid,price)
  {
    var seatIdIndex = bookedSeats.indexOf(seatId);
    var upseat=bookedSeats.splice(seatIdIndex,1);
    // alert(seatIdIndex);
    // alert(upseat);
    bookReport(busid,price);
  }

  function bookReport (busid,price)
  {
    var totalSeat = bookedSeats.length;
    var totalPrice = totalSeat * parseInt(price);
    // alert(totalSeat);
    document.getElementById("tn"+busid).innerHTML = 'Total Seats:('+totalSeat + ')<br/>';
    document.getElementById("sn"+busid).innerHTML = 'Booked Seat:'+bookedSeats.toString();
    document.getElementById("tp"+busid).innerHTML = 'Total Price:'+totalPrice;

    document.getElementById('fto'+busid).value = bookedSeats.toString();
    document.getElementById('frto'+busid).value = totalPrice;
  }

  

  var data={
    "reservedSeats": ['1','3','25','40']
  };
  var ass=data.reservedSeats
  $("input[name='spam[]']").each( function(i,j) {
    if(jQuery.inArray($(j).val(), ass) != -1){
    $(j).prop('disabled', true);//this disables already booked seats no from server data           
  }

});
  function reseti(busid){
		document.getElementById("seat_form").reset();
		document.getElementById("tn"+busid).innerHTML = 'Total Seats:';
    	document.getElementById("sn"+busid).innerHTML = 'Booked Seat:';
    	document.getElementById("tp"+busid).innerHTML = 'Total Price:';
    	// bookedSeats.toString()==null;
    	
	}

</script> <!-- seat script ends-->

</body>
</html>