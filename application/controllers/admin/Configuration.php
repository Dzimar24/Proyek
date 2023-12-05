<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Configuration_m');
		if ($this->session->userdata('level') == NULL) {
			redirect('Auth');
		}
	}

	public function index() {
		$this->db->from('konfigurasi');
		$config = $this->db->get()->row();
		$data = array(
			'judul_halaman' => 'Page Configuration',
			'config'		=> $config	
		);
		$this->template->load('templateAdmin', 'admin/configuration', $data);
	}

	public function update() {
		$this->Configuration_m->update();
		$this->session->set_flashdata('success', 'Configuration Successfully Updated');
		redirect('admin/Configuration');
	}
}
