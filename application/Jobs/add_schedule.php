<?php

$connect = mysqli_connect("localhost","root","password") or die("could not connect to database");

if($connect):
	$select = mysqli_select_db($connect,"samratcl_busreserve_db");
	$buses = [31,33,32,24,38,44];
	$route = [21,22,23,24,25,26];
	$onward = date("m/d/Y",strtotime("+1 days"));
	$return = date("m/d/Y",strtotime("+3 days"));
	foreach ($route as $key => $value) {
		$query = mysqli_query($connect,"INSERT INTO add_schedule(bus_id,route_id,onward,returndate,status) VALUES($buses[$key],$value,'$onward','$return','active') ");
	}
	$result = $query ? "Successfully Bus Schecdulded" : "Failed Inserting Data";
	echo $result;
endif;

?>