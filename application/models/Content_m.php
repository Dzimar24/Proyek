<?php

class Content_m extends CI_Model {

	public function index() {

	}

	public function save($data) {	
		$this->db->insert('konten', $data);
	}

	public function del($id) {
		$this->db->where('foto', $id);
		$this->db->delete('konten');
	}

	public function update($namefoto = null) {
		$data = array(
			'judul'				=> $this->input->post('judul'),
			'id_kategori'		=> $this->input->post('id_kategori'),
			'keterangan'		=> $this->input->post('keterangan'),
			'sumber'			=> $this->input->post('sumber'),
			'slug'				=> str_replace(' ','-',$this->input->post('judul')),
		);

		$where = array(
			'foto'				=> $name != null ? $namefoto : $this->input->post('namePhoto'),
		);
		$this->db->update('konten',$data,$where);
	}

}
