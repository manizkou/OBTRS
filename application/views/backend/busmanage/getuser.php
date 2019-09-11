<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>	

<ul>
<div class="row">
<?php
	foreach ($dynamicmodal as $key) {
?>
	<div class="col-md-6">
	<li><strong>Bus Name</strong></li>
	<?php echo $key->bus_name; ?>
	<li><strong>Registration Number</strong></li>
	<?php echo $key->reg_name; ?>
	<li><strong>Bus Type</strong></li>
	<?php echo $key->btype; ?>
	<li><strong>Bus Type Price</strong></li>
	RS.<?php echo $key->btype_price; ?>
	<li><strong>Maximum Seats</strong></li>
	<?php echo $key->maxseat; ?>
	<li>	<strong>Rest Point:</strong></li>
	<?php echo $key->description; ?>
	</div>
	<div class="col-md-6">
	<li><strong>Start Time</strong></li>
	<?php echo $key->start_time; ?>
	<li><strong>End Time</strong></li>
	<?php echo $key->end_time; ?>
	<li><strong>Amenities</strong></li>
	<?php echo $key->amenities;?>
	<li><strong>E-mail</strong></li>
	<?php echo $key->email;?>
	<li><strong>Route</strong></li>
	<?php echo $key->fplace;?>&#8594;<?php echo $key->tplace; ?>
	</div>
</div>
</ul>
	<?php
}
?>
</body>
</html>
