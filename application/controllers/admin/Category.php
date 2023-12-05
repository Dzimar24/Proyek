<?php

class Category extends CI_Controller {
	# code...

	public function __construct() {
		parent::__construct();
		$this->load->model('Category_m');
		if ($this->session->userdata('level') <> 'Admin') {
			redirect('Auth');
		} 
	}

	public function index() {
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$category = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'Category Content',
			'kategori' 		=> $category
		);
		$this->template->load('templateAdmin', 'admin/Category', $data);
	}

	public function add() {
		$this->db->from('kategori');
		$this->db->where('nama_kategori',$this->input->post('nama_kategori'));
		$check = $this->db->get()->result_array();
		// var_dump($check);
		// die();
		if ($check <> NULL) {
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Category Content Already Available');
			}
			redirect('admin/Category');
		}
		$data = $this->Category_m->save();
		if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Successfully Added');
        }
		redirect('admin/Category');
	}

	public function update() {
		$this->Category_m->update();
		if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Successfully Updated');
        }
		redirect('admin/Category');
	}

	public function del() {
        $id = $this->input->post('id_kategori');
        $this->Category_m->del($id);

        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Successfully Deleted');
        }

        redirect('admin/Category');
    }
}
