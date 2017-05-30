<?php 
 
 
class Beli extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_beli');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->M_beli->tampil_data()->result();
		$this->load->view('v_tampil_beli',$data);
	}
 
	function tambah(){
		$this->load->view('beli');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$product = $this->input->post('product');
		$jumlah = $this->input->post('jumlah');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'hp' => $hp,
			'product' => $product,
			'jumlah' => $jumlah
			);
		$this->M_beli->input_data($data,'pesanan');
		//redirect('beli/index');
	}
 
}

