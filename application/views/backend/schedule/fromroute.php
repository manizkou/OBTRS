<?php
foreach ($from as $key) {
?>
		<option value="<?php echo $key->route_id;?>"><?php echo $key->fplace; ?> To <?php echo $key->tplace; ?></option>
<?php 
	}

 ?>
 