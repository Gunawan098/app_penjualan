<?php
class Master extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_master');
	}

	public function index(){
		$data['master'] = $this->model_master->get_data();
		$this->load->view('layout/header');
		$this->load->view('admin/index',$data);
		$this->load->view('layout/footer');
	}

	public function tambah(){
		$this->load->view('layout/header');
		$this->load->view('admin/v_tambah');
		$this->load->view('layout/footer');		
	}

	public function aksi_tambah(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|integer');
		$this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|integer');

		if($this->form_validation->run() == FALSE){
			$this->load->view('layout/header');
			$this->load->view('admin/v_tambah');
			$this->load->view('layout/footer');	
		}else{

			$data = array(
				'nama_barang' => $this->input->post('nama_barang'),
				'jumlah' => $this->input->post('jumlah'),
				'harga_jual' => $this->input->post('harga_jual')
			);
			$this->model_master->insert($data,'tbl_master');
			redirect('master');			
		}
	}

	public function ubah($id){
		$data['master'] = $this->db->query('SELECT * FROM tbl_master WHERE id = '.$id.'')->row_array();
		$this->load->view('layout/header');
		$this->load->view('admin/v_ubah',$data);
		$this->load->view('layout/footer');			
	}

	public function aksi_ubah(){
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'jumlah' => $this->input->post('jumlah'),
			'harga_jual' => $this->input->post('harga_jual')
		);
		$where = array(
			'id' => $this->input->post('id')
		);
		$this->model_master->update($data,$where,'tbl_master');
		redirect('master');		
	}

	public function hapus(){
		$where = array(
			'id' => $this->uri->segment(3)
		);
		$this->model_master->delete($where,'tbl_master');
		redirect('master');
	}



	public function transaksi(){
		$data['master'] = $this->model_master->get_data();		
		$this->load->view('layout/header');
		$this->load->view('admin/v_transaksi',$data);
		$this->load->view('layout/footer');	
	}

	public function transaksi_beli($id){
		$data['master'] = $this->db->query('SELECT * FROM tbl_master WHERE id = '.$id.'')->row_array();
		$this->load->view('layout/header');
		$this->load->view('admin/v_transaksi_beli',$data);
		$this->load->view('layout/footer');	
	}

	public function aksi_transaksi_beli(){
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'jumlah' => $this->input->post('jumlah'),
			'harga_jual' => $this->input->post('harga_jual')
		);
		$where = array(
			'id' => $this->input->post('id')
		);
		$this->model_master->update($data,$where,'tbl_master');
		redirect('master/transaksi');		
	}
}