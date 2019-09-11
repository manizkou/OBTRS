	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>Customer mail</th>
				<th>Bus Quality</th>
				<th>Punctuality</th>
				<th>Staff Behaviour</th>
				<th>Average</th>
				<th>Comments</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ($ratinginfo as $key) {
			//$average=($key->punc+$key->ratesb+$key->busq)/3;
			
		?>
		<tr>
			<td><?php echo $key->membermail;?></td>
			<td><?php echo $key->busq;?></td>
			<td><?php echo $key->punc;?></td>
			<td><?php echo $key->ratesb;?></td>
			<td><?php echo $key->average;?></td>
			<td><?php echo $key->description;?></td>


		</tr>
		
		<?php	
	}
	?>

	</tbody>
</table>