<?php

class Gallery extends CI_Controller {
	# code...

	public function __construct() {
		parent::__construct();
		$this->load->model('Gallery_m');
		if ($this->session->userdata('level') == NULL) {
			redirect('Auth');
		} 
	}

	public function index() {
		//? Gallery 
		$this->db->from('gallery');
		$gallery = $this->db->get()->result_array();

		$data = array(
			'judul_halaman' => 'Gallery page',
			'gallery'		=> $gallery,
		);
		$this->template->load('templateAdmin', 'admin/Gallery', $data);
	}

	public function plus() {
		//? Upload Photo
        $namefoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'asep/upload/gallery/';
        $config['max_size'] = 3 * 1024 * 1024; //? 3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namefoto;
		$config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['photo']['size'] >= 3 * 1024 * 1024){
			$this->session->set_flashdata('success', 'Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.');
            redirect('admin/Gallery');  
		}
        if( ! $this->upload->do_upload('photo')){
            $error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('success', 'Terjadi kesalahan: '.$error['error']);
			redirect('admin/Gallery');
        }else{
            $data = array('upload_data' => $this->upload->data());
			$data_content = array(
				'title'				=> $this->input->post('title'),
				'photo'				=> $namefoto,
				'date'				=> date('Y-m-d'),
			);
			$data = $this->Gallery_m->save($data_content);
			$this->session->set_flashdata('success', 'Gallery Successfully Added');
			redirect('admin/Gallery');
        }
	}

	public function del() {
        $id = $this->input->post('photo');
		$filename=FCPATH.'/asep/upload/gallery/'.$id;
		if (file_exists($filename)){
			unlink("./asep/upload/gallery/".$id);
		}
		// var_dump($filename);
		// die;
        $this->Gallery_m->del($id);
		$this->session->set_flashdata('success', 'Gallery Successfully Deleted');
        redirect('admin/Gallery');
    }

}
