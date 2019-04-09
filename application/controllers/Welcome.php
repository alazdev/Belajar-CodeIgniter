<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('product_model');
		$this->load->model('model_login');
		$key['product']=$this->product_model->show_product()->result_array();
		$key2['user']=$this->model_login->show_user()->result_array();
		$this->load->view('include/header',$key2);
		$this->load->view('include/navigation');
		$this->load->view('product_view', $key);
		$this->load->view('brand_view');
		$this->load->view('include/footer');
	}
}
