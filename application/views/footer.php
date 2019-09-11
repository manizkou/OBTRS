	
	<div class="container-fluid">	
		<div class="row foot">	 <!-- lower footer -->
			<div class="col-md-6 col-md-offset-1 col-sm-5  ">
				<center><h2 style="line-height: 1.4; color: #fff; font-size: 24px;">Top Bus Booking Routes</h2></center>
				<table style="color: #fff; width: 100%;">
					<thead >
						<th><h4 style="color: #fff;  font-size: 18px;">Route</h4></th>
						<th><h4 style="color: #fff;  font-size: 18px;">Fare(starting)</h4></th>
						<th></th>
					</thead>
					<tbody>
						<?php
							$datetime = new DateTime('tomorrow');
							$tomorrow=$datetime->format('Y-m-d');
						$select=$this->db->query("SELECT booking_details.from_place, booking_details.to_place, boarding_details.board, boarding_details.drop_point, boarding_details.price, COUNT( boarding_details.board_id )  'boardid' FROM  `booking_details` INNER JOIN boarding_details ON booking_details.from_place = boarding_details.board AND booking_details.to_place = boarding_details.drop_point GROUP BY boarding_details.board_id ORDER BY boardid DESC LIMIT 0,4 ");
						$sel=$select->result();
						foreach ($sel as $key):
						?>
						<tr>
							<td><?php echo $key->from_place;?> to <?php echo $key->to_place;?></td>
							<td>Rs.<?php echo $key->price;?></td>
							<form name='fr' action="<?php echo base_url();?>home/search" method='POST'>
							<input  type="hidden" name="from" value="<?php echo $key->from_place;?>">
							<input type="hidden" name="to" value="<?php echo $key->to_place;?>">
							<input type="hidden" name="onwarddate" value="<?php echo $tomorrow;?>">
							<td><input type="submit" value="Book Now" class="btn btn-primary busSearch radoff-btn"  style="margin-top:5px !important; background-color:#058453; border-radius:0px; ">	</td>
							</form>
						</tr>
						</tr>
						<?php
					endforeach;
						?>
					</tbody>
				</table>
			</div>
			<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 ">
				<h2 style="color: #fff;  font-size: 24px;">Ticket Booking</h2>
				<p>Lorem ipsum dolor sit amet, appareat verterem conceptam et quo, nec placerat periculis id. Est an eruditi philosophia, elit noluisse eam in, nam menandri comprehensam at. An qui equidem <a href="<?php echo base_url();?>psess">Lorem</a>
					<a href="<?php echo base_url();?>contact">Ipsum</a></p>
				<p>&copy; 2017 collabgroup All rights reserved</p>
			</div>
		</div> <!-- lower footer ends -->
	</div> <!-- container fluid -->