<?php 
ob_start();?>

		<!DOCTYPE html>
			<html>
			<head>
				<title>Your Passenger report</title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pdf.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/sb-admin-2.css">
  	<!--  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
 </head>
			<body>
			<div class="pannel pannel-success">
			<div class="pannel-heading">
			<h2 align='center'><b>Report of Daily Schedule</b></h2><br>
			</div>
			</div>
			<table  class="table table-bordered">

			<thead>
			<tr>
			<th>S.N.</th>
			<th>Route</th>
			<th>Bus Name</th>
			<th>onward</th>
			<th>returndate</th>
			</tr>
			</thead>		
			<tbody>

			<?php 
				$sn=1;
				foreach ($repo as $key) {?>
					
				
			<tr>
			<td><?php echo $sn; ?></td>
			<td><?php echo $key->fplace;?> To <?php echo $key->tplace;?></td></td>
			<td><?php echo $key->bus_name?></td>
			<td><?php echo $key->onward;?></td>
			<td><?php echo $key->returndate;?> </td>
			</tr>
			<?php 
			$sn++;
		} 
			?>
			</tbody>

			</table>

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