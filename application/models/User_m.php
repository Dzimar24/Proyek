<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class User_m extends CI_Model {

        public function __construct(){
            $this->load->database();
        }

		public function get($id = null) {
			$this->db->from('user');
			if($id != null ) {
				$this->db->where('id_user', $id);
			}
			$query = $this->db->get();
			return $query;
		}

		public function save() {
			$data = array(
				'username' 	=> $this->input->post('username'),
				'nama' 		=> $this->input->post('nama'),
				'password' 	=> $this->input->post('password'),
				'level'		=> $this->input->post('level'),
			);
			$this->db->insert('user', $data);
		}

		public function update() {
			$where = array(
				'id_user' => $this->input->post('id_user')
			);
			$data = array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama')
			);
			$this->db->update('user',$data,$where);
		}

		public function del($id) {
			$this->db->where('id_user', $id);
			$this->db->delete('user');
		}
	}
