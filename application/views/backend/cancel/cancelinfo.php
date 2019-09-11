	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>Customer Name</th>
				<th>Age</th>
				<th>Gender</th>
			</tr>
		</thead>
		<?php
		$a=0;
		$tamount=0;
		foreach ($cancelinfo as $key) {
			$a=$a+$key->refund;
			$tamount=$tamount+$key->amount;
			
		?>
		<tr>
			<td><?php echo $key->pname;?></td>
			<td><?php echo $key->page;?></td>
			<td><?php echo $key->pgender;?></td>
		</tr>
		
		<?php	
	}
	?>
	<tr >
		<th>Total Amount:</th>
		<th colspan="3"><center>Rs.<?php echo $tamount; ?></center></th>
	</tr>

	<tr >
		<th>Refund Amount:</th>
		<th colspan="3"><center>Rs.<?php echo $a; ?></center></th>
	</tr>

	</tbody>
</table>