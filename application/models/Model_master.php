<?php

class Model_master extends CI_Model{

	public function get_data(){
		return $this->db->get('tbl_master')->result_array();
	}

	public function insert($data,$table){
		return $this->db->insert($table,$data);
	}

	public function update($data,$where,$table){
		$this->db->where($where);
		return $this->db->update($table,$data);
	}

	public function delete($where,$table){
		return $this->db->delete($table,$where);
	}
}