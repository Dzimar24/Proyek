<?php

class Configuration_m extends CI_Model
{
	# code...

	public function index() {

	}

	public function update() {
		$where = array(
			'id_konfigurasi' => 1
		);
		$data = array(
			'judul_website' 	=> $this->input->post('judul_website'),
			'profil_website' 	=> $this->input->post('profil_website'),
			'instagram' 		=> $this->input->post('instagram'),
			'facebook' 			=> $this->input->post('facebook'),
			'twitter' 			=> $this->input->post('twitter'),
			'email' 			=> $this->input->post('email'),
			'alamat' 			=> $this->input->post('alamat'),
			'no_wa' 			=> $this->input->post('no_wa')
		);
		$this->db->update('konfigurasi',$data,$where);
	}
}
