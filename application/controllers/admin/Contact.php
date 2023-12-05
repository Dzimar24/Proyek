<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->load->model('');
	}

	public function index() {
		$this->db->from('saran');
		$contact = $this->db->get()->result_array();

		$data = array(
			'contact' => $contact,
			'judul_halaman'   => 'Contact Page'
		);

		$this->template->load('templateAdmin', 'admin/Contact', $data);
	}

	public function delete() {
		$this->db->where_in('id_saran', $this->input->post('opo'));
		$this->db->delete('saran');

		$this->session->set_flashdata('success', 'Contact Successfully Deleted');
		redirect('admin/Contact');
	}
}
