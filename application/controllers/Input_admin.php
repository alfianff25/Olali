<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_admin extends CI_Controller {
	 public function __construct(){
        parent::__construct();
        $this->load->model('Crud_m');
    }

	 function index(){
		$data = $this->Crud_m->getProduct();
		$this->load->view('v_product',array('data' => $data));

	}

	public function viewAddDataStyle(){
		$this->load->view('form_input');
		$this->load->view('adminBaru/bodyAddDataStyle');
	}

	public function do_insert(){
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload', $config);
            //$config['max_size']             = 100;
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;            
            if (!$this->upload->do_upload('userfile'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    //$this->load->view('upload_form', $error);
                }
            else
                {
                    //$this->load->view('upload_success', $data);
                    //echo "berhasil";
                    $data = $this->upload->data();
                    $fileName = $data['file_name'];
                    $dataProduct = array(
						'nama_produk' => $this->input->post('nama_produk'),
						'jenis' 	=> $this->input->post('jenis'),
						'detail' 	=> $this->input->post('detail'),
						'harga' 	=> $this->input->post('harga'),
						'img' 		=> $fileName
						);
                    $this->Crud_m->tambahproduk($dataProduct);
					$this->load->view('form_input');
					                    
                }
	}
	public function do_delete($email){
		$where = array('email' => $email);
		$res = $this ->Crud_m->DeleteData('product',$where); 
		if($res>=1){
			redirect('index.php/Input_admin/index');
		}
	}


	
}

	
