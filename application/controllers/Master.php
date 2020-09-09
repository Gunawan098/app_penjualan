<?php
class Master extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_master');
	}

	public function index(){
		$data = $this->db->get('tabel_master');
		print_r($data);die;
		$this->load->view('layout/header');
		$this->load->view('admin/index',$data);
		$this->load->view('layout/footer');
	}
}