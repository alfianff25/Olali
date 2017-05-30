 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daf_pesan extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_dafpesan');
    }

	public function load()
	{
		$data = $this->M_dafpesan->getpesan();
		$this->load->view('daftar_pesanan', array('data' => $data));
	}
    
	
}