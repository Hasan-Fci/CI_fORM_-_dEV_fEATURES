<?php

class Main_model extends CI_Model{
	public function insert_data($data){
		$this->db->insert("tbl_user", $data);
	}
}

?>