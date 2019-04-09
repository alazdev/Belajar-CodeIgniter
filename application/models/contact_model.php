<?php
class contact_model extends CI_Model{
	public function show_contact(){
		$contact=$this->db->get('contact');
		return $contact;
	}
	public function add(){
		$contact= array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'message' => $this->input->post('message')
		);
		$this->db->insert('contact', $contact);
	}
	public function delete_contact($no){
		if($this->session->userdata('admin')){
			return $this->db->delete('contact', array('no'=>$no));
		} else {
			echo "<script>alert('OOPS Anda Bukan Admin')</script>";
		}
	}
}
?>