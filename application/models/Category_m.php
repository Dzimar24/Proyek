<?php

class Category_m extends CI_Model
{
	# code...

	public function index() {

	}

	public function save() {
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori')
		);
		$this->db->insert('kategori', $data);
	}

	public function del($id) {
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
	}

	public function update() {
		$where = array(
			'id_kategori' => $this->input->post('id_kategori')
		);
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori')
		);
		$this->db->update('kategori',$data,$where);
	}
}
