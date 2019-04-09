<?php
class product_model extends CI_Model{
	public function show_product(){
		$product=$this->db->get('product');
		return $product;
	}
	public function add(){
		$config['upload_path'] = './images/productPictures/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->upload->initialize($config);
		if($this->upload->do_upload('pictures')){
			$gambar = $this->upload->data();
			$config['image_library']='gd2';
            $config['source_image']='./images/productPictures/'.$gambar['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '90%';
            $config['width']= 300;
            $config['height']= 400;
            $config['new_image']= './images/productPictures/'.$gambar['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
			$data = $gambar['file_name'];
			$product= array(
				'pictures' => $data,
				'productName' => $this->input->post('productName'),
				'prize' => $this->input->post('prize'),
				'catagories' => $this->input->post('catagories'),
				'brand' => $this->input->post('brand'),
				'desc' => $this->input->post('desc'),
				'date' => date('Y-m-d'),
				'rate' => '5',
				'userHave' => $this->session->userdata('username')
			);
			if($this->db->insert('product', $product)){
				echo "<script>alert('Tersimpan')</script>";
			}else{
				echo "<script>alert('Username telah Ada')</script>";
			}
		} else {
			echo "<script>alert('Error')</script>";
		}
	}
	public function edit($no){
		$this->db->where('no',$no);
		$data=$this->db->get('product');
		return $data;
	}
	public function e_edit(){
		$no=$this->input->post('no');
		$product= array(
			'productName' => $this->input->post('productName'),
			'prize' => $this->input->post('prize'),
			'catagories' => $this->input->post('catagories'),
			'brand' => $this->input->post('brand'),
			'desc' => $this->input->post('desc')
		);
		echo "<script>alert('Tersimpan')</script>";
		$this->db->where('no',$no);
		$this->db->update('product', $product);
	}
	public function delete($no, $pictures, $userHave){
		if ($this->session->userdata('username') == $userHave){
			$link = 'images/productPictures/'.$pictures;
			if(unlink($link)){
				echo "<script>alert('berhasil')</script>";
			} else {
				echo "<script>alert('gagal')</script>";
			}
			return $this->db->delete('product', array('no'=>$no));
		} else {
			echo "<script>alert('Bukan Product Anda')</script>";
		}
	}
}
?>