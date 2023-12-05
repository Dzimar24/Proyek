<?php

class Content extends CI_Controller {
	# code...

	public function __construct() {
		parent::__construct();
		$this->load->model('Content_m');
		if ($this->session->userdata('level') == null) {
			redirect('Auth');
		} 
	}

	public function index() {
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$category = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->order_by('a.id_konten','DESC');
		$content = $this->db->get()->result_array();
		
		$data = array(
			'judul_halaman' => 'Content Page',
			'kategori' 		=> $category,
			'konten' 		=> $content
		);
		$this->template->load('templateAdmin', 'admin/Content', $data);
	}

	public function add() {

		//? Upload Photo
        $namefoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'asep/upload/content/';
        $config['max_size'] = 3 * 1024 * 1024; //? 3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namefoto;
		$config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 3 * 1024 * 1024){
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.');
			}
            redirect('admin/content');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
			
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   

		$data_content = array(
			'judul'				=> $this->input->post('judul'),
			'id_kategori'		=> $this->input->post('id_kategori'),
			'keterangan'		=> $this->input->post('keterangan'),
			'sumber'			=> $this->input->post('sumber'),
			'tanggal'			=> date('Y-m-d'),
			'username'			=> $this->session->userdata('username'),
			'foto'				=> $data['upload_data']['file_name'],
			'slug'				=> str_replace(' ','-',$this->input->post('judul')),
		);
		$data = $this->Content_m->save($data_content);
		if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Content Successfully Added');
        }
		redirect('admin/Content');
	}

	public function update() {
		//? Upload Photo
		if($_FILES['foto']['name'] != null || $_FILES['foto']['name'] != ''){
			$namefoto =  $this->input->post('namePhoto');
			// var_dump($namefoto);
			$config['upload_path']          = 'asep/upload/content/';
			$config['max_size'] = 3 * 1024 * 1024; //? 3 * 1024 * 1024; //3Mb; 0=unlimited
			$config['file_name']            = $namefoto;
			$config['overwrite']            = TRUE;
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			if($_FILES['foto']['size'] >= 3 * 1024 * 1024){
				// die;
				$this->session->set_flashdata('success', 'Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.');
				redirect('admin/content');  
			} elseif( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$data = array('upload_data' => $this->upload->data());
			}
			$data = $this->Content_m->update($namefoto);
		} else {
			$data = $this->Content_m->update();
		}
		$this->session->set_flashdata('success', 'Content Successfully Updated');
		redirect('admin/Content');
	}

	public function del() {
        $id = $this->input->post('foto');
		$filename=FCPATH.'/asep/upload/content/'.$id;
		if (file_exists($filename)){
			unlink("./asep/upload/content/".$id);
		}
		// var_dump($filename);
		// die;
        $this->Content_m->del($id);
		$this->session->set_flashdata('success', 'Content Successfully Deleted');
        redirect('admin/Content');
    }
}
