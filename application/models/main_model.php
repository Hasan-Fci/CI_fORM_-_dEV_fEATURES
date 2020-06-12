<?php

class Main_model extends CI_Model{
	public function insert_data($data){
		$this->db->insert("tbl_user", $data);
	}

	function fetch_data()
	{
		// $query = $this->db->get("tbl_user");

		// $query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");

		$this->db->select("*");
		$this->db->from("tbl_user");
		$query = $this->db->get();
		return $query;
	}
}

?>