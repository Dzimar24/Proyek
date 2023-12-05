<?php

class Carousel extends CI_Controller {
	# code...

	public function __construct() {
		parent::__construct();
		$this->load->model('Carousel_m');
		if ($this->session->userdata('level') <> 'Admin') {
			redirect('Auth');
		} 
	}

	public function index() {
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		
		$data = array(
			'judul_halaman' => 'Carousel Page',
			'caraousel' 		=> $caraousel,
		);
		$this->template->load('templateAdmin', 'admin/Carousel', $data);
	}

	public function add() {

		//? Upload Photo
        $namefoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'asep/upload/carousel/';
        $config['max_size'] = 3 * 1024 * 1024; //? 3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namefoto;
		$config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 3 * 1024 * 1024){
			$this->session->set_flashdata('success', 'Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.');
            redirect('admin/Carousel');  
		}
        if( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('success', 'Terjadi kesalahan: '.$error['error']);
			redirect('admin/Carousel');
        }else{
            $data = array('upload_data' => $this->upload->data());
			$data_Carousel = array(
				'judul'				=> $this->input->post('judul'),
				'foto'				=> $namefoto,
			);
			$data = $this->Carousel_m->save($data_Carousel);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Carousel Successfully Added');
			}
			redirect('admin/Carousel');
        }
	}

	public function update() {
		//? Upload Photo
		if($_FILES['foto']['name'] != null || $_FILES['foto']['name'] != ''){
			$namefoto =  $this->input->post('namePhoto');
			// var_dump($namefoto);
			$config['upload_path']          = 'asep/upload/Carousel/';
			$config['max_size'] = 3 * 1024 * 1024; //? 3 * 1024 * 1024; //3Mb; 0=unlimited
			$config['file_name']            = $namefoto;
			$config['overwrite']            = TRUE;
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			if($_FILES['foto']['size'] >= 3 * 1024 * 1024){
				// die;
				$this->session->set_flashdata('success', 'Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.');
				redirect('admin/Carousel');  
			} elseif( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$data = array('upload_data' => $this->upload->data());
			}
			$data = $this->Carousel_m->update($namefoto);
		} else {
			$data = $this->Carousel_m->update();
		}
		$this->session->set_flashdata('success', 'Carousel Successfully Updated');
		redirect('admin/Carousel');
	}

	public function del() {
        $id = $this->input->post('foto');
		$filename=FCPATH.'/asep/upload/carousel/'.$id;
		if (file_exists($filename)){
			unlink("./asep/upload/carousel/".$id);
		}
		// var_dump($filename);
		// die;
        $this->Carousel_m->del($id);

        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Carousel Successfully Deleted');
        }

        redirect('admin/Carousel');
    }
}
