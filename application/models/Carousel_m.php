<?php

class Carousel_m extends CI_Model {

	public function index() {

	}

	public function save($data) {	
		$this->db->insert('caraousel', $data);
	}

	public function update($namefoto = null) {
		$data = array(
			'judul'				=> $this->input->post('judul')
		);

		$where = array(
			'foto'				=> $name != null ? $namefoto : $this->input->post('namePhoto'),
		);
		$this->db->update('caraousel',$data,$where);
	}

	public function del($id) {
		$this->db->where('foto', $id);
		$this->db->delete('caraousel');
	}

}
