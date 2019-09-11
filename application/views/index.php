<div class="container-fluid">
		<div class="row padded" style="background:url(<?php echo base_url();?>assets/img/map.jpg) no-repeat;">

			<center>
				<h1 style="color: #fff; font-family:Lato; line-height:0px; font-weight: 800; margin-top: 70px;">Online Bus Ticket Booking Made Easy</h1>
				<form class="form-inline padded-form" method="POST" action="<?php echo base_url();?>home/search" utf-decode>
					<div class="form-group inl">
						<label class="sr-only" for="from">From</label>

						 <select class="special-flexselect form-control changeCol" id="from" name="from" tabindex="1"  data-placeholder="FROM" required>
       						 <option value="<?php echo set_value('from');?>"><?php echo set_value('from');?></option>
       						 <?php
       						 foreach ($myfrom as $key):
       						 ?>
        					<option value="<?php echo $key->board;?>"><?php echo $key->board;?></option>
        				<?php endforeach;?>
        
      					</select>
					</div>
					<div class="form-group inl">
						<label class="sr-only" for="to">To</label>
						<select class="special-flexselect form-control changeCol" id="to" name="to" tabindex="1"  data-placeholder="TO" required>
       						 <option value="<?php echo set_value('to');?>"><?php echo set_value('to');?></option>
       						 <?php
       						 foreach ($myto as $key):
       						 ?>
        					<option value="<?php echo $key->drop_point;?>"><?php echo $key->drop_point;?></option>
        				<?php endforeach;?>
        
      					</select>
					</div>

					<div class="form-group inl">
						<label class="sr-only" for="onwardDate">ONWARD DATE</label>
						<input type="text" class="form-control changeCol" id="onwardDate" name="onwarddate" 
						placeholder="ONWARD DATE" required="required" autocomplete="off" value="<?php echo set_value('onwarddate');?>" readonly="true">
					</div>
					<div class="form-group inl">
						<label class="sr-only" for="returnDate">RETURN DATE</label>
						<input type="text" class="form-control changeCol" id="returnDate" name="returndate" 
						placeholder="RETURN DATE(optional)" autocomplete="off" value="<?php echo set_value('returndate');?>" readonly="true">
					</div>
					<button type="submit" class="btn btn-info form-control busSearch">Search Buses</button>		
				</form>
						<div class="panel-heading">
					<?php
						if($this->session->flashdata('response')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible" id="success-alert">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times;</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
							}
						?>
							<?php
						if($this->session->flashdata('signuperrors')==TRUE){
					?>
						<div class="alert alert-info alert-dismissible" id="success-alert">
							<button type="button" class="close" data-dismiss="alert" aria-lael="close"><i>&times;</i></button>
							<strong><?php echo $this->session->flashdata('message'); ?></strong>
						</div>
						<?php
							}
						?>
						</div>
			
			</center>
</div>

		
		<div class="row upfoot"> <!-- upper footer -->
			<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 "><i class="fa fa-bus fa-lg" aria-hidden="true">&nbsp;&nbsp;<span>6700 ROUTES </span></i></div>
			<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1"><i class="fa fa-users fa-lg" aria-hidden="true">&nbsp;&nbsp;<span>1800 BUS OPERATORS</span></i></div>
			<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 "><i class="fa fa-ticket fa-lg" aria-hidden="true">&nbsp;&nbsp;<span>600000+ TICKETS SOLD</span></i></div>
		</div> <!-- upper footer ends -->
	
	
</div>
<!--container fluid ends-->
<?php
$nodate=date("m/d/Y");
date_default_timezone_set('Asia/Kathmandu');
if(isset($_COOKIE['notifyfrom']) AND isset($_COOKIE['notifyto']) AND isset($_COOKIE['notifybusname']) AND ($nodate<$_COOKIE['notifyonward'])) 
{ 
	$tseat=$_COOKIE['notifytseat'];
	$busseat=$_COOKIE['notifybusseat'];
	$onward=$_COOKIE['notifyonward'];
	$busid=$_COOKIE['notifybusid'];
	?>
<div id="snackbar">
	<span class="close" onclick="document.getElementById('snackbar').style.display='none'" style="float: right; margin-top: -15px; margin-left: 5px; color: #fff;" aria-hidden="true">×</span>
	<span class="enve col-sm-2" style="color:#fff;"><i class="fa fa-bus fa-lg fabus" aria-hidden="true"></i></span>
	<div>
		<h4><?php echo $_COOKIE['notifyfrom'];?> To <?php echo $_COOKIE['notifyto'];?></h4>
		<p><?php 
		echo date("l jS \of F Y",strtotime($onward)); 
		?></p>
		<p style="color: #0FA46D;"><?php echo $_COOKIE['notifybusname'];?>:
		<?php
		
		$exp=explode(',',$busseat);
		for($i=0;$i<$tseat;$i++){
			$seat_part=$exp[$i];
			$select=$this->db->query("SELECT depart_date,bus_id,seat FROM passenger_details WHERE depart_date='$onward' AND seat='$seat_part' AND bus_id='$busid'");
			$sel=$select->result();
			if($select->num_rows()==0){
				echo $seat_part;
				if($i+1!=$tseat){
					echo ',';
				}
			}

		}
			?>
		Available</p>
	<div>
		<form name='fr' action="<?php echo base_url();?>home/search" method='POST'>
			<input  type="hidden" name="from" value="<?php echo $_COOKIE['notifyfrom'];?>">
			<input type="hidden" name="to" value="<?php echo $_COOKIE['notifyto'];?>">
			<input type="hidden" name="onwarddate" value="<?php echo $_COOKIE['notifyonward'];?>">
			<button type="submit" class="finish">Finish Your Booking</button>
		</form>
	</div>
	
	</div>

</div>
<?php 
}
?>

	<script type="text/javascript">

		$(document).ready(function(){
			$(".changeCol").focus(function(){
				$(this).css("background-color","#2fb682").css("color","white");
			});
			$(".changeCol").blur(function(){
				$(this).css("background-color","#ffffff").css("color","#2fb682");
			});
		});	
	</script>

	<!-- script for datepicker -->
	<script>
		$( function() {
			var dateFormat = "mm/dd/yy",
			
			onwardDate = $( "#onwardDate" ).datepicker({
				// defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1,
				showAnim:"slideDown",
				minDate: new Date(),				
			})
			.on( "change", function() {
				returnDate.datepicker( "option", "minDate", getDate( this ));
			}),
			returnDate = $( "#returnDate" ).datepicker({
				// defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1,
				showAnim:"slideDown",
				minDate: new Date(),
				
			})
			.on( "change", function() {
				onwardDate.datepicker( "option", "maxDate", getDate( this ) );
			});

			function getDate( element ) {
				var date;
				try {
					date = $.datepicker.parseDate( dateFormat, element.value );
				} catch( error ) {
					date = null;
				}

				return date;
			}
		} );
	</script>
	<!-- script for datepicker ends -->
	<script>
		$(document).ready(function() {
			 if(!$('#from').val()){
			$('#from').focus();
			$('#from').css('border-color', 'red');
		}
	});
		$(document).ready(function() {
			<?php if(form_error('to', '<span class="err2" id="errEmail">', '</span>') != ''): ?>
			$('#To').focus();
			$('#To').css('border-color', 'red');
		<?php endif; ?>;
	});
		$(document).ready(function() {
			<?php if(form_error('onwarddate', '<span class="err2" id="errEmail">', '</span>') != ''): ?>
			$('#onwardDate').focus();
			$('#onwardDate').css('border-color', 'red');
		<?php endif; ?>;
	});
		$(document).ready(function() {
			<?php if(form_error('returndate', '<span class="err2" id="errEmail">', '</span>') != ''): ?>
			$('#returnDate').focus();
			$('#returnDate').css('border-color', 'red');
		<?php endif; ?>;
	});
</script>
<script>
	$("#success-alert").fadeTo(3000,500).slideUp(500, function(){
    $("#success-alert").slideUp(800);
});
</script>
<script>
	window.onload = function() {
    window.localStorage.clear();
	//location.reload();
	return false;
};
</script>
</body>
</html>