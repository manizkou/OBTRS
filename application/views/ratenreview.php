<div class="container-fluid">
	<?php
	foreach ($pass as $key):
		?>
	<div class="row rnr">
		<div class="col-sm-12">

			<div class="row topInfo">
				<div class="col-sm-6">
					<p><?php echo $key->from_place;?> → <?php echo $key->to_place;?>,<?php echo $key->depart_date;?> ,<?php echo $key->btype;?></p>
				</div>
				<div class=" col-md-2 col-md-offset-4 col-sm-4 col-sm-offset-2">
					<span style="padding-right: 15px; ">TicketNo: <?php echo $key->ticket_id;
						?></span>
					</div>
					<br>
					<hr>
				</div>	
				<div class="row">
					<div class="col-sm-12" style="font-size: medium; text-indent: 16px;">
						<p>
							Hey <?php echo $this->session->userdata('membername');?>,
						</p>
						<p>
							How was your trip? Share your valuable feedback with us. This would help your friends who are planning to travel by the same service.
						</p>
					</div>
				</div>
				<br>
				<div class="col-sm-12" style="font-size: large;">
					<p>Rate the bus provided on a scale of 1 to 5 (5 - being the highest)</p>
				</div>
				<br><br>
				<br><br>
				<div class="row">
					<div class="col-md-12">
						<div class="col-sm-4">
							<center>
								<b>Punctuality</b>
								<p>Please enter your rating</p>
						<form id="ratingsForm" action="<?php echo base_url();?>mytrip/submitrate" method="POST">
									<div class="wrapper">
										<input type="radio" id="pst1" value="5" name="ratep" />
										<label for="pst1"></label>
										<input type="radio" id="pst2" value="4" name="ratep" />
										<label for="pst2"></label>
										<input type="radio" id="pst3" value="3" name="ratep" />
										<label for="pst3"></label>
										<input type="radio" id="pst4" value="2" name="ratep" />
										<label for="pst4"></label>
										<input type="radio" id="pst5" value="1" name="ratep" />
										<label for="pst5"></label>
									</div>
								</center>
							</div>
							<input type="hidden" value="<?php echo $this->session->userdata('membermail');
						?>" name="membermail">
						<input type="hidden" value="<?php echo $key->bus_id;
						?>" name="bid">


							<div class="col-sm-4">
								<center>
									<b>BusQuality</b>
									<p>Please enter your rating</p>
									<div class="wrapper">

										<input type="radio" id="bst1" value="5" name="rateBq" />
										<label for="bst1"></label>
										<input type="radio" id="bst2" value="4"  name="rateBq"/>
										<label for="bst2"></label>
										<input type="radio" id="bst3" value="3"  name="rateBq"/>
										<label for="bst3"></label>
										<input type="radio" id="bst4" value="2"  name="rateBq"/>
										<label for="bst4"></label>
										<input type="radio" id="bst5" value="1"  name="rateBq"/>
										<label for="bst5"></label>
									</div>
								</center>
							</div>

							<div class="col-sm-4">
								<center>
									<b>Staff Behavior</b>
									<p>Please enter your rating</p>
								</center>
								<center>
									<div class="wrapper">

										<input type="radio" id="sst1" value="5" name="ratesb" />
										<label for="sst1"></label>
										<input type="checkbox" id="sst2" value="4" name="ratesb"/>
										<label for="sst2"></label>
										<input type="radio" id="sst3" value="3" name="ratesb" />
										<label for="sst3"></label>
										<input type="radio" id="sst4" value="2" name="ratesb" />
										<label for="sst4"></label>
										<input type="radio" id="sst5" value="1" name="ratesb" />
										<label for="sst5"></label>
									</div>
								</center>
							</div>
						</div>
					</div>
					<br><br>
					<br><br>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="col-sm-6 col-md-7">
								<h4>Write Your Review</h4>
								<p style="color: #959595;">
									(Please write a review about your journey. An ideal review would include all the positives and negatives concerning your journey. This would help other travellers' as well as the bus operator in improving their service.)
								</p>
							</div>
							<div class="col-sm-6 col-md-5">
								<textarea rows="4" cols="45" name="desc"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-9"></div>
						<div class="col-md-3">	
							<input type="submit" value="Submit" class="btn btn-danger btn-sm" style="border-radius: 0px; margin-left: 40px;">
						</div>

					</div>
					<div class="row"><br></div>
				</form>
				
			</div>
		</div>
		<?php
		endforeach;
		?>
	</div> <!-- container-fluid -->

