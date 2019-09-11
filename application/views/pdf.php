<?php 
ob_start();?>

		<!DOCTYPE html>
			<html>
			<head>
				<title>pdf report</title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pdf.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/sb-admin-2.css">
  	<!--  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
 

 </head>
			<body>
			<div class="pannel pannel-success">
			<div class="pannel-heading">
			<h2 align='center'><b>BOOK&GO co.</b></h2><br>
			</div>
			</div>
			<?php foreach ($repo as $keys) ?>
				<div class="col-md-6">
				
				<table class="table table-bordered table1">
				<tr>
				
	<th><strong>Ticket Number:</strong></th>
	<td><span class="arrange"><?php echo $keys->ticket_id;?></span></td>
	</tr>
	<tr>
	<th><strong>Bus Name:</strong></th>
	<td><span class="arrange"><?php echo $keys->bus_name;?></span></td>
	</tr>
	<tr>
	<th>
	<strong>Registration Number:</strong></th>
	<td><span class="arrange"><?php echo $keys->reg_name;?></span></td>
	</tr
	<tr>
	<th>
	<strong>Pickup Point:</strong></th>
	<td><span class="arrange"><?php echo $keys->pickup;?></span></td>
	</tr>
	<tr>
	<th><strong>Phone:</strong></th>
	<td><span class="arrange"><?php echo $keys->phone;?></span></td>
	</tr>
	<tr>
	<th><strong>Date:</strong></th>
	<td><span class="arrange"><?php echo $keys->depart_date;?></span></td>
	</tr>
	<tr>
	<th><strong>Route:</strong></th>
	<td><span class="arrange"><?php echo $keys->fplace;?>-><?php echo $keys->tplace;?></span></td>
	</tr>
	<tr>
	<th><strong>price Per Seat:</strong></th>
	<td><span class="arrange"><?php echo $keys->amount;?></span></td>
	</tr>
	</table>
	
	
	
	
	</div>
			
			<h3 align="center">Passenger Information</h3>
			<table  class="table table-bordered">


			<thead>

			<tr>
			<th>S.N.</th>
			
			
			<th>Passenger</th>
			<th>Gender</th>
			<th>Age</th>
			<th>seat</th>
			</tr>
			</thead>		
			<tbody>

			<?php 
				$sn=1;
				foreach ($repo as $key) {				
					?>

					
				
			<tr>
			<td><?php echo $sn; ?></td>
			
			
			<td><?php echo $key->pname?></td>
			<td><?php echo $key->pgender?></td>
			<td><?php echo $key->page?></td>
			<td><?php echo $key->seat;?> </td>
			</tr>
			
			<?php 

			$sn++;
			

		} 
			?>

			</tbody>


			</table>

			

			
				
			</tr>
			<h3>Conditions:</h3>
			<ul>
			<li>Please bring this ticket along with you.</li>
			<li>Please reach the pickup point on time.	</li>
			<li>Due to technical reason, the bus can be altered or timing can be altered.</li>
			</ul>
			
			

			</body>
			</html>
		

		

			<?php
include_once('dompdf/dompdf_config.inc.php');
	 $dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());

$dompdf->render();
$dompdf->set_base_path('assets/css/pdf.css');
$dompdf->set_base_path('bootstrap/css/sb-admin-2.css');
// $dompdf->set_base_path('bootstrap/css/bootstrap.css');
			$pdf=$dompdf->output();
			$filename='dompdf_out.pdf';

  $dompdf->stream($filename,array('Attachment'=> 0));

	
	
	 



?>