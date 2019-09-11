<center>
	
	<div class="row">
		<table class="seat" >
			<tr>
				<?php	
				$count=1;
				for($i=1;$i<=$total-$last;$i++){

					?> 
					<?php
					if($i % $matrix == 0){

						?>


						<td> 

							<input type="checkbox"  id="asiento<?php echo $count; ?>" value="<?php echo $i; ?>" name="spam[]" /><label for="asiento<?php echo $count; ?>"><?php echo $count;?></label>


						</td>
						<?php
						echo'</tr>';
						echo'<tr>';
					}else{

						?>

						<td> 
							<input type="checkbox"  id="asiento<?php echo $count; ?>" value="<?php echo $i; ?>" name="spam[]" /><label for="asiento<?php echo $count; ?>"><?php echo $count;?></label>

						</td>
						<?php 
						if($matrix==3){

							if($i % 3 == 2){
								echo'<td></td>';
							}
						}elseif($matrix == 4)
						{
							if($i % 2 == 0){
								echo'<td></td>';
							}
						}elseif($matrix==3){
							if($i % 3 == 1){
								echo'<td></td>';
							}
						}
						?>
						<?php    
					}
					$count++;
				}

				?>
			</tr>
			<tr>
				<?php
				$count=$total-$last+1;
				$c= $count;



				for($i=$c;$i<=$c+$last-1;$i++){

					?> 

					<td> 
						<input type="checkbox"  id="asiento<?php echo $count; ?>" value="<?php echo $i; ?>" name="spam[]" /><label for="asiento<?php echo $count; ?>"><?php echo $count;?></label>

					</td>
					<?php
					$count++;
				}
				?>
			</tr>
			<!--  -->

		</table>
		<!--  seat container -->
		<!--  -->



	</div> <!-- row -->

</center>