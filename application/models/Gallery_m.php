<?php

class Gallery_m extends CI_Model {

	public function index() {

	}

	public function save($data) {	
		$this->db->insert('gallery', $data);
	}

	public function del($id) {
		$this->db->where('photo', $id);
		$this->db->delete('gallery');
	}

}
