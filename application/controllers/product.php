<?php
class product extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('model_login');
		$this->load->model('contact_model');
	}
	public function products(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('product_view', $data);
		$this->load->view('brand_view');
		$this->load->view('include/footer');
	}
	public function about(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('about_view');
		$this->load->view('include/footer');
	}
	public function icons(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('icons_view');
		$this->load->view('include/footer');
	}
	public function codes(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('codes_view');
		$this->load->view('include/footer');
	}

	public function mail(){
		$key2['contact']=$this->contact_model->show_contact()->result_array();
		$key2['user']=$this->model_login->show_user()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('mail_view', $key2);
		$this->load->view('include/footer');
	}
	public function users(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('users_view', $key2);
		$this->load->view('include/footer');
	}
	public function user_product(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('user_product_view', $data);
		$this->load->view('include/footer');
	}
	public function delete_user($username, $profilePicture){
		$this->model_login->delete_user($username, $profilePicture);
		redirect('product/users','refresh');
	}
	public function edit_role($username){
		$this->model_login->update($username);
		redirect('product/users','refresh');
	}
	public function add(){
		$this->product_model->add();
		redirect('product/user_product/','refresh');
	}
	public function view_edit($no){
		$data['product']=$this->product_model->edit($no)->row_array();
		$key2['user']=$this->model_login->show_user()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('edit_view', $data);
		$this->load->view('include/footer');
	}
	public function delete($no, $pictures, $userHave){
		$this->product_model->delete($no, $pictures, $userHave);
		redirect('product/user_product','refresh');
	}
	public function edit(){
		$this->product_model->e_edit();
		redirect('product/user_product','refresh');
	}
	public function add_contact(){
		$this->contact_model->add();
		redirect('product/mail/','refresh');
	}
	public function delete_contact($no){
		$this->contact_model->delete_contact($no);
		redirect('product/mail','refresh');
	}

	//View Categories
	public function catagories_android(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('catagories/android', $data);
		$this->load->view('include/footer');
	}
	public function catagories_ios(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('catagories/ios', $data);
		$this->load->view('include/footer');
	}
	public function catagories_laptop(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('catagories/laptop', $data);
		$this->load->view('include/footer');
	}
	//Categories End

	//View Brand
	public function brand_asus(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('brand/asus', $data);
		$this->load->view('include/footer');
	}
	public function brand_acer(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('brand/acer', $data);
		$this->load->view('include/footer');
	}
	public function brand_apple(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('brand/apple', $data);
		$this->load->view('include/footer');
	}
	public function brand_lenovo(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('brand/lenovo', $data);
		$this->load->view('include/footer');
	}
	public function brand_vivo(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('brand/vivo', $data);
		$this->load->view('include/footer');
	}
	public function brand_samsung(){
		$key2['user']=$this->model_login->show_user()->result_array();
		$data['product']=$this->product_model->show_product()->result_array();
		$this->load->view('include/header', $key2);
		$this->load->view('include/navigation');
		$this->load->view('brand/samsung', $data);
		$this->load->view('include/footer');
	}
	//Brand End
}
?>