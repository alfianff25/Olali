<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_m extends CI_Model {

	public function getProduct($where=""){

		$data = $this->db->query('select * from product '.$where);
		return $data->result_array();
	}
	public function InsertData($tableName,$data){
		$res = $this->db->insert($tableName,$data);
	}
	public function UpdateData($tableName,$where){
		$res = $this->db->update($tableName,$where);
		return $res;
	}

	public function DeleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
	}
	public function viewRead(){
		$data = $this->db->get('product');
		return $data->result_array();
	}
	

	public function pesananRead(){
		$data = $this->db->get('pesanan');
		return $data->result_array();
	}

	public function getPro(){
		$data =$this->db->get('product');
		return $data->result_array();


	}

	public function tambahproduk($data){
		$this->db->insert('product', $data);
	}

}	

 