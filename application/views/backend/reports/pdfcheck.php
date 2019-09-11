<!DOCTYPE html>
			<html>
			<head>
				<title>pdf report</title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
  	<link rel="stylesheet" type="text/css" href="pdf.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/sb-admin-2.css">
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
			<!-- <th>Route</th> -->
			<th>Bus Name</th>
			<th>returndate</th>
			<th>Onward</th>
			</tr>
			</thead>		
			<tbody>
			<?php 
				foreach ($repo as $key) {?>
					
				
			<tr>
			
			<td><?php echo $key->bus_name?></td>
			<td><?php echo $key->onward;?></td>
			<td><?php echo $key->returndate;?> </td>
			</tr>
			<?php } ?>
			</tbody>

			</table>

			</body>
			</html>