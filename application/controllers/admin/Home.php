<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('level') == NULL) {
			redirect('Auth');
		}
	}

	public function index() {
		$content = $this->db->get('konten')->num_rows();
		$ook = $this->db->get('saran')->num_rows();
		$w = $this->db->get('kategori')->num_rows();
		$s = $this->db->get('gallery')->num_rows();
		// $total = array_sum($content);
		$data = array(
			'judul_halaman' => 'Dashboard',
			'content' => $content,
			'ook' => $ook,
			'w' => $w,
			's' => $s
		);
		$this->template->load('templateAdmin', 'admin/dashboard', $data);
	}
}
