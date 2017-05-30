<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_m');

    }

   public function halamanV_product(){
   	 		$data = $this->Crud_m->getPro();
            $dataRead2 = array('dataRead'=>$data);
            $this->load->view('v_product', $dataRead2);
   } 

public function do_delete($id){
		$where = array('id' => $id);
		$res = $this ->Crud_m->DeleteData('product',$where); 
		if($res>=1){
			redirect('index.php/crud/halamanV_product');
		}
	}

public function edit_data($id){
		$where = array('id' => $id);
		$res = $this ->Crud_m->UpdateData('product',$where); 
		if($res>=1){
			redirect('index.php/crud/index');
		}
	}

}