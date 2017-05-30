<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Beranda extends CI_Controller {
      public function __construct() {
        parent::__construct(); 
        $this->load->model('Crud_m');

      }
 
      public function index()
      {
           $this->load->view('index.php');
      }
      public function us()
      {
      	$this->load->view('login2');
      }
      public function home()
      {
      	$this->load->view('index');
      }
      public function pro()
      {
            $this->load->view('product');
      }
      public function pesan()
      {
            $data = $this->Crud_m->getPro();
            $bringData2 = array('bringData'=>$data);
            $this->load->view('pesanan', $bringData2);
      }
     
      public function contact()
      {
            $this->load->view('contact');
      }
      public function input()
      {
            $this->load->view('form_input');
      }
      public function viewRead()
      {
            $data = $this->crud_m->viewRead();
            $dataTampil = array('dataRead'=> $data);
            $this->load->view('v_product', $dataTampil);
      }

      public function beli()
      {
            $this->load->view('beli');
      }

       public function admin()
      {
            $this->load->view('admin_masuk');
      }

      public function dafpesan()
      {
            $this->load->view('daftar_pesanan');
      }



 }