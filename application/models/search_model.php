<?php
class Search_model extends CI_Model{

 public function searchquery($query){
 	$sel=$this->db->query("SELECT * FROM boarding_details WHERE board LIKE '" . $query . "%'");
 	if ($sel->num_rows()>0) {
				return $sel->result();	
			}else{

				 echo "<p>No matches found for <b>$query</b></p>";
				 return $sel->result();
			}

 }
}
?>