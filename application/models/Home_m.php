<?php

class Home_m extends CI_Model {

	public function index() {

	}

	public function get_data($limit, $start) {
		//? Content
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$query = $this->db->get('', $limit, $start);
		return $query->result_array();
	}

	public function count_data() {
		return $this->db->count_all('konten');
	}

	public function count() {
		return $this->db->get('konten')->num_rows();
	}

	// public function getContent($limit, $start) {
	// 	return $this->db->get('konten', $limit, $start)->result_array();
	// }

	public function rcp() {
		//? Content
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->order_by('a.tanggal','DESC');
		$this->db->limit(4);
		return $this->db->get()->result_array();
	}

	public function plus() {
		$data = array(
			'isi_saran' 	=> $this->input->post('isi_saran'),
			'tanggal' 		=> date('Y-m-d'),
			'name' 	=> $this->input->post('name'),
			'email'		=> $this->input->post('email'),
		);
		$this->db->insert('saran', $data);
	}
}
