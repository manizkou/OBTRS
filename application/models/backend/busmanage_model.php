<?php
class Busmanage_model extends CI_Model{
	// bus type model begins
	function inserttype($type){
		$this->db->query("INSERT INTO bus_type(type_name)VALUES('$type')");
		return TRUE;
	}

	function bustypetable(){
		$select=$this->db->query("SELECT * FROM bus_type ORDER BY type_id DESC");
		return $select->result();

	}
	function getroute(){
		$select=$this->db->query("SELECT * FROM route_details ORDER BY route_id DESC");
		return $select->result();
	}

	function getowner(){
		$select=$this->db->query("SELECT * FROM owner_info ORDER BY owner_id DESC");
		return $select->result();
	}

	function updatetype($id,$bustype){
		$this->db->query("UPDATE bus_type SET type_name='$bustype' WHERE type_id=$id");
		return TRUE;
	}
	function typedelete($id){
		$this->db->query("DELETE FROM bus_type WHERE type_id=$id");
		return TRUE;
	}
	// adding a new bus begins

	function insertbusquery($routeid,$name,$reg,$btype,$maxseat,$stime,$etime,$pal,$desc,$type_price,$email){
		$this->db->query("INSERT INTO add_bus(route_id,bus_name,reg_name,btype,maxseat,start_time,end_time,amenities,description,btype_price,email)VALUES('$routeid','$name','$reg','".$btype."','$maxseat','$stime','$etime','".$pal."','$desc','$type_price','$email')");
		return TRUE;

	}
	function viewbus(){
		$select=$this->db->query("SELECT *FROM add_bus ORDER BY bus_id DESC");
		return $select->result();
	}

	function editbuses($id){
		$update=$this->db->query("SELECT * FROM add_bus 
				INNER JOIN route_details ON add_bus.route_id=route_details.route_id WHERE bus_id=$id");
		return $update->result();
	}

	function updatebusquery($id,$routeid,$name,$reg,$btype,$maxseat,$stime,$etime,$pal,$desc,$type_price,$email){
		$this->db->query("UPDATE add_bus SET route_id='$routeid',bus_name='$name',reg_name='$reg',btype='".$btype."',maxseat='$maxseat',start_time='$stime',end_time='$etime',amenities='".$pal."',description='$desc',btype_price='$type_price',email='$email' WHERE bus_id='$id'");
		return TRUE;

	}

	function deletebus($id){
		$query=$this->db->query("DELETE FROM add_bus WHERE bus_id='$id'");
		return TRUE;
	}
	
	}
?>

