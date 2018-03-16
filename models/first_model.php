<?php


class first_model extends CI_Model {


	public function get_article() {

		// $this->db->limit("3");
		// $this->db->where("id", 2);
		$this->db->order_by("id", "RANDOM"); //desc -- ASC -- RANDOM


		$query = $this->db->get("articles");
		return $query->result_array();

	}

	public function add_article($data) {

		$this->db->insert("articles", $data);

	}

	public function edit_article($data) {

		$this->db->where("id", "0");

		$this->db->update("articles", $data);

	}

	public function del_article($id) {

		$this->db->where("id", $id);

		$this->db->delete("articles");


	}


}