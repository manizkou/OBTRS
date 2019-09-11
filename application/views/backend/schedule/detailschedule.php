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
	<li><strong>Maximum Seats</strong></li>
	<?php echo $key->maxseat; ?>
	<li><strong>Amenities</strong></li>
	<?php
	// $explode=explode(',',$key->amenities);
	// foreach ($explode as $value) {
	// 	echo $value;
	// 	echo '&nbsp;&nbsp;';
	// }
	echo $key->amenities;
	?>
	</div>
	<div class="col-md-6">
	<li><strong>Departure Point</strong></li>
	<?php echo $key->fplace; ?>
	<li><strong>End Point</strong></li>
	<?php echo $key->tplace; ?>
	<li><strong>Start Time</strong></li>
	<?php echo $key->start_time; ?>
	<li><strong>End Time</strong></li>
	<?php echo $key->end_time; ?>
	
	</div>
</div>
</ul>
	<?php
}
?>
</body>
</html>
