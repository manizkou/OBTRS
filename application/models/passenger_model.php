<?php
CLASS Passenger_model extends CI_Model{
	function businfo($id){
		$select=$this->db->query("SELECT * FROM add_bus WHERE bus_id='$id'");
		return $select->result();
	}

	function tempinfo($bookseat,$busid){
		$date=date("Y/m/d");
		date_default_timezone_set('Asia/Kathmandu');
		$next=strtotime("-480 seconds"); 
		$passmail=$this->session->userdata('passemail');
		$select=$this->db->query("SELECT * FROM temp_data WHERE busid=$busid AND tempseat='$bookseat' AND c_date='$date' AND c_time>='$next' AND passmail != '$passmail'");
		if($select->num_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function intemp($bookseat,$busid){
		date_default_timezone_set('Asia/Kathmandu');
		$now=strtotime("now");
		$date=date("Y/m/d");
		$passmail=$this->session->userdata('passemail');
		$insert=$this->db->query("INSERT INTO temp_data(busid,tempseat,c_date,c_time,passmail) VALUES ('$busid','$bookseat','$date','$now','$passmail')");

	}
}

?>