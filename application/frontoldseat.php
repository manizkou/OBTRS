<table class="seat" style="">
										<tr>
											<?php 
											$count=1;
											for($i=1;$i<=$key->total_seat-$key->lrow;$i++){

												?> 
												<?php
												if($i % $key->layout == 0){

													?>


													<td> 

														<input type="checkbox"  id="asiento<?php echo $count * $key->bus_id; ?>" value="<?php echo $i; ?>" name="spam[]" onchange="seatBookingSystem<?php echo $key->bus_id; ?>(<?php echo $i; ?>,<?php echo $key->bus_id;?>,<?php echo $key->price+$key->btype_price;?>)" class="limitcheckbox<?php echo $key->bus_id; ?>"/><label for="asiento<?php echo $count*$key->bus_id; ?>"><?php echo $count;?></label>


													</td>
													<?php
													echo'</tr>';
													echo'<tr>';
												}else{

													?>

													<td> 
														<input type="checkbox"  id="asiento<?php echo $count*$key->bus_id; ?>" value="<?php echo $i; ?>" name="spam[]" class="limitcheckbox<?php echo $key->bus_id; ?>" onchange="seatBookingSystem<?php echo $key->bus_id; ?>(<?php echo $i; ?>,<?php echo $key->bus_id;?>,<?php echo $key->price+$key->btype_price;?>)"/><label for="asiento<?php echo $count*$key->bus_id; ?>"><?php echo $count;?></label>

													</td>
													<?php 
													if($key->layout==3){

														if($i % 3 == 2){
															echo'<td></td>';
														}
													}elseif($key->layout == 4)
													{
														if($i % 2 == 0){
															echo'<td></td>';
														}
													}elseif($key->layout ==3){
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
											$count=$key->total_seat-$key->lrow+1;
											$c= $count;



											for($i=$c;$i<=$c+$key->lrow-1;$i++){

												?> 

												<td> 
													<input type="checkbox"  id="asiento<?php echo $count*$key->bus_id; ?>" value="<?php echo $i; ?>" name="spam[]" class="limitcheckbox<?php echo $key->bus_id; ?>" onchange="seatBookingSystem<?php echo $key->bus_id; ?>(<?php echo $i;?>,<?php echo $key->bus_id;?>,<?php echo $key->price+$key->btype_price;?>)"/><label for="asiento<?php echo $count*$key->bus_id; ?>"><?php echo $count;?></label>

												</td>
												<?php
												$count++;
											}
											?>
										</tr>
										<!--  -->

									</table>