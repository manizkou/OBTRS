	<div class="container-fluid">
		<div class="row padded" style="background:url(<?php echo base_url();?>assets/img/bus2.jpg) no-repeat fixed;">
			<center>
				<form class="form-inline padded-form" method="POST" action="<?php echo base_url();?>home/search" utf-decode>
					<div class="form-group inl">
						<label class="sr-only" for="from">From</label>
						<input type="text" class="form-control changeCol" id="from" placeholder="FROM" name="from" required value="<?php echo set_value('from'); ?>">
					</div>
					<div class="form-group inl">
						<label class="sr-only" for="to">To</label>
						<input type="text" class="form-control changeCol" id="To" placeholder="TO" name="to" 
						value="<?php echo set_value('to'); ?>" required>
					</div>
					<?php// echo form_error('to'); ?>
					<div class="form-group inl">
						<label class="sr-only" for="onwardDate">ONWARD DATE</label>
						<input type="text" class="form-control changeCol" id="onwardDate" name="onwarddate" 
						placeholder="ONWARD DATE" required autocomplete="off" value="<?php echo set_value('onwarddate');?>">
					</div>
					<div class="form-group inl">
						<label class="sr-only" for="returnDate">RETURN DATE</label>
						<input type="text" class="form-control changeCol" id="returnDate" name="returndate" 
						placeholder="RETURN DATE (optional)" autocomplete="off" value="<?php echo set_value('returndate');?>">
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
						</div>
			
			</center>
		</div>

		
		<div class="row upfoot"> <!-- upper footer -->
			<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 "><i class="fa fa-bus fa-lg" aria-hidden="true">&nbsp;&nbsp;<span>6700 ROUTES </span></i></div>
			<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1"><i class="fa fa-users fa-lg" aria-hidden="true">&nbsp;&nbsp;<span>1800 BUS OPERATORS</span></i></div>
			<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 "><i class="fa fa-ticket fa-lg" aria-hidden="true">&nbsp;&nbsp;<span>600000+ TICKETS SOLD</span></i></div>
		</div> <!-- upper footer ends -->
	
	</div><!--container fluid ends-->
	

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
			<?php if(form_error('from', '<span class="err2" id="errEmail">', '</span>') != ''): ?>
			$('#from').focus();
			$('#from').css('border-color', 'red');
		<?php endif; ?>;
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
</body>
</html>