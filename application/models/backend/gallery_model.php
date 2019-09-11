<?php
Class Gallery_model extends CI_MOdel{
	function getbusname(){
		$select=$this->db->query("SELECT * FROM add_bus ORDER BY bus_id DESC");
		return $select->result();
	}
	function insertimage($busid,$image){
	   $this->db->query("INSERT INTO gallery(bus_id,image)VALUES('$busid','$image')");
	   return TRUE;
	}
	function listofgallery(){
		$select=$this->db->query("SELECT gallery.bus_id,add_bus.bus_name,COUNT( gallery.bus_id ) 'total_images' FROM gallery 
			INNER JOIN add_bus ON gallery.bus_id=add_bus.bus_id GROUP BY gallery.bus_id");
		return $select->result();
	}

	function viewimage($id){
		$select=$this->db->query("SELECT * FROM gallery where bus_id=$id");
		return $select->result();
	}

	function delimage($gid){
		$this->db->query("DELETE FROM gallery WHERE gallery_id=$gid");
		return TRUE;
	}
}

?>