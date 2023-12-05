<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_m');
		if ($this->session->userdata('level') <> 'Admin') {
			redirect('Auth');
		}
	}

	public function index() {
		$data['row'] = $this->user_m->get();
		$data['judul_halaman'] = 'User Page';
		$this->template->load('templateAdmin', 'admin/user', $data);
	}

	public function add() {
		$this->db->from('user');
		$this->db->where('username', $this->input->post('username'));
		$check = $this->db->get()->row();
		if ($check !== NULL) {
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Username Usudah Ada Yang Punya');
			}
			redirect('admin/user');
		}
		$data = $this->user_m->save();
		if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
        }
		redirect('admin/user');
	}

	public function update() {
		$this->user_m->update();
		if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Update');
        }
		redirect('admin/user');
	}

	public function del() {
        $id = $this->input->post('id_user');
        $this->user_m->del($id);

        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
        }

        redirect('admin/user');
    }

}
