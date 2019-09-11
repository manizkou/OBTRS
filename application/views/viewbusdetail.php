<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Waypoints in directions</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 70%;
        width: 100%;
      }
      
    </style>
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
	<li><strong>Rest Point:</strong></li>
	<?php echo $key->description; ?>
	</div>
	<div class="col-md-6">
	<li><strong>Start Time</strong></li>
	<?php echo $key->start_time; ?>
	<li><strong>End Time</strong></li>
	<?php echo $key->end_time; ?>
	<li><strong>Amenities</strong></li>
	<?php echo $key->amenities;?>
	<li><strong>Route</strong></li>
	<?php echo $key->fplace;?>&#8594;<?php echo $key->tplace; ?>
	</div>
  
</div>
<div class="row">
  <div class="col-md-6">
    <strong>Pickup Points:</strong>
    <?php 

    foreach ($pickup as $pick) {
      $time = "$key->start_time";
      $time2 = "$pick->pickup_time minutes";

      $startstamp = strtotime($time." +".$time2);
      $startTime = date("h:i a", $startstamp);
    ?>
    <li><?php echo $pick->pickup_point;?>(<?php echo $startTime;?>)</li>
  <?php } ?>
  <strong></strong>
  </div>
  <div class="col-md-6">
    <strong>Dropping Points:</strong>
    <?php 
    foreach($drop as $dp){
      $time = "$key->end_time";
      $time2 = "$dp->dtime minutes";

      $endstamp = strtotime($time." -".$time2);
      $endTime = date("h:i a", $endstamp);
    ?>
  <li><?php echo $dp->dpoint;?>(<?php echo $endTime;?>)</li>
  <?php } ?>
  </div>
</div>
</ul>
	<?php
}
?>
 
  

</body>
</html>
