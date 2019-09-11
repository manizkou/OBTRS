<div class="container-fluid" style="min-height: 420px;">
	<!--destination time and date-->
	<div class="row row-modify">
		<div class="col-md-6 col-sm-6">
			<center>
				<div class="well col-well">RETURN</div>
				<span><?php echo $from; ?></span>
				<span class="glyphicon glyphicon-arrow-right"></span>
				<span><?php echo $to; ?></span>&nbsp;&nbsp;				
				<span><?php echo $onward; ?></span>
			</center>
		</div>
		<div class="col-md-6" align="right">
			<span id="timer" style="font-size: 28px;"></span>
			<span style="font-size: 14px; margin-top: 25px;">minutes left</span>
		</div>
	</div><!-- destination time and date ends-->
	<!-- available bus info-->
	<div class="panel-heading">
					<?php
						if($this->session->flashdata('seatinfo')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i >&times</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
					}
					?>
						
	</div>
	<?php
	foreach ($searchinfo as $key ) {
		 $reserved=$this->session->userdata('bookseat');
		// $exp=var_dump(explode(',',$reserved ));
		// $imp=implode(" ",array()$exp);
		// echo $exp;
		// echo $imp;
		// exit();
		// $imp=implode('""', $reserved);
		// echo $imp.'<br>';
		// echo $reserved;
		// exit();
		?>	
		<script type="text/javascript">
			var bookedSeats<?php echo $key->bus_id; ?> = [];
			function seatBookingSystem<?php echo $key->bus_id; ?> (seatId,busid,price)
			{
				response = bookedSeats<?php echo $key->bus_id; ?>.includes(seatId);
				if (!response)
				{
      //alert('book');
      bookNew<?php echo $key->bus_id; ?> (seatId,busid,price);
  }
  else
  {
      //alert('cancel');
      cancelBooked<?php echo $key->bus_id; ?>(seatId,busid,price);

  }

}

function bookNew<?php echo $key->bus_id; ?> (seatId,busid,price)
{
	bookedSeats<?php echo $key->bus_id; ?>.push(seatId);
    // alert(bookedSeats);
    bookReport<?php echo $key->bus_id; ?>(busid,price);
}

function cancelBooked<?php echo $key->bus_id; ?>(seatId,busid,price)
{
	var seatIdIndex = bookedSeats<?php echo $key->bus_id; ?>.indexOf(seatId);
	var upseat=bookedSeats<?php echo $key->bus_id; ?>.splice(seatIdIndex,1);
    // alert(seatIdIndex);
    // alert(upseat);
    bookReport<?php echo $key->bus_id; ?>(busid,price);
}

function bookReport<?php echo $key->bus_id; ?> (busid,price)
{
	var totalSeat = bookedSeats<?php echo $key->bus_id; ?>.length;
	var totalPrice = totalSeat * parseInt(price);
    // alert(totalSeat);
    document.getElementById("tn<?php echo $key->bus_id; ?>").innerHTML = 'Total Seats:('+totalSeat + ')<br/>';
    document.getElementById("sn<?php echo $key->bus_id; ?>").innerHTML = 'Booked Seat:'+bookedSeats<?php echo $key->bus_id; ?>.toString();
    document.getElementById("tp<?php echo $key->bus_id; ?>").innerHTML = 'Total Price:'+totalPrice;

    document.getElementById('fto<?php echo $key->bus_id; ?>').value = bookedSeats<?php echo $key->bus_id; ?>.toString();
    document.getElementById('frto<?php echo $key->bus_id; ?>').value = totalPrice;
    document.getElementById('tseat<?php echo $key->bus_id; ?>').value = totalSeat;
}

function reseti<?php echo $key->bus_id; ?>(busid){
	bookedSeats<?php echo $key->bus_id; ?> = [];
	document.getElementById("seat_form<?php echo $key->bus_id;?>").reset();
	bookReport<?php echo $key->bus_id; ?>(busid,0);

}

</script> <!-- seat script ends-->
<!-- <script>
	function sessioncheck<?php echo $key->bus_id; ?>(){
		var bseat=document.getElementById("fto<?php echo $key->bus_id;?>").value;
		var sessionseat='<?php echo $reserved; ?>';
		if(sessionseat.indexOf(bseat)!>=-1){
			alert("Some");
			return false;
		}else{
			return true;
		}
		
	}
</script> -->


<ul class="row ulist">
<form method="post" action="<?php echo base_url();?>passenger_info/returnbus" class="col-md-12" id="seat_form<?php echo $key->bus_id;?>" onsubmit="sessioncheck<?php echo $key->bus_id; ?>()">
		<li>
			<div class="row">

				<div class="col-md-3 col-sm-4">
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
				<div class="col-md-3 col-sm-2">
					<p>
						<b>
							<?php
							$time = "$key->start_time";
							$time2 = "$key->stime minutes";

							$startstamp = strtotime($time." +".$time2);
							$startTime = date("h:i a", $startstamp);
							?>
							<?php
							$time = "$key->end_time";
							$time2 = "$key->etime minutes";

							$endstamp = strtotime($time." -".$time2);
							$endTime = date("h:i a", $endstamp);
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
				<?php
				$select=$this->db->query("SELECT rating.busid,sum(average) 'aver',ratesb,busq,COUNT(rating.busid) 'totalbus' FROM rating WHERE busid='$key->bus_id'GROUP BY rating.busid");
				$sel=$select->result();	
				if($select->num_rows()>0){ 
					foreach ($sel as $busrating):
						$divide=$busrating->aver/$busrating->totalbus;
						$sub=substr($divide,0,3);
				?>
					<p class="col-sm-offset-1"> <span class="rating rate-as"><?php echo number_format($sub,1);?>/5</span></p>

					<p class="col-sm-offset-1" id="reviewModalBtn" data-toggle="modal" data-target="#reviewModal" data-id="<?php echo $key->bus_id;?>" style="cursor: pointer;"> View  <?php echo $busrating->totalbus;?> reviews</p>	
					<?php 
					endforeach;
						}else{
							?>
					<p class="col-sm-offset-1"> <span class="rating rate-as">5.0/5</span></p>

					<p class="col-sm-offset-1">(0 ratings)</p>	

					<?php 
						}
					 ?>							
				</div>
				<div class="col-md-2 col-sm-2">
					<?php
				$select=$this->db->query("SELECT bus_id,depart_date,COUNT(seat) 'bseat' FROM passenger_details WHERE bus_id='$key->bus_id' AND depart_date='$onward' GROUP BY passenger_details.bus_id");
				$sel=$select->result();	
				if($select->num_rows()>0){ 
					foreach ($sel as $seat):
						$m=$key->maxseat;
						$c=$seat->bseat;
				?>
					<p>

						<span class="mod-span"><b><?php echo ($m-$c); ?> Seats</b></span>
					</p>

				<?php endforeach; 
					}else{
				?>
				<p>
						<span class="mod-span"><b><?php echo $key->maxseat; ?> Seats</b></span>
					</p>
					<?php } ?>

					<p>

						<span><?php echo $key->reg_name; ?></span>

					</p>
				</div>



				<div class="col-md-2 col-sm-2">
					<span class="mod-span"><b>NRS <?php echo $key->price + $key->btype_price; ?></b></span>
					<button type="button" class="btn btn-info btn-pad busSearch reveal" data-toggle="collapse" data-target="#collapseExample<?php echo $key->bus_id;?>" aria-expanded="false" aria-controls="collapseExample<?php echo $key->bus_id;?>" onclick="reseti<?php echo $key->bus_id; ?>(<?php echo $key->bus_id;?>)">
						VIEW SEATS
					</button>			
				</div>
			</div> <!-- row upper part part of bus info-->
			<div class="row">
				<div class="col-md-12 table-col">
					<div class="collapse" id="collapseExample<?php echo $key->bus_id;?>">
						<div class="card card-block" style="padding-bottom: 50px;">
							<div class="row">
								<div class="col-md-6" id="hold" style="position: relative; top:30px; left:80px;">
									<table class="seat">

							<?php 

							$total=$key->total_seat;
							$r=$key->layout;//$r is the value that is taken from the martix layout
							// $totall=$total+2;
							switch ($total) {
								case '47':
									$k=12;
									break;
								case '43':
									$k=11;
									break;
								case '39':
									$k=10;
									break;
								case '35':
										$k=9;
										break;
								case '31':
									$k=8;
									break;
								case '27':
									$k=7;
									break;
								
								case '23':
									$k=6;
									break;
								case '19':
									$k=5;
									break;
								case '15':
									$k=4;
									break;
								default:
									$k=10;
									break;
							}
							
							if($r==5){
						$i=$total+($k+1);
						}elseif($r==4){
							$i=$total+($k);
						}
						$l=$i/$r;//5 is the value of row taken from matrix layout
						//$j=$i/$l;//$j is row and $k is column
						if($r==5){
								$column=$l ;
								$gap=$l-1;
							 }elseif($r==4){
								$column=$l+1;
								$gap=$l;		
							};

							
							$s=1;
							$z=0;
							$a=0;
							$c=1;
							$b=-1;
							$d=-2;
							$count=1;

							for ($row = 1; $row <= $r; $row++) {
								
								?>
							<tr>
								<?php
								for ($col = 1; $col <= $column; $col++) {	

									if($row==3&&$col>=1&&$col<=$gap){
									echo"<td></td>";
									// $c=$row*$col+2;
									}elseif($row==4&&$col==1||$row==5&&$col==1){
										echo "<td></td>";
									
									?>
									<?php 
									}else{
										if($row==1){				
										$s='A'.($row*$col+$z);
										$z=$z+1;		
									}
									elseif($row==2){				
										$s='A'.($row*$col+$a);
										$a=0;	
									}
									elseif ($row==3) {
										if($r==5){
										$s='A'.($col*2+1);
										}elseif($r==4){
											$s='B'.($col+1);
										}
									}
									elseif($row==4){
										if($r==5){									
											$s='B'.(1*$col+$b);
											$b=($b+1);
										 

										}elseif($r==4){

											$s='B'.($c);
											$c++;
										}
									}
									elseif($row==5){
										$s='B'.(2*$col+$d);
										$d=0;								
									}		
									?>
									<?php 
									$select=$this->db->query("SELECT * FROM passenger_details WHERE seat='$s' AND bus_id='$key->bus_id' AND depart_date='$onward'");
										$display=($select->num_rows()==0);
										$disable = $display?'':'disabled="disabled"'; 
										
										?>
										<?php 
									$date=date("Y/m/d");
									date_default_timezone_set('Asia/Kathmandu');
									$next=strtotime("-480 seconds");
									$sel=$this->db->query("SELECT * FROM temp_data WHERE busid='$key->bus_id' AND tempseat='$s' AND c_date='$date' AND c_time>=$next");
										$display=($sel->num_rows()==0);
										$dis = $display?'':'disabled="disabled"'; 
										
										?>			
									<td>			
										<input type="checkbox"  id="asiento<?php echo $count * $key->bus_id; ?>" value="<?php echo $s; ?>" name="spam[]" onchange="seatBookingSystem<?php echo $key->bus_id; ?>('<?php echo $s; ?>',<?php echo $key->bus_id;?>,<?php echo $key->price+$key->btype_price;?>)" class="limitcheckbox<?php echo $key->bus_id; ?>" <?php echo $disable;?> <?php echo $dis;?>/><label for="asiento<?php echo $count * $key->bus_id; ?>"><?php echo $s;?></label>
									&nbsp;
									</td>		
								<?php
								// $count++;
								 	}
								 	$count++;
							}
							}
						echo "</tr>";

							
							?>
						</table>
						<div class="seat-list">
								<div class="avai-seat">
									<div class="avai-layout">
									<div class="legend-label">&nbsp;&nbsp;Available</div>
									</div>
									
									
								</div>
								<div class="book-seat">
									<div class="booked-layout" style="margin-left: 90px;">
									<div class="legend-label">&nbsp;&nbsp;Booked</div>
									</div>
									
								</div>
								<div class="sel-seat">
									<div class="sel-layout" style="margin-left: 200px;">
									<div class="legend-label">&nbsp;&nbsp;Selected</div>
									</div>
									
								</div>
						</div>
					</div>
								<div class="col-md-3 proceed">
									<div id="tn<?php echo $key->bus_id;?>"><p>Total Seat(0)</p></div>
									<br>
									<div id="sn<?php echo $key->bus_id;?>">Selected Seats</div>
									<br>
									<div id="tp<?php echo $key->bus_id;?>">Rs. 0 </div>
									<input type="hidden" id="fto<?php echo $key->bus_id;?>" value="" name="returnbookedseat">
									<input type="hidden" id="frto<?php echo $key->bus_id;?>" value="" name="returntprice">
									<input type="hidden" id="tseat<?php echo $key->bus_id;?>" value="" name="returntseat">
									<input type="hidden" id="bid" value="<?php echo $key->bus_id;?>" name="returnbid">
									<input type="hidden" id="starttimeid" value="<?php echo $startTime;?>" name="returnstarttime">
									<input type="hidden" id="endtimeid" value="<?php echo $endTime;?>" name="returnendtime">
									<br>
									<p>Choose Boarding Point:</p>
									<center>
										<select name="pickpoint" id="" class="form-control" required="required">
										<option value="" selected="selected">--Choose--</option>
										<?php
										foreach ($pickupinfo as $pick):
										?>
										<option value="<?php echo $pick->dpoint; ?>"><?php echo $pick->dpoint; ?></option>
										<?php endforeach; ?>
									</select>
											
									<input type="submit" value="PROCEED" class="btn btn-primary busSearch radoff-btn proceed-btn" disabled style="visibility:hidden;"></center>
									<script type="text/javascript">
										$(document).ready(function(){
											$('#seat_form<?php echo $key->bus_id;?> input:checkbox').change(function() {
												var a = $('#seat_form<?php echo $key->bus_id;?> input:checked').filter(":checked").length;
												if (a == 0) {
													$('.proceed-btn').prop('disabled', true);
													$('.proceed-btn').css('visibility','hidden');
												} else {
													$('.proceed-btn').prop('disabled',false);
													$('.proceed-btn').css('visibility','visible');
												}
											});


										});
									</script>
								</div>
								<div class="col-md-3" style="margin-left: 20px;">
									<div class="card" style="background: #d8d8d8; border-radius: 1px;
									display: inline-block;height:210px;position: relative;width: 210px; margin-top:30px; margin-left: 10px;">
									<img src="<?php echo base_url();?>assets/backend/gallery/<?php echo $key->image;?>" alt="" height="200" width="200" style="position:relative; top:5px; left:5px;">
									</div>
									<a class="btn btn-info btn-pad busSearch btn-xs" data-toggle="modal" data-target="#squarespaceModal" data-id="<?php echo $key->bus_id;?>" id="getUser" style="position: relative; left: 0px; margin-top:8px; "><i class="fa fa-fw fa-eye"></i>View More Details</a>
									<a class="btn btn-info btn-pad busSearch btn-xs" data-toggle="modal" data-target="#squarespaceModal" data-id="<?php echo $key->bus_id;?>" id="getMap" style="position: relative; left: 10px; margin-top:8px; "><i class="fa fa-fw fa-eye"></i>See Route map</a>
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
<!-- bootstrap modal for view more details -->
	<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">View all Bus Details</h3>
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
	<!-- review comment begins -->
				<div id="reviewModal" class="modal">

					<div class="clocirc"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button></div>
					<!-- Modal content -->
					<div id="review-modal-loader" style="display: none; position: absolute; left:40%; top:30%">
							<img src="<?php echo base_url();?>assets/img/page_load.gif" alt="">
					</div> 
					<div id="review-modal-content">
						
						<!-- load data from here.. -->
					</div>

				</div>
<!-- review comment ends -->

</div> <!-- conatiner-fluid for afterSearch ends-->	
<script>
	$('.reveal').click(function() {
		if ($(this).text() === 'HIDE SEATS') {
			$(this).text('VIEW SEATS');
		}
		else {
			$(this).text('HIDE SEATS');
			$('.proceed-btn').css('visibility','hidden');
		}
	});
</script>	
<script>
		$(document).ready(function(){

    $(document).on('click', '#getUser', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content').html(''); // leave this div blank
     $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: '<?php echo base_url();?>home/getreturndetails/'+uid,
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
		<script>
		$(document).ready(function(){

    $(document).on('click', '#getMap', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content').html(''); // leave this div blank
     $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: '<?php echo base_url();?>home/getmap/'+uid,
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
	<script>	
		$("input:checkbox").click(function(){
    if ($("input:checkbox:checked").length > 4){
      alert("You Cannot Book more than 4 Bus Tickets");
      return false;
   }
});

	</script>
					<script>
    window.onload = function(){

      var second = 01;
      var minute = 08;
      if(localStorage.getItem("counter")){
        if(localStorage.getItem("counter") >=59 ){
          var second = 01;
        }else{
          var second = localStorage.getItem("counter");
          var minute=localStorage.getItem("minute");
        }
      }else{
        var second = 01;
        var minute = 08;
      }
      document.getElementById("timer").innerHTML = minute + ":" + second;

      setInterval(function(){
        if(second == 00){
          localStorage.setItem("counter",00);
          minute--;
          localStorage.setItem("minute",minute);
          second = 59;

        }else{
          second--;
          localStorage.setItem("counter", second);
          localStorage.setItem("minute",minute);
        }
        // if(second == 00){
        //   minute--;
        //   second = 60;
        // }
        document.getElementById("timer").innerHTML = minute + ":" + second;
      //second--;




      if(minute == 0 && second == 0){
      // document.getElementById("timer").innerHTML = "Timer Stopped";
      alert("Your session time has expired");
      window.location.href="<?php echo base_url(); ?>contact";

       //window.history.back();

     }
     if(minute <= -1) {
      localStorage.setItem("counter",59);
      localStorage.setItem("minute",08);
    }
  }, 1000);
    }

  </script>
  	<script>
		$(document).ready(function(){

    $(document).on('click', '#reviewModalBtn', function(e){
  
     e.preventDefault();
  
    var uid = $(this).data('id'); // get id of clicked row
  
     $('#review-modal-content').html(''); // leave this div blank
     $('#review-modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: '<?php echo base_url();?>home/remain/'+uid,
          type: 'POST',
          dataType: 'html'
     })
     .done(function(data){
          //console.log(data); 
          $('#review-modal-content').html(''); // blank before load.
          $('#review-modal-content').html(data); // load here
          $('#review-modal-loader').hide(); // hide loader  
     })
     .fail(function(){
          $('#review-modal-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#review-modal-loader').hide();
     });

    });
});
	</script>
</body>
</html>