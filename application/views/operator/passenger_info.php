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
		foreach ($dynamicmodal as $key) {
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
	</tbody>
</table>