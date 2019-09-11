	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>Customer Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>seat Number</th>
			</tr>
		</thead>
		<?php
		$a=0;
		foreach ($dynamicmodal as $key) {
			$a=$a+$key->amount;
			
		?>
		<tr>
			<td><?php echo $key->pname;?></td>
			<td><?php echo $key->page;?></td>
			<td><?php echo $key->pgender;?></td>
			<td><?php echo $key->seat;?></td>
		</tr>
		
		<?php	
	}
	?>
	<tr >
		<th>Total Amount:</th>
		<th colspan="3"><center>Rs.<?php echo $a; ?></center></th>
	</tr>

	</tbody>
</table>