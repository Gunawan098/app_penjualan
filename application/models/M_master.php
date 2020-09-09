<?php

class M_master extends CI_Model{

	public function get_data(){
		$this->db->get('tbl_master');
	}
}