<?php
foreach ($tseat as $key ) {
	?>
	<input class="form-control" type="text" id="seat_total" name="total" value = "<?php echo $key->maxseat; ?>" required>
	<?php
}
?>
