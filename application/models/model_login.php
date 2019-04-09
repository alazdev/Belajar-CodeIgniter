<?php
class model_login extends CI_Model{
	public function show_user(){
		$user=$this->db->get('user');
		return $user;
	}
	public function cek_login($username, $password){
		$this->db->where('username',$username);
        $this->db->where('password',$password);
        $login=$this->db->get('user');
        return $login;
	}
	public function createUser(){
		$config['upload_path'] = './images/profilePictures/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->upload->initialize($config);
		if($this->upload->do_upload('profilePicture')){
			$gambar = $this->upload->data();
			$config['image_library']='gd2';
            $config['source_image']='./images/profilePictures/'.$gambar['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '90%';
            $config['width']= 400;
            $config['height']= 400;
            $config['new_image']= './images/profilePictures/'.$gambar['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
			$data = $gambar['file_name'];
			$user= array(
				'profilePicture' => $data,
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'age' => $this->input->post('age'),
				'role' => 'User1',
				'gender' => $this->input->post('gender'),
				'email' => $this->input->post('email')
			);
			if(!($this->input->post('username') == $this->input->post('cek'))){
				$this->db->insert('user', $user);
			}else{
				echo "<script>alert('Username Telah Ada')</script>";
			}
		} else {
			echo "<script>alert('Error')</script>";
		}
	}
	public function delete_user($username, $profilePicture){
		if($this->session->userdata('admin')){
			$this->db->delete('product', array('userHave'=>$username));
			$link = 'images/profilePictures/'.$profilePicture;
			unlink($link);
			return $this->db->delete('user', array('username'=>$username));
		}
	}
	public function update($username){
		if($this->session->userdata('admin')){
			$this->db->where('username',$username);
			$data=$this->db->get('user');
			$user= array(
				'role' => 'Admin'
			);
			$this->db->where('username',$username);
			$this->db->update('user', $user);
			return $data;
		}
	}
}
?>