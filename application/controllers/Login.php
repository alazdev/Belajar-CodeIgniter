<?php
class login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_login');
	}
	public function login(){
		$this->load->view('login');
	}
	public function proses_login(){
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');

		$data=$this->model_login->cek_login($username, $password)->row_array();
		if ($username == $data['username'] && $password == $data['password'] && ($data['role']=='Admin')) {
			echo "<script>alert('Hai Admin')</script>";
			$session = array('username'=>$username,'admin'=>'login');
			$this->session->set_userdata($session);
			redirect('welcome','refresh');
		}else if ($username == $data['username'] && $password == $data['password'] && 'User1' == $data['role']) {
			$session = array('username'=>$username,'user'=>'login');
			$this->session->set_userdata($session);
			redirect('welcome','refresh');
		} else {
			echo "<script>alert('username atau Password Anda Salah')</script>";
			redirect('welcome','refresh');
		}
	}
	public function logout(){
		$logout = array('username','admin','user');
		$this->session->unset_userdata($logout);
		redirect('welcome','refresh');
	}
	public function registrasikan(){
        $this->model_login->createUser();
        redirect('welcome','refresh');
	}
}
?>